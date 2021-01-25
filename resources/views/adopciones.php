<?php include("header.php"); ?>
<body>
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
</body>
<?php include("footer.php"); ?>