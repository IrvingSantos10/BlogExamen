<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lugares;

class VistasController extends Controller
{
    public function index()
    {
        $paisajes = Lugares::all();
        return view('index', compact('paisajes'));
    }

    
}
