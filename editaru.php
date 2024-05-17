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
        <form action="editarsqlu.php" method="POST">
        <table>
        <?php
            $id=$_GET['id'];
            $mysqli = new mysqli('localhost','root', 'root', 'vigzone');
            $mysqli->set_charset("utf8");
            $query = $mysqli->query("SELECT * FROM usuarios WHERE id_usuario='".$id."'");
            $dat= $query ->fetch_object();
            echo 
            "
            <br>
            <table class='content-table'>
            <thead>
                <tr>
                    <th colspan='2'><center><h2>Editar usuario</h2></center></th>
                </tr>
            </thead>
            <tr><td>ID Usuario</td><td><input name='idusuario' type='text' value='".$dat->id_usuario."' readonly></td></tr>
            <tr><td>Usuario</td><td><input name='usuario' type='text' value='".$dat->usuario."'></td></tr>
            <tr><td>Nombre</td><td><input name='nombre' type='text' value='".$dat->nombre."'></td></tr>   
            <tr><td>Contraseña</td><td><input name='contrasena' type='text' value='".$dat->contrasena."'></td></tr>
            <tr><td>E-mail</td><td><input name='email' type='text' value='".$dat->email."'></td></tr> 
            <tr><td>Tipo</td><td><input name='tipo' type='text' value='".$dat->tipo."'></td></tr>
            </table> 
            <br>
            <div>
                <button class='btn' type='submit' >Modificar</button>
                <button class='btn' type='reset' >Borrar</button>
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