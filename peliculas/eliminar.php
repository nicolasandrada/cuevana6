<?php
include "../conexion.php";

$id =  $_GET['id'];

$sql = "DELETE FROM pelicula WHERE id = $id";

$res = $con->query($sql);