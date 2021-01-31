<?php
include_once("header.php");
?>

    <form action="dataingresar.php" method="get">
    <p><label >Elija la especie:</label> 
          <select  name="especie">  
              <option>Choose an option</option> 
              <option value="gato">Gato</option> 
              <option value="perro">Perro</option> 
          </select > 
    </p><label >Elija el sexo:</label> 
          <select name="sexo" >  
              <option>Choose an option</option> 
              <option value="macho">Macho</option> 
              <option value="hembra">Hembra</option> 
          </select>
          
        <p>Ingrese la edad en meses de la mascota: <input type="text" name="edad"></p>
        <p>Ingrese nombre de la mascota: <input type="text" name="nombre"></p>
        <p>Ingrese descripcion de la mascota: <input type="text" name="descripcion"></p>
        <p><input type="submit"></p>

    </form>

<?php 
include_once("footer.php");
?>