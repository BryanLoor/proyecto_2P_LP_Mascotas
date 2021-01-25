
<?php
    $sql = "SELECT * FROM adopciones WHERE especie = 'gato' AND sexo = 'macho'";
    $resultado = mysqli_query($db,$sql);
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "$row[especie], $row[sexo], $row[edad], $row[nombre], $row[descripcion] <br>";
    }
?>