<?php
                    
    $mysqli = mysqli_connect('localhost','root', 'root', 'vigzone');
    // $mysqli->set_charset("utf8");
    $query = "INSERT INTO usuarios (id_usuario, usuario, nombre, contrasena, email, tipo) VALUES (NULL, '".$_REQUEST['usuario']."', '".$_REQUEST['nombre']."', '".$_REQUEST['pass']."', '".$_REQUEST['email']."', '".$_REQUEST['radio']."');";
    if (mysqli_query($mysqli, $query)) {
      echo $_REQUEST['usuario'];
    } else {
      echo "Error: " . mysqli_error($mysqli);
   }
?>