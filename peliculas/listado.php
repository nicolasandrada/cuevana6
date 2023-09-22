<?php
include "conexion.php";

$sql = "SELECT * FROM pelicula ";

$res = $con->query($sql);


while($datos = $res->fetch_assoc()){
    echo "<div>";
    echo "<img src='img/$datos[foto]' width=100>";
    echo "<h3>$datos[titulo]</h3>";
    echo "<p>$datos[genero]</p>";
    echo "</div>";
}

?>