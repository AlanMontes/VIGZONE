<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="shortcut icon" type="image/png" href="logos/vigzone.png" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>VIGZONE</title>

</head>
<body>
    <!--Menu de navegador-->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <img src="Logos/vigzone_extend.png" id="logo">
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <a id="linkNav" class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              <a id="linkNav" class="nav-link active" href="nintendo.php">Nintendo</a>
              <a id="linkNav" class="nav-link active" href="xbox.php">Xbox</a>
              <a id="linkNav" class="nav-link active" href="playstation.php">PlayStation</a>        
            
          </div>
          
        </div>

        <div id="divcarro">
          <a href="carro.php"><img src="imagenes/carro.png" id="imgcarro"/></a>
        </div>
        <div id="cantidadproductos">
                
        </div>
    
    <div id="sesionc">
      <div class="navbar-nav-R" >
          <button class="btn-datos active" id="abrir-registro" > Registrar</button>
          <button class="btn-datos active" id="abrir-sesion"> Iniciar Sesión</button>
      </div>
    </div>

      </div>
    </nav>
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

    <!-- Menú de operación -->
    
    <section>
      <div id="cabezera">
      <center>
        <div id="espacio"></div>
        <div class="categorias">
          <img src="imagenes/c.png" id="simbolos"/>
          Carrito</div>
        
        <div class="categorias">
          <img src="imagenes/t.png"id="simbolos"/>
          Detalles De Entrega</div>
        
        <div class="categorias">
          <img src="imagenes/ci.png"id="simbolos"/>
          Detalles De Pago</div>
        
        <div class="categorias">
          <img src="imagenes/x.png"id="simbolos"/>
          Pedido Completado</div>
          <div id="espacio"></div>
          <div id="contenedorlinea">
            <div id="linea">.</div>
            <div id="linea2">.</div>
          </div>
        
      </center>
      </div>
    </section>

    <!-- CARRO -->


    <section class="s1" id="se1">
      <center>
        <div id="contenedorproductos">
        <table id="tabla">
          <tr>
            <td id="t">   
                <div id="subtitulos"> 
                    <div class="apartados" id="productos">PRODUCTO</div>
                    <div class="apartados" id="otr">CANTIDAD</div>
                    <div class="apartados" id="otr">PRECIO</div>
                    
                </div>
                

        <?php        
            $mysqli = new mysqli('localhost','root', '', 'vigzone');
            $mysqli->set_charset("utf8");
            $query = $mysqli->query("select * from carro;");
            while($dat = $query ->fetch_object()){
              echo "  <div id='sub'>                
                      <div class='detalles' id='v1'>".$dat->nombre."</div>
                      <div class='detalles' id='v2'>".$dat->cantidad."</div>
                      <div class='detalles' id='v3'>$".$dat->precio."</div>
                      </div>";
            }
            
        ?>      

                
                  <!-- <div class="detalles" id="v1">Ninguno</div>
                  <div class="detalles" id="v2">0</div>
                  <div class="detalles" id="v3">$0</div> -->

            </td>
            
            
            <td id="t2">
                <div id="cuadrototales">
                    <div id="total">
                      TOTAL DEL CARRITO
                    </div>
                        <!-- CALCULOS  -->
                    <div id="contenedorcalculos">
                            <div id="labeles">
                                  <div class= "calculos" id="subtotal"> Subtotal:</div>
                                  <div class= "calculos" id="envio">Coste De Envio:</div>
                                  <div class= "calculos" id="pago">Total:</div>
                            </div>

                            <div id="vlabeles">
                                <div class= "calculos" id="subtotal2">$0</div>
                                <div class= "calculos" id="envio2">$0</div>
                                <div class= "calculos" id="pago2">$0</div>
                            </div>
                          </div>
                   
                    <div class= "calculos" id="cupon">Cupon:
                        <input type="text" id="vcupon" placeholder="Canjea tu descuento">  
                    </div>
                    <center>
                    <div id="compra">
                        <button  id="aceptar" onclick="aceptar()">COMPRAR</button>
                    </div>
                   </center>
                   <center>
                    <div id="compra">
                        <button  id="aceptar" onclick="vaciar()">VACIAR CARRITO</button>
                    </div>
                   </center>
                </div>
            </td>
          </tr>    
        </table>       
                


        </div>
      </center>
    </section>

    <!-- DETALLES ENTREGA -->


    <section class="s1" id="se2">
      <center>
        <div id="contenedorproductos">
        <table id="tabla">
          <tr>
            <center>
            <div class="total2">DETALLES DE ENTREGA</div>
            </center>
          </tr>
          <tr>
            <td><div class="total2" id="t3">FICHA DE CONTACTO</div></td>
            <td><div class="total2">DIRECCIÓN DE ENTREGA</div></td>                      
          </tr>
          <tr>
            <td id="t5">   
              <div id="contenedorcalculos">
                <div id="labeles2">
                      <div class= "calculos" id="datos">Nombres</div>
                      <div class= "calculos" id="datos">Apellidos </div>
                      <div class= "calculos" id="datos">Celular </div>
                      <div class= "calculos" id="datos">Correo </div>
                  
                </div>

                <div id="vlabeles2">
                    <input class="espe" type="text" id="nombre1"> 
                    <input class="espe" type="text" id="apellidos1"> 
                    <input class="espe" type="tel" id="celular"> 
                    <input class="espe" type="email" id="correo1">                                    
                </div>
              </div>

            </td>
            
            <td id="t4">

              <div id="contenedorcalculos">
                <div id="labeles2">
                  <div class= "calculos" id="datos">CP</div>
                  <div class= "calculos" id="datos">Estado</div>
                  <div class= "calculos" id="datos">Municipio</div>
                  <div class= "calculos" id="datos">Colonia</div>
                  <div class= "calculos" id="datos">Calle y Número </div>
                  <div class= "calculos" id="datos">Detalles </div>                  
                </div>

                <div id="vlabeles2">
                    <input class="espe" type="number" id="cp">
                    <input class="espe" type="text" id="estado"> 
                    <input class="espe" type="text" id="municipio"> 
                    <input class="espe" type="text" id="colonia"> 
                    <input class="espe" type="text" id="calle"> 
                    <input class="espe" type="text" id="det">                                    
                </div>
              </div>

            </td>
          </tr>
 
        </table> 

        <center>
          <div id="dosbotones">
            <div id="reg">
              <button class="bot" id="regresar1" onclick="regresar()">REGRESAR</button>
            </div> 
            <div id="reg">
                <button class="bot" id="registrar" onclick="registrar()">REGISTRAR</button>
            </div>             
          </div>
        </center> 


        </div>
      </center>
    </section>

        <!-- DETALLES DE PAGO -->


        <section class="s1" id="se3">
          <center>
            <div id="contenedorproductos">
            <table id="tabla">
              <tr>
                <center>
                <div class="total2">DETALLES DE PAGO</div>
                </center>
              </tr>
              <tr>
                <td><div class="total2" id="t3">DATOS DE TARJETA</div></td>                      
              </tr>
              <tr>
                <td id="t5">   
                  <div id="contenedorcalculos">
                    <div id="labeles2">
                          <div class= "calculos" id="datos">No. De La Tarjeta</div>
                          <div class= "calculos" id="datos">Nombre y Apellidos </div>
                          <div class= "calculos" id="datos">Fecha De Expiración </div>
                          <div class= "calculos" id="datos">CVV </div>
                      
                    </div>
    
                    <div id="vlabeles2">
                        <input class="tar" type="number" id="notarjeta"> 
                        <input class="tar" type="text" id="info"> 
                        <input class="tar" type="text" id="fecha"> 
                        <input class="tar" type="number" id="cvv">                                    
                    </div>
                  </div>
    
                </td>
                
                <td id="t4">
                  
                  <center><img src="imagenes/tarjeta3.png" id="imgtarjeta"/></center>                    
                  
                </td>
              </tr>
     
            </table> 
    
            <center>
              <div id="dosbotones">
                <div id="reg">
                  <button class="bot" id="regresar2" onclick="regresardos()">REGRESAR</button>
                </div> 
                <div id="reg">
                    <button class="bot" id="comprobar" onclick="comprobar()">COMPROBAR</button>
                </div>             
              </div>
            </center> 
    
    
            </div>
          </center>
        </section>
        
        <!-- PEDIDO COMPLETADO -->


        <section class="s1" id="se4">
          <center>
            <div id="contenedorrecibo">
            <table id="tabla">
              <tr>
                <center>
                <div class="total2">RECIBO DE PEDIDO</div>
                </center>
              </tr>
              <tr>
                <td>
                    <div class="datosrecibo" id="lab">Número del pedido: </div>  
                    <div class="datosrecibo" id="rnp"></div>
                    <div>
                      <div class="datosrecibo" id="lab">Tiempo aproximado de entrega:</div>
                      <div class="datosrecibo" id="rtiempo"></div>
                      <div class="datosrecibo"> dias aproximadamente</div>
                    </div>
                    
                </td>                      
              </tr>
              <tr>
                <td><div class="total2" id="t3">DETALLES DEL PRODUCTO</div></td>                      
              </tr>
              <tr>
                <td><div class="datosrecibo" id="lab">Número de productos:</div>
                  <div class="datosrecibo" id="rnproductos"></div>
                </td>                      
              </tr>
              <tr>
                <td><div class="total2" id="t3">DETALLES DE CONTACTO</div></td>                      
              </tr>
              <tr>
                <td> <div>
                      <div class="datosrecibo" id="lab">Comprador:</div>
                      <div class="datosrecibo" id="rnombre"></div>
                    </div><div>
                      <div class="datosrecibo" id="lab">Telefono:</div>
                      <div class="datosrecibo" id="rtelefono"></div>
                    </div><div>
                      <div class="datosrecibo" id="lab">Correo:</div>
                      <div class="datosrecibo" id="rcorreo"></div>
                    </div>
                </td>                      
              </tr>
              <tr>
                <td><div class="total2" id="t3">DETALLES DE ENVIO</div></td>                      
              </tr>
              <tr>
                <td>
                  <div>
                    <div class="datosrecibo" id="lab">Estado:</div>
                    <div class="datosrecibo" id="restado"></div>
                  </div><div>
                    <div class="datosrecibo" id="lab">Ciudad:</div>
                    <div class="datosrecibo" id="rciudad"></div>
                  </div><div>
                    <div class="datosrecibo" id="lab">Calle:</div>
                    <div class="datosrecibo" id="rcalle"></div>
                  </div>
                  <div>
                    <div class="datosrecibo" id="lab">Cp:</div>
                    <div class="datosrecibo" id="rcp"></div>
                  </div>
                </td>                      
              </tr>
              <tr>
                <td><div class="total2" id="t3">DETALLES DE PAGO</div></td>                      
              </tr>
              <tr>
                <td>
                  <div>
                    <div class="datosrecibo" id="lab">Total pagado:</div>
                    <div class="datosrecibo" id="rpago"></div>
                  </div><div>
                    <div class="datosrecibo" id="lab">Costo de envio:</div>
                    <div class="datosrecibo" id="renvio"></div>
                  </div>
                </td>                      
              </tr>
              <tr>
                <td>
                  <div>
                    <a href="index.php"> 
                    <center>
                      <div id="compra">
                          <button  id="aceptar" onclick="vaciar()">VOLVER A COMPRAR</button>
                      </div>
                     </center>
                    </a>
                  </div>
                </td>                      
              </tr>
            </table>        
            </div>
          </center>
        </section>        



    
    <!--Pie de pagina-->
    <footer class=" text-center text-lg-start">
      <div class="text-center p-3">
        © 2022 Vigzone, INC
      </div>
    </footer>
    
    <script src="index.js"></script>
    <script src="carro.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    
 
</body>
</html>