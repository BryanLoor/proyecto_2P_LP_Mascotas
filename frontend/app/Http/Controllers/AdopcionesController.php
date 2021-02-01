<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AdopcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $cliente;
    public function __construct()
    {
        $this->cliente=new Client([
            'base_uri'=>'http://localhost:4000/'
        ]);
    }


    public function index()
    {
        $respuesta=$this->cliente->get('adopciones');
        $cuerpo=$respuesta->getBody();
        //return json_decode($cuerpo);
        return view('eliminar',['adopciones'=>json_decode($cuerpo)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingresar');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->cliente->post('adopciones',[
            'json'=> $request->all()
        ]);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $respuesta=$this->cliente->get('adopciones/'.$id);
        $cuerpo=$respuesta->getBody();
        //return json_decode($cuerpo);
        return view('modificar',['mascota'=>json_decode($cuerpo)]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->cliente->put('adopciones/'.$id,[
            'json'=> $request->all()
        ]);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cliente->delete('adopciones/'.$id);
        return redirect('/admin');
       
    }
}
