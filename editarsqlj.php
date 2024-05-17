<?php
    $id=$_GET['id'];
    $mysqli = new mysqli('localhost','root', 'root', 'vigzone');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("UPDATE juegos SET nombre='".$_POST['nombre']."', tipo='".$_POST['tipo']."', precio='".$_POST['precio']."', marca='".$_POST['marca']."', imagen='".$_POST['imagen']."' WHERE id_juego='".$_POST['idjuego']."'");
    header("location: cambios.php");
    $dat= $query ->fetch_object();
    
?> 