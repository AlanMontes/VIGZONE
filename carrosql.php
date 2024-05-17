<?php
    $juego = $_REQUEST['juego'];
    $mysqli = new mysqli('localhost','root', '', 'vigzone');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("SELECT nombre,precio FROM juegos where nombre='".$juego."';");
    $dat = $query ->fetch_object();
    $query = $mysqli->query("INSERT INTO carro (id_juego, nombre, cantidad, precio) VALUES (null,'".$dat->nombre."', '1', '".$dat->precio."');");
    $query = $mysqli->query("select count(id_juego) as numeroelementos from carro;");
    $dat = $query ->fetch_object();
    echo $dat->numeroelementos;
?>

<!-- echo  "<div id='sub'><div class='detalles' id='v1'>'".$dat->nombre."'</div><div class='detalles' id='v2'>1</div><div class='detalles' id='v3'>'".$dat->precio."'</div></div>"; -->
