<?php
    $id=$_GET['id'];
    $mysqli = new mysqli('localhost','root', 'root', 'vigzone');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("UPDATE usuarios SET usuario='".$_POST['usuario']."', nombre='".$_POST['nombre']."', contrasena='".$_POST['contrasena']."', email='".$_POST['email']."', tipo='".$_POST['tipo']."' WHERE id_usuario='".$_POST['idusuario']."'");
    header("location: cambios.php");
    $dat= $query ->fetch_object();
    
?> 