@extends('plantilla')

@section('contenido')
<form  enctype="multipart/form-data" class="" action="{{ url('admin') }}" method="post">
    @csrf() 
    <p><label >Elija la especie:</label> 
          <select  name="especie" require>  
              <option>Choose an option</option> 
              <option value="gato">Gato</option> 
              <option value="perro">Perro</option> 
          </select > 
    </p><label >Elija el sexo:</label> 
          <select name="sexo"  require>  
              <option>Choose an option</option> 
              <option value="macho">Macho</option> 
              <option value="hembra">Hembra</option> 
          </select>
          
        <p>Ingrese la edad en meses de la mascota: <input type="text" name="edad" required></p>
        <p>Ingrese nombre de la mascota: <input type="text" name="nombre" required></p>
        <p>Ingrese descripcion de la mascota: <input type="text" name="descripcion" required></p>
        <input accept="image/*" id="file=img" name="imagenMascota" type="file"/>

        <p>Subir una imagen de la mascota <input type="submit" value="Registrar"  class="btn btn-primary"></p>

    </form>





@endsection