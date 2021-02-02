<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\Cast\Array_;
use PhpParser\Node\Expr\Cast\Object_;

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


    public function ObtenerSeleccion(Request $request){
        $resultados= array();
        $respuesta=$this->cliente->get('mascotas');
        $cuerpo=json_decode($respuesta->  getBody());
        $json = $request->all();
        foreach($cuerpo as $valor){
            if($valor->especie == $json["especie"] && 
            $valor->sexo == $json["sexo"]){
                array_push($resultados,$valor);
            }

        }
        return view('adoptar',['mascotas'=>$resultados]);


    }

}