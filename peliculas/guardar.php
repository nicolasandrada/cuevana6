<?php
include "../conexion.php";

$foto = $_FILES['foto'];
$categoria = $_POST['cat'];
$titulo = $_POST['titulo'];

//var_dump($foto);

move_uploaded_file($foto['tmp_name'], "../img/$foto[name]");

$cadena = implode(", ", $categoria);

$sql = "INSERT INTO pelicula(titulo, foto, genero)
        VALUES ('$titulo', '$foto[name]', '$cadena')";

$res = $con->query($sql);

header("location:../index.php");