@extends('plantilla')

@section('contenido')


<form action="/" method="post" align="center">
          <p>Elija la especie  </p>
          <select  name="especiee">  
              <option>Choose an option</option> 
              <option value="gato">Gato</option> 
              <option value="perro">Perro</option> 
          </select > 
          <p>Elija el sexo: </p>
          <select name="sexoo" >  
              <option>Choose an option</option> 
              <option value="macho">Macho</option> 
              <option value="hembra">Hembra</option> 
          </select>
          <p><input type="submit"></p>
      </form>

@endsection