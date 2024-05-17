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
    <br>
    <div class="container">
        <section class="s1">
            <center>
                <form action="altasqlj.php" method="POST">
                    <table class="content-table">
                    <thead>
                        <tr>
                            <th colspan='2'><center><h2>Alta juegos</h2></center></th>
                        </tr>
                    </thead>
                        <tr>
                            <td>ID juego</td>
                            <td><input type="text" name="idjuego"></td>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td><input type="text" name="nombre"></td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td><input type="text" name="tipo"></td>
                        </tr>
                        <tr>
                            <td>Precio</td>
                            <td><input type="text" name="precio"></td>
                        </tr>
                        <tr>
                            <td>Marca</td>
                            <td><input type="text" name="marca"></td>
                        </tr>
                        <tr>
                            <td>Imagen</td>
                            <td><input type="text" name="imagen"></td>
                        </tr>
                    </table>
                    <br>
                    <div>
                        <button class="btn" type="submit">Confirmar</button>
                        <button class="btn" type="reset">Borrar</button>
                    </div>
                </form>
            </center>
        </section>
        <br>
        <section class="s1">
            <center>
                <form action="altasqlu.php" method="POST">
                    <table class="content-table">
                    <thead>
                        <tr>
                            <th colspan='2'><center><h2>Alta usuarios</h2></center></th>
                        </tr>
                    </thead>
                        <tr>
                            <td>ID Usuario</td>
                            <td><input type="text" name="idusuario"></td>
                        </tr>
                        <tr>
                            <td>Usuario</td>
                            <td><input type="text" name="usuario"></td>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td><input type="text" name="nombre"></td>
                        </tr>
                        <tr>
                            <td>Contraseña</td>
                            <td><input type="text" name="contrasena"></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td><input type="text" name="tipo"></td>
                        </tr>
                    </table>
                    <br>
                    <div>
                        <button class="btn" type="submit">Confirmar</button>
                        <button class="btn" type="reset">Borrar</button>
                    </div>
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