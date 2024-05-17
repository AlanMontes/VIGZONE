<?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'vigzone'); /*conección con la base de datos*/
    $mysqli->set_charset("utf8"); /*codificación de los caracteres*/
    $query = $mysqli->query("INSERT INTO usuarios (id_usuario, usuario, nombre, contrasena, email, tipo) VALUES ('".$_POST['idusuario']."', '".$_POST['usuario']."', '".$_POST['nombre']."', '".$_POST['contrasena']."', '".$_POST['email']."', '".$_POST['tipo']."');");/*codigo en sql para agegar datos a los campos de una tabla*/
    header("Location: base.php");/*función para direccionar a otra página dentro de la misma carpeta*/
?>