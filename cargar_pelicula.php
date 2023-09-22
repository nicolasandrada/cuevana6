<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php 
    include "includes/header.php"
    ?>
    
    <form action="peliculas/guardar.php" method="post" enctype="multipart/form-data">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo">
        <input type="file" name="foto" id="foto" >
        <input type="checkbox" name="cat" id="" value="terror">
        <input type="checkbox" name="cat" id="" value="comedia">
        <input type="checkbox" name="cat" id="" value="drama">
        <input type="checkbox" name="cat" id="" value="documental">

        <input type="submit" value="Guardar ">
    </form>

</body>
</html>