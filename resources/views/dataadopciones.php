<
<?php include("header.php"); ?>
<?php
    $sql = "SELECT * FROM adopciones WHERE especie = $_GET[especie] AND sexo = $_GET[producto]";
    $resultado = mysqli_query($db,$sql);
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "$row[especie], $row[sexo], $row[edad], $row[nombre], $row[descripcion] <br>";
    }
?>

<?php include("footer.php"); ?>