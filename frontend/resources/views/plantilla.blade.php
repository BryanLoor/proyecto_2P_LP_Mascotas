<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopciones</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
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
    <ul>
        <li><a href="{{ url('somos')}}">Quienes Somos</a></li>
        <li><a href="{{ url('noticias')}}">Noticias</a></li>
        <li><a href="{{ url('adoptar')}}">Adoptar</a></li>
        <li><a href="{{ url('contactanos')}}">Contacto</a></li>
    </ul>

    <div>

        @yield('contenido')
        
    </div>


    <p>Grupo de LP</p>
  <p><a href="mailto:lp@example.com">lp@example.com</a></p>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>