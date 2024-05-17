<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <title>VIGZONE</title>
  <!--Bootstrap-->
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="index.css" type="text/css">
  <link rel="shortcut icon" type="image/png" href="logos/vigzone.png" />

</head>

<body>
  <!--Menu de navegador-->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="logos/vigzone_extend.png" id="logo">

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a id="linkNav" class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            <a id="linkNav" class="nav-link active" href="nintendo.php">Nintendo</a>
            <a id="linkNav" class="nav-link active" href="xbox.php">Xbox</a>
            <a id="linkNav" class="nav-link active" href="playstation.php">PlayStation</a>
            <a id="contenedor"></a>         

        </div>
      </div>

      <div id="divcarro">
        <a href="carro.php"><img src="imagenes/carro.png" id="imgcarro"/></a>
      </div>
      <div id="cantidadproductos">
              0
      </div>

      <div id="sesionc">
      <div class="navbar-nav-R">
        <button class="btn-datos active" id="abrir-registro" > Registrar</button>
        <button class="btn-datos active" id="abrir-sesion"> Iniciar Sesión</button>
      </div>
      </div>

    </div>
  </nav>

  <!--Carrusel-->
  <div id="slideshow-principal">
    <div id="progress-bar-container">
      <div id="progress-bar"></div>
    </div>
    <div id="slideshow">
      <img src="" id="img1" class="carro">
      <img src="" id="img2" class="carro">
    </div>
    <div id="indicadores">

    </div>
  </div>

      <!-- Formulario de registro -->
      <dialog id="modal-registro">
    <div align="right">
          <button class="btn-datos-cerrar-X" id="cerrar-registro"> X </button> 
        </div> 
      <center> 
        <table>
            <div class="formulario-grupo"</div>
              <tr>
                <td align="center" colspan="2"><h1 class="titulos-datos">Registrarse</h1></td>
              </tr>
                  <td align="center" colspan="2"><p class="descripcion-datos">Si aún no tienes cuenta en VIGZONE, aquí podrás registrarte.</p></td>
              <tr>
            </div>
        </table>  
      </center>       
      <form  method="POST" class ="form-registro" id="form-registro">
          <div class="form-grupo" id="grupo-usuario">
            <label for="usuario" class="form-label">Usuario: </label></td>
            <div class="form-grupo-input">
                <input type="text" class="form-input" name="usuario" id="usuario" placeholder="Ingrese su usuario">
                <i class="form-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form-input-error">Solo contiene numeros, letras y guion bajo</p>
          </div>
          
          <div class="form-grupo" id="grupo-nombre">
            <label for="nombre" class="form-label">Nombre: </label></td>
            <div class="form-grupo-input">
                <input type="text" class="form-input" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                <i class="form-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form-input-error">El nombre solo puede tener letras y espacios </p>
          </div>

          <div class="form-grupo" id="grupo-contra">
            <label for="contra" class="form-label">Contraseña: </label></td>
            <div class="form-grupo-input">
                <input type="password" class="form-input" name="contra" id="contra" placeholder="Ingrese una contraseña">
                <i class="form-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form-input-error">La contraseña tiene que ser de 4 a 12 digitos.</p>
          </div>

          <div class="form-grupo" id="grupo-contra2">
            <label for="contra2" class="form-label">Repetir Contraseña: </label></td>
            <div class="form-grupo-input">
                <input type="password" class="form-input" name="contra2" id="contra2" placeholder="Repita la contraseña">
                <i class="form-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form-input-error">Ambas contraseñas deben ser iguales.</p>
          </div>

          <div class="form-grupo form-grupo-correo" id="grupo-correo">
            <label for="correo" class="form-label">Correo Electrónico </label></td>
            <div class="form-grupo-input">
                <input type="email" class="form-input" name="correo" id="correo" placeholder="Ingrese un correo electrónico">
                <i class="form-validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="form-input-error">El correo electrónico solo puede contener letras, numeros, puntos, guiones y guión bajo.</p>
          </div>

          
          <div class="form-grupo form-grupo-terminos" id="grupo-terminos">
              <label class="form-label" id="tipol">
                  <input class="form-checkbox" type="radio" name="tipo" id="tipo1" value="cliente">
                  Cliente
                  <br>
                  <input class="form-checkbox" type="radio" name="tipo" id="tipo2" value="admin">
                  Admin
              </label>
            </div>
          
          <div class="form-grupo form-grupo-terminos" id="grupo-terminos">
            <label class="form-label">
                <input class="form-checkbox" type="checkbox" name="terminos" id="terminos">
                Acepto los Terminos y Condiciones
            </label>
          </div>

          <div class="form-mensaje form-grupo-mensaje" id="form-mensaje">
              <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellene el formulario</p>
          </div>
          
          <div class="form.grupo form-grupo-btn-enviar">
              <input type="submit" class="form-btn" id="cerrar-registro" value="Enviar" name="registrar"></input>
              
              <p class="form-mensaje-exito" id="form-mensaje-exito"> Formulario enviado exitosamente</p>
          </div>
          
        </form> 
        
    </dialog>

     <!-- Formulario de sesion-->
    <dialog id="modal-sesion">        
        <div align="right">
          <button class="btn-datos-cerrar-X" id="cerrar-sesion"> X </button> 
        </div> 
        <center> 
          <table>
                <div class="formulario-grupo"</div>
                  <tr>
                    <td align="center"><h1 class="titulos-datos">Acceder</h1></td>
                  </tr>
                      <td align="center"><p class="descripcion-datos">Inicia sesión con tu cuenta VIGZONE.</p></td>
                  <tr>
          </table>  
        </center>       
        <form  method="POST" class ="form-sesion" id="form-sesion">
            
            <div class="form-grupose" id="grupose-usuariose">
              <label for="usuariose" class="form-labelse">Usuario: </label></td>
              <div class="form-grupose-input">
                  <input type="text" class="form-inputse" name="usuariose" id="usuariose" placeholder="Ingrese su usuario">
                  <i class="form-validacionse-estado fas fa-times-circle"></i>
              </div>
              <p class="form-inputse-error">Solo contiene numeros, letras y guion bajo</p>
            </div>
            
            <div class="form-grupose" id="grupose-contrase">
              <label for="contrase" class="form-labelse">Contraseña: </label></td>
              <div class="form-grupose-input">
                  <input type="password" class="form-inputse" name="contrase" id="contrase" placeholder="Ingrese su contraseña">
                  <i class="form-validacionse-estado fas fa-times-circle"></i>
              </div>
              <p class="form-inputse-error">La contraseña tiene que ser de 4 a 12 digitos.</p>
            </div>
            <div>
              
              <div class="form-grupo form-grupo-terminos" id="grupo-terminos">
              <label class="form-label" id="tipol">
                  <input class="form-checkbox" type="radio" name="tipos" id="tipo1s" value="cliente">
                  Cliente
                  <br>
                  <input class="form-checkbox" type="radio" name="tipos" id="tipo2s" value="admin">
                  Admin
              </label>
            </div>
            </div>
            <div class="form-mensajese form-grupose-mensaje" id="form-mensajese">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellene el formulario</p>
            </div>
            <div>
              <br>
            </div>
            
            <div class="form-grupose form-grupose-btn-enviar">
                <button type="submit" class="form-btnse" id="cerrar-sesion">Acceder</button>
                <p class="form-mensajese-exito" id="form-mensajese-exito"> Formulario enviado exitosamente</p>
            </div>

            
          </form>
    </dialog>


  <br>
  <!--Titulo-->
  <header>
    <center>
      <img src="Imagenes/nintendo.png" id="logoN">
    </center>    
  </header>
  <br><br>

  <!--Tarjetas-->
  <div class="container">
    <?php        
      $mysqli = new mysqli('localhost','root', '', 'vigzone');
      $mysqli->set_charset("utf8");
      $query = $mysqli->query("SELECT * FROM juegos where marca = 'Nintendo'");
      $con = 0;
      $mario = "mario";
      echo "<div class='row'>";
      while($dat = $query ->fetch_object()){
        if($con == 4){
          echo "</div>
                <div class='row'>";
          $con = 0;
        }
          echo "<div class='col'>
                  <div class='card' id='tarjeta'>
                    <center>
                      <img src='Imagenes/".$dat->imagen.".jpg' class='card-img-top tarjeta'>
                      <div class='card-body'>
                        <h5 class='card-title'>".$dat->nombre."</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>".$dat->tipo."</h6>
                        <p class='card-text precios' id='precio'><b>$".$dat->precio."</b></p>
                        <button class='btn' onclick=\"añadir('$dat->nombre')\">Añadir al carrito</button>
                      </div>
                    </center>
                  </div>
                  <br>
                </div>";
                $con++;
              }
              echo "</div>
              <br>";
    ?>
   
  </div>


  <!--Pie de pagina-->
  <footer class=" text-center text-lg-start">
    <div class="text-center p-3">
      © 2022 Vigzone, INC
    </div>
    <div id="tabladecarro"></div>
  </footer>

  <script src="index.js"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>