<?php
    $mysqli = new mysqli('localhost','root', '', 'vigzone');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("select sum(precio) as suma, count(id_juego) as numeroelementos from carro;");
    $dat = $query ->fetch_object();
    $suma = $dat->suma;
    $elem = $dat->numeroelementos;
    $datos = array(array('sub' => $suma, 'num' => $elem));
    echo json_encode($datos);
?>