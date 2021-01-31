

<?php include("header.php"); ?>
<?php
    $sql = "SELECT * FROM adopcions WHERE especie = '$_POST[especiee]' AND sexo ='$_POST[sexoo]'";
    $resultado = mysqli_query($db,$sql);
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<p>Especie: $row[especie] <br>";
        echo "Sexo: $row[sexo] <br>";
        echo "Edad en meses: $row[edad] <br>";
        echo "Nombre: $row[nombre] <br>";
        echo "Descripción breve: $row[descripcion] <br></p>";

    }
?>

<?php include("footer.php"); ?>