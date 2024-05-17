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
    <br><br>
    <div class="container">
        <center>
        <section class="s1">
            <h1>JUEGOS</h1>
            <br>
            <table class="content-table">
                <thead>
                <tr>
                    <th>ID juego</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Imagen</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $mysqli = new mysqli('localhost','root', 'root', 'vigzone');
                $mysqli->set_charset("utf8");
                $query = $mysqli->query("SELECT * FROM juegos");
                while($dat = $query ->fetch_object()){
                    echo "<tr>
                            <td>".$dat->id_juego."</td>
                            <td>".$dat->nombre."</td>
                            <td>".$dat->tipo."</td>
                            <td>".$dat->precio."</td>
                            <td>".$dat->marca."</td>
                            <td>".$dat->imagen."</td>
                        </tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
        <section class="s1">
            <h1>USUARIOS</h1>
            <br>
            <table class="content-table">
                <thead>
                <tr>
                    <th>ID Usuario</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Contraseña</th>
                    <th>E-mail</th>
                    <th>Tipo</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $mysqli = new mysqli('localhost','root', 'root', 'vigzone');
                $mysqli->set_charset("utf8");
                $query = $mysqli->query("SELECT * FROM usuarios");
                while($dat = $query ->fetch_object()){
                    echo "<tr>
                            <td>".$dat->id_usuario."</td>
                            <td>".$dat->usuario."</td>
                            <td>".$dat->nombre."</td>
                            <td>".$dat->contrasena."</td>
                            <td>".$dat->email."</td>
                            <td>".$dat->tipo."</td>
                        </tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
        </center>

    </div>
    <br>
</body>
<!--Pie de pagina-->
<footer class=" text-center text-lg-start">
        <div class="text-center p-3">
          © 2022 Vigzone, INC
        </div>
</footer>

</html>