<?php
include_once("header.php");
?>


<?php 
    $sql = "UPDATE adopcions SET nombre='$_GET[nombre]'  WHERE nombre = $_GET[nombre] ";
    if (mysqli_query($db, $sql)) {
        echo "Se ha editado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
  
?>

<?php 
include_once("footer.php");
?>