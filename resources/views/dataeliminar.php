<?php
include_once("header.php");
?>


<?php 

   
    $sql = "DELETE FROM adopciones WHERE nombre = '$_POST[nombre]'";
    if (mysqli_query($db, $sql)) {
        echo "Se ha eliminado con exito!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
  
?>

<?php 
include_once("footer.php");
?>
