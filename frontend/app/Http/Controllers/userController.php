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

    public function index()
    {
        $respuesta=$this->cliente->get('mascotas');
        $cuerpo=$respuesta->getBody();
        //return json_decode($cuerpo);
        return view('admin',['mascotas'=>json_decode($cuerpo)]);
    }

}
