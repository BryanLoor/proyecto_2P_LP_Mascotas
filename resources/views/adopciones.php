<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

    <form action="dataadopciones.php" method="get">

        <p>Elija la especie  </p>
        <select  name="especie">  
            <option>Choose an option</option> 
            <option value="gato">Gato</option> 
            <option value="perro">Perro</option> 
        </select > 
        <p>Elija el sexo: </p>
        <select name="sexo" >  
            <option>Choose an option</option> 
            <option value="macho">Macho</option> 
            <option value="hembra">Hembra</option> 
        </select>
        <p><input type="submit"></p>
    </form>

    <p>Grupo de LP</p>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <p><a href="mailto:lp@example.com">lp@example.com</a></p>
</html>
