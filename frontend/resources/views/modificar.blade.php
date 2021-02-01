@extends('plantilla')

@section('contenido')
<form  class="" action="{{ url('adopciones', $mascota->id) }}" method="post">
    @csrf() 
    @method('put')
    <p><label >Elija la especie:</label> 
          <select  name="especie"  value= "{{ $mascota->especie }}" required>  
              <option>Choose an option</option> 
              <option value="gato">Gato</option> 
              <option value="perro">Perro</option> 
          </select > 
    </p><label >Elija el sexo:</label> 
          <select name="sexo"  value= "{{ $mascota->sexo }}" required>  
              <option>Choose an option</option> 
              <option value="macho">Macho</option> 
              <option value="hembra">Hembra</option> 
          </select>
          
        <p>Ingrese la edad en meses de la mascota: <input type="text" name="edad"  value= "{{ $mascota->edad }}"required></p>
        <p>Ingrese nombre de la mascota: <input type="text" name="nombre" value= "{{ $mascota->nombre }}" required></p>
        <p>Ingrese descripcion de la mascota: <input type="text" name="descripcion" value= "{{ $mascota->descripcion }}" required></p>
        <p><input type="submit" value="Actualizar Mascota" class="btn btn-success"></p>

    </form>





@endsection