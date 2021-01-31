<?php
include_once("header.php");

$sql = "SELECT * FROM adopcions WHERE nombre = '$_GET[nombre]'";
$resultado = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($resultado);
?>

    <form action="datamodificar2.php" method="get">
        <p>Modifique el nombre de la Mascota: <input type="text" name="nombre" value='<?php echo "$row[nombre]" ?>'></p>
        <p><input type="submit"></p>
    </form>

<?php 
include_once("footer.php");
?>