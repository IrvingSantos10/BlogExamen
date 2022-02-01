<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bibliografia;

class VistasController extends Controller
{
     public function index()
     {
         
          return view('ExamenBlog.index');
     }

     public function contacto()
     {
          return view('ExamenBlog.Contacto');
     }

     public function posts()
     {
          $bibliografia1= new Bibliografia;
          $bibliografia1->titulo="Arquitectura cliente servidor";
          $bibliografia1->autor="Juan Zarate Gonzalez";
          $bibliografia1->url="https://es.wikipedia.org/wiki/Cliente-servidor";
          $bibliografia1->año="2017";

          $bibliografia2= new Bibliografia;
          $bibliografia2->titulo="Sistemas de Informacion";
          $bibliografia2->autor="Roxana Ibarra Espinosa";
          $bibliografia2->url= "https://concepto.de/sistema-de-informacion/";
          $bibliografia2->año= "2015";

          $bibliografia3= new Bibliografia;
          $bibliografia3->titulo="La evolución de los sistemas de información.";
          $bibliografia3->autor="Israel Sosa Castro";
          $bibliografia3->url= "https://www.tecnologias-informacion.com/evolucionsistemas.html";
          $bibliografia3->año= "2014";

          $bibliografia4= new Bibliografia;
          $bibliografia4->titulo="Computadoras Centrales y Dedicadas";
          $bibliografia4->autor="Marco Antonio Sánchez";
          $bibliografia4->url= "https://softwarelab.org/es/servidor-dedicado/#:~:text=Un%20servidor%20dedicado%20es%20un,";
          $bibliografia4->año= "2019";

          $bibliografia5= new Bibliografia;
          $bibliografia5->titulo="Los sistemas de conexión libre y a través de redes";
          $bibliografia5->autor="Juan Carlos Sánchez";
          $bibliografia5->url= "https://www.ecured.cu/Arquitectura_Cliente_Servidor";
          $bibliografia5->año= "2014";

          $bibliografia6= new Bibliografia;
          $bibliografia6->titulo="Los sistemas con arquitectura  Cliente/Servidor ";
          $bibliografia6->autor="Juan Carlos Sánchez";
          $bibliografia6->url= "https://www.ecured.cu/Arquitectura_Cliente_Servidor";
          $bibliografia6->año= "2014";

          $bibliografia7= new Bibliografia;
          $bibliografia7->titulo="Protocolos de comunicación en red.";
          $bibliografia7->autor="Elizabeth Santos Rodriguez";
          $bibliografia7->url= "https://www.kionetworks.com/blog/data-center/protocolos-de-comunicaci%C3%B3n-de-redes";
          $bibliografia7->año= "2015";

          $bibliografia8= new Bibliografia;
          $bibliografia8->titulo="Clasificacion por Arquitectura";
          $bibliografia8->autor="Gabriel Martinez Bae";
          $bibliografia8->url= "https://megasoft-ltd.ru/es/classification/architecture/";
          $bibliografia8->año= "2014";
          
          return view('ExamenBlog.Posts',['bibliografia1'=>$bibliografia1,'bibliografia2'=>$bibliografia2,'bibliografia3'=>$bibliografia3, 'bibliografia4'=>$bibliografia4,
                      'bibliografia5'=>$bibliografia5,'bibliografia6'=>$bibliografia6,'bibliografia7'=>$bibliografia7,'bibliografia8'=>$bibliografia8]);
     }

     public function sobreN()
     {
          return view('ExamenBlog.SobreN');
     }
}
