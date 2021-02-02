@extends('plantilla')

@section('contenido')
<p>   </p>

<div class="cabecera" align="center">
    <h2 class="tituloCabecera"> Noticias </h2>
</div>
<div id="actualizacion" align="center">
<p>   </p>
    <div class="caja">
        <h3 class="subitulo">Actualización de la ubicación de nuestro albergue</h3>
        <p>Nos mudamos a la ciudad de Guayaquil. Ahora podrás visitarnos aquí. </p>
        <div id="contenedorImagenNoticia">
            <img id="imagenNoticia" src="../img/albergue.jpg" alt="Albergue"  width="400" height="200" class="center" />
        </div>
    </div>
    <p>   </p>
    <div class="caja">
        <h3 class="subitulo">Adopción Responsable</h3>
        <p> Una adopción responsable implica deberes diarios con tu mascota que debes asumir durante toda su vida.
        Para educarle correctamente necesitas paciencia e invertir tiempo en tu nuevo amigo. </p>
        <div id="contenedorImagenNoticia">
            <img id="imagenNoticia" src="../img/mascotas.jpg" alt="Mascotas"  width="400" height="200" class="center" />
        </div>
    </div>
    <p>   </p>
    <p>   </p>
</div>



@endsection