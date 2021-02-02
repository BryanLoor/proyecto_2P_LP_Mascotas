@extends('plantilla')

@section('contenido')
<div class="container d-flex justify-content-center text-center  ">
<p></p>
<form  class="bg-secondary form-control w-75 " action="{{ url('admin', $mascota->id) }}" method="post">
    @csrf() 
    @method('put')
    <label class="form-label text-white" >Elija la especie:</label> 
          <select   class="form-select" name="especie"  value= "{{ $mascota->especie }}" required>  
              <option>Escoja una opcion</option> 
              <option value="gato">Gato</option> 
              <option value="perro">Perro</option> 
          </select > 
    </p><label class="form-label text-white" >Elija el sexo:</label> 
          <select class="form-select" name="sexo"  value= "{{ $mascota->sexo }}" required>  
              <option>Escoja una opcion</option> 
              <option value="macho">Macho</option> 
              <option value="hembra">Hembra</option> 
          </select>
          
        <p class="text-white">Ingrese la edad en meses de la mascota: <input type="text" name="edad"  value= "{{ $mascota->edad }}"required></p>
        <p class="text-white">Ingrese nombre de la mascota: <input type="text" name="nombre" value= "{{ $mascota->nombre }}" required></p>
        <p class="text-white">Ingrese descripcion de la mascota: <input type="text" name="descripcion" value= "{{ $mascota->descripcion }}" required></p>
        <p><input type="submit" value="Actualizar Mascota" class="btn btn-success"></p>

    </form>
    <p></p>

    </div>



@endsection