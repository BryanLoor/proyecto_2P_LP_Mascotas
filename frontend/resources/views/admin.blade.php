
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
   @font-face {
    font-family: 'Galada';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: local('Galada Regular'), local('Galada-Regular'), url(https://fonts.gstatic.com/s/galada/v5/H4cmBXyGmcjXlUXO9SY_.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  .caja{
    background: #f7f5f5; 
    font-weight: bold; 
    padding: 15px; 
    border-left:8px solid #000000; 
    border-top-left-radius:8px; 
    border-bottom-left-radius:8px;
  }
  h2 {
  background-color: black;
  color: white;
}
.fin {
  background-color: black;
  color: white;
  
}
  body {
    background-image: url("../img/fundacion.jpg");
    font-family: 'Galada';
    font-size: 1.25em; 
    background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  }
  ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
  }
  
  li {
      float: left;
      border-right:1px solid #bbb;
  }
  
  li:last-child {
      border-right: none;
  }
  
  li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
  }
  
  li a:hover:not(.active) {
      background-color: #111;
  }
  .primary{
    background-color: rgb(52, 69, 165);

  }
  
  .active {
      background-color: #4CAF50;
  }
</style>


<body>
    <p></p>

    <h2 class="text-center"> Opciones de Administrador</h1>
    
<div class="text-center">
<a href="{{ url('admin/create')}} " class="btn btn-warning m-2" >Ingresar</a>

</div>
    
    <div class="container d-flex justify-content-center text-center ">

    <table class="table table-dark w-75">
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
  @foreach($mascotas as $mascota)
    <tr>
      <td>{{$mascota->especie}}</td>
      <td>{{$mascota->nombre}}</td>
      <td>{{$mascota->edad}}</td>
      <td>{{$mascota->id}}</td>
      <td>
      <a href="{{ url('admin/'.$mascota->id.'/edit' )}} " class="btn btn-warning">Editar</a>
      </td>

    <td>
        <form action="{{ url('admin', $mascota->id) }}"  method="post">
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

    <div class ="fin" align="center">
    <p >Grupo de LP</p>
  <p ><a href="mailto:lp@example.com">lp@example.com</a></p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
   
