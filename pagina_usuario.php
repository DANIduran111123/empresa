<?php
    require 'modelo/conexion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página del usuario</title>
</head>
<body>
    <h1>Página del usuario</h1>
    <hr>
    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>
    <hr>
    <a href="modelo/cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>