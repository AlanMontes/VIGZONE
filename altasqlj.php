<?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'vigzone'); /*conección con la base de datos*/
    $mysqli->set_charset("utf8"); /*codificación de los caracteres*/
    $query = $mysqli->query("INSERT INTO juegos (id_juego, nombre, tipo, precio, marca, imagen) VALUES ('".$_POST['idjuego']."', '".$_POST['nombre']."', '".$_POST['tipo']."', '".$_POST['precio']."', '".$_POST['marca']."', '".$_POST['imagen']."');");/*codigo en sql para agegar datos a los campos de una tabla*/
    header("Location: base.php");/*función para direccionar a otra página dentro de la misma carpeta*/
?>