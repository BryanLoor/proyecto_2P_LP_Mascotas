<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="/css/estilos.php" media="screen" />

<?php
    $sql = "SELECT * FROM adopciones WHERE especie = 'gato' AND sexo = 'macho'";
    $resultado = mysqli_query($db,$sql);
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "$row[especie], $row[sexo], $row[edad], $row[nombre], $row[descripcion] <br>";
    }
?>

<p>Grupo de LP</p>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <p><a href="mailto:lp@example.com">lp@example.com</a></p>
</html>
