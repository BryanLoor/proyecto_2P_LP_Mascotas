
<?php
#arrayDatos contiene los datos de la API

$datos = json_decode(file_get_contents('http://localhost:4000/adopciones'),true);
#print_r($datos);
#print_r(array_values($datos));
$arrayDatos=array_values($datos);


?>
