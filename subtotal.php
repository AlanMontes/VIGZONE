<?php
    $mysqli = new mysqli('localhost','root', '', 'vigzone');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("select sum(precio) as suma from carro;");
    $dat = $query ->fetch_object();
    echo "$$dat->suma";
?>