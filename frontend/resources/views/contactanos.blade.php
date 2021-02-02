
@extends('plantilla')

@section('contenido')


<div class="cabecera" align="center">
    <h2 class="tituloCabecera"> Contáctanos </h2>
</div>
<div id="contacto" align="center">
    <p> Llena el siguiente formulario para regitrar tu adopción, pronto te contactaremos</p>
    <form  class="" action="{{ url('contacto/create') }}" method="post" align="center">
    @csrf() 
        <p>Ingrese el id de las mascota: <input type="text" name="id_mascota" required></p>
        <p>Ingrese su cédula: <input type="text" name="cedula" required></p>
        <p>Ingrese su nombre: <input type="text" name="nombre" required></p>
        <p>Ingrese su edad: <input type="text" name="edad" required></p>
        <p>Género: </p>
          <select name="genero" >  
              <option>Choose an option</option> 
              <option value="masculino">Masculino</option> 
              <option value="Femenino">Femenino</option> 
          </select>
        <p>Ingrese su telefono: <input type="text" name="telefono" required></p>
        <p>Ingrese su email: <input type="text" name="descripcion" required></p>
        <p>Ingrese su dirección: <input type="text" name="direccion" required></p>
        <p><input type="submit" value="Enviar"  class="btn btn-primary"></p>

    </form>
    
</div>



@endsection