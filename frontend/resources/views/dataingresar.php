<?php
include_once("header.php");
?>

<?php 
    $sql = "INSERT INTO adopcions (especie, sexo, edad, nombre, descripcion) VALUES ('$_GET[especie]','$_GET[sexo]','$_GET[edad]','$_GET[nombre]', '$_GET[descripcion]')";
    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    
?>

<?php 
include_once("footer.php");
?>
