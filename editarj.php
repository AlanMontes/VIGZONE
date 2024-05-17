<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>Administrador</title>
    <!--Bootstrap-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="shortcut icon" type="image/png" href="logos/vigzone.png" />
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <img src="Logos/vigzone_extend.png" id="logo">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a id="linkNav" class="nav-link active" href="base.php">Base de datos</a>
                    <a id="linkNav" class="nav-link active" href="altas.php">Altas</a>
                    <a id="linkNav" class="nav-link active" href="bajas.php">Bajas</a> 
                    <a id="linkNav" class="nav-link active" href="cambios.php">Cambios</a> 
                </div>
                <div id="divcarro">
                    <a href="index.php"><img src="imagenes/logout.png" id="imgcarro"/></a>
                </div>
            </div>

        </div>
    </nav>
    <div class="container">
        <section class="s1">
        <center>
        <form action="editarsqlj.php" method="POST">
        <table>
        <?php
            $id=$_GET['id'];
            $mysqli = new mysqli('localhost','root', 'root', 'vigzone');
            $mysqli->set_charset("utf8");
            $query = $mysqli->query("SELECT * FROM juegos WHERE id_juego='".$id."'");
            $dat= $query ->fetch_object();
            echo 
            "
            <br>
            <table class='content-table'>
            <thead>
                <tr>
                    <th colspan='2'><center><h2>Editar juego</h2></center></th>
                </tr>
            </thead>
            <tr><td>ID juego</td><td><input name='idjuego' type='text' value='".$dat->id_juego."' readonly></td></tr>
            <tr><td>Nombre</td><td><input name='nombre' type='text' value='".$dat->nombre."'></td></tr>
            <tr><td>Tipo</td><td><input name='tipo' type='text' value='".$dat->tipo."'></td></tr>   
            <tr><td>Precio</td><td><input name='precio' type='text' value='".$dat->precio."'></td></tr>
            <tr><td>Marca</td><td><input name='marca' type='text' value='".$dat->marca."'></td></tr> 
            <tr><td>Imagen</td><td><input name='imagen' type='text' value='".$dat->imagen."'></td></tr>
            </table> 
            <br>
            <div>
                <button class='btn' type='submit'>Modificar</button>
                <button class='btn' type='reset'>Borrar</button>
            </div>
            " 
        ?> 
        
                        
        </table>
        </form>
        </center>
        </section>        
        <br>
    </div>
</body>
<!--Pie de pagina-->
<footer class=" text-center text-lg-start">
        <div class="text-center p-3">
          © 2022 Vigzone, INC
        </div>
</footer>

</html>