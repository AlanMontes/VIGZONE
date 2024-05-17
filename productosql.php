<?php
    $mysqli = new mysqli('localhost','root', '', 'vigzone');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("select count(id_juego) as numeroelementos from carro;");
    $dat = $query ->fetch_object();
    echo $dat->numeroelementos;
?>