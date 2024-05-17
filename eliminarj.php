<?php
    $id=$_GET['id'];
    $mysqli = new mysqli('localhost','root', 'root', 'vigzone');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("DELETE FROM juegos WHERE id_juego='".$id."'");
    header("location: bajas.php")

                
?>