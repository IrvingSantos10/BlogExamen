<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CatfacsController extends Controller
{
    //
    public function catfacs(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://catfact.ninja/breeds');
        $resultados = json_decode($response->getBody()->getContents(), true);
        $gatos = [];
        foreach ($resultados['data'] as $resultado) {
            $gatos[] = [
                'breed' => $resultado['breed'],
                'country' => $resultado['country'],
                'origin' => $resultado['origin'],
                'coat' => $resultado['coat'],
                'pattern' => $resultado['pattern'],
            ];
            
        }
        

        return $gatos;
    }
    public function Vista1()
    {
        return view('Vista1', ['gatos' => $this->catfacs()]);
    }
}
