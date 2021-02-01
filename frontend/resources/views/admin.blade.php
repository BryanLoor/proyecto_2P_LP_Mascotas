
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopciones</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>   
<style>
   
</style>

<body>
  
    <h1 class="text-center"> Opciones de Administrador</h1>
    

    <a href="{{ url('adopciones/create')}} " class="btn btn-warning m-2 " >Ingresar</a>
    
    <div class=" ">
   
    <table class="table table-striped w-75">
    <thead>
    <tr>
      <th scope="col">Especie</th>
      <th scope="col">Nombre</th>
      <th scope="col">edad</th>
      <th scope="col">id</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
      
      

    </tr>
  </thead>
  <tbody>
  @foreach($adopciones as $adopcion)
    <tr>
      <td>{{$adopcion->especie}}</td>
      <td>{{$adopcion->nombre}}</td>
      <td>{{$adopcion->edad}}</td>
      <td>{{$adopcion->id}}</td>
      <td>
      <a href="{{ url('adopciones/'.$adopcion->id.'/edit' )}} " class="btn btn-warning">Editar</a>
      </td>

    <td>
        <form action="{{ url('adopciones', $adopcion->id) }}"  method="post">
            @csrf
            @method('DELETE')
            <input  class="btn btn-danger" type="submit" value="Eliminar">
        </form>

    </td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>
       
        
    </div>


    <p>Grupo de LP</p>
  <p><a href="mailto:lp@example.com">lp@example.com</a></p>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
  
   
