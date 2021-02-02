@extends('plantilla')

@section('contenido')

<div id="adoptar" align="center">

    <form  class="" action="{{ url('adoptar') }}" method="post"  >
            <p>Elija la especie  </p>
            <select class=" text-center form-select w-50"  name="especiee">  
                <option>Choose an option</option> 
                <option value="gato">Gato</option> 
                <option value="perro">Perro</option> 
            </select > 
            <p>Elija el sexo: </p>
            <select class=" text-center form-select w-50" name="sexoo" >  
                <option>Choose an option</option> 
                <option value="macho">Macho</option> 
                <option value="hembra">Hembra</option> 
            </select>
            <p><input type="submit" class="btn btn-primary"></p>
        </form>

</div>


@endsection