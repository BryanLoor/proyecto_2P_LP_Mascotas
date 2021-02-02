<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
class userController extends Controller
{
private $cliente;
    public function __construct()
    {
        $this->cliente=new Client([
            'base_uri'=>'http://localhost:4000/'
        ]);
    }

    public function findAll()
    {
        $respuesta=$this->cliente->get('mascotas');
        $cuerpo=$respuesta->getBody();
        //return json_decode($cuerpo);
        return view('adoptar',['mascotas'=>json_decode($cuerpo)]);
    }


    public function ObtenerSeleccion($id){

        $respuesta=$this->cliente->get('mascotas/'.$id);
        $cuerpo=$respuesta->getBody();
        //return json_decode($cuerpo);
        return view('adoptar',['mascotas'=>json_decode($cuerpo)]);


    }





}
