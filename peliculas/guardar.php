<?php
include "../conexion.php";

$foto = $_FILES['foto'];

var_dump($foto);

move_uploaded_file($foto['tmp_name'], '../img/$foto[name]')

$sql = "INSERT INTO pelicula(titulo, foto, genero)
        VALUES ('pinocho', 'pino.jpg', 'comedia, drama')";

//$res = $con->query($sql);