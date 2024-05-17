<?php  
    $mysqli = mysqli_connect('localhost','root', 'root', 'vigzone');
    $radio = $_REQUEST['radio'];
    $query = "SELECT * FROM usuarios where usuario = '".$_REQUEST['usuario']."' and contrasena = '".$_REQUEST['pass']."' and tipo = '".$_REQUEST['radio']."'";
    $result = mysqli_query($mysqli, $query);  
    $count = mysqli_num_rows($result);  
    if ($count==1 && $radio == 'admin') {
        echo "<a id='linkNav' class='nav-link active' href='base.php'>Base de datos</a>";
    }
    else if ($count==1 && $radio == 'cliente') {
        echo "<a id='contenedor' class='nav-link active'>". $_REQUEST['usuario']."</a>";
    }
    else {
        echo "<a id='contenedor' class='nav-link active'>Usuario y/o contraseña incorrecta</a>";
    }
                
?>