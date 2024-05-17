// Métodos de Liss

addEventListener('DOMContentLoaded', ()=> {

  // se crea el arreglo con las imagenes del carrousel
  const imagenes=['Imagenes/1.png', 'Imagenes/2.png', 'Imagenes/3.png', 'Imagenes/4.png', 'Imagenes/5.png', 'Imagenes/6.png','Imagenes/7.png', 'Imagenes/8.png', 'Imagenes/9.png', 'Imagenes/10.png', 'Imagenes/11.png']

  //se crea una variable que nos ayude a identificar cual de las imagenes del arreglo esta activa
  let i=1

  //se crean las variables que seleccionen o tomen el valor de los elementos del html con los que trabajaremos
  const img1= document.querySelector('#img1')
  const img2= document.querySelector('#img2')
  const progressbar = document.querySelector('#progress-bar')
  const divindicadores = document.querySelector('#indicadores')

  
  let porcentaje_base = 100/imagenes.length
  let porcentaje_actual= porcentaje_base

  for (let index = 0; index < imagenes.length; index++) {
      const div = document.createElement('div')
      div.classList.add('circles')
      div.id=index
      divindicadores.appendChild(div)
      
  }

  progressbar.style.width= `${porcentaje_base}%`
  img1.src= imagenes[0]
  const circulos =document.querySelectorAll('.circles')
  circulos[0].classList.add('resaltado')

  const slideshow = () =>{
      img2.src= imagenes[i]
      const circulo_actual = Array.from(circulos).find(el => el.id == i)
      Array.from(circulos).forEach(cir => cir.classList.remove('resaltado'))
      circulo_actual.classList.add('resaltado')

      img2.classList.add('active')
      i++
      porcentaje_actual+=porcentaje_base
      progressbar.style.width=`${porcentaje_actual}%`
      if(i==imagenes.length){
          i=0
          porcentaje_actual=porcentaje_base-porcentaje_base
          
      }

      setTimeout(()=>{
          img1.src=img2.src
          img2.classList.remove('active')

      }, 1000)
  }

  setInterval(slideshow, 4000)
});

// Métodos de José

const btnAbrirRegistro = document.querySelector("#abrir-registro");
const btnCerrarRegistro = document.querySelector("#cerrar-registro");
const modalRegistro = document.querySelector("#modal-registro");

btnAbrirRegistro.addEventListener('click', () => {
    modalRegistro.showModal();
    modalRegistro.classList.add('active')
 });

btnCerrarRegistro.addEventListener("click", () => {
    modalRegistro.close();
    modalRegistro.classList.remove('active')
});

const btnAbrirSesion = document.querySelector("#abrir-sesion");
const btnCerrarSesion = document.querySelector("#cerrar-sesion");
const modalSesion = document.querySelector("#modal-sesion");

btnAbrirSesion.addEventListener('click', () => {
    modalSesion.showModal();
    modalSesion.classList.add('active')
 });

btnCerrarSesion.addEventListener("click", () => {
     modalSesion.close();
     modalSesion.classList.remove('active')
});


const formulario = document.getElementById('form-registro');
const inputs = document.querySelectorAll('#form-registro input');


const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	contra: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}

const campos = {
	usuario: false,
	nombre: false,
	contra: false,
	correo: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
		case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "contra":
			validarCampo(expresiones.contra, e.target, 'contra');
			validarContra2();
		break;
		case "contra2":
			validarContra2();
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo-${campo}`).classList.remove('form-grupo-incorrecto');
		document.getElementById(`grupo-${campo}`).classList.add('form-grupo-correcto');
		document.querySelector(`#grupo-${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo-${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo-${campo} .form-input-error`).classList.remove('form-input-error-active');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo-${campo}`).classList.add('form-grupo-incorrecto');
		document.getElementById(`grupo-${campo}`).classList.remove('form-grupo-correcto');
		document.querySelector(`#grupo-${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo-${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo-${campo} .form-input-error`).classList.add('form-input-error-active');
		campos[campo] = false;
	}
}

const validarContra2 = () => {
	const inputContra1 = document.getElementById('contra');
	const inputContra2 = document.getElementById('contra2');

	if(inputContra1.value !== inputContra2.value){
		document.getElementById(`grupo-contra2`).classList.add('form-grupo-incorrecto');
		document.getElementById(`grupo-contra2`).classList.remove('form-grupo-correcto');
		document.querySelector(`#grupo-contra2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo-contra2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo-contra2 .form-input-error`).classList.add('form-input-error-active');
		campos['contra'] = false;
	} else {
		document.getElementById(`grupo-contra2`).classList.remove('form-grupo-incorrecto');
		document.getElementById(`grupo-contra2`).classList.add('form-grupo-correcto');
		document.querySelector(`#grupo-contra2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo-contra2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo-contra2 .form-input-error`).classList.remove('form-input-error-active');
		campos['contra'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
	const terminos = document.getElementById('terminos');
	if(campos.usuario && campos.nombre && campos.contra && campos.correo &&  terminos.checked ){
        $(document).ready(function(){
            var usuario = document.getElementById('usuario');
            var nombre = document.getElementById('nombre');
            var pass = document.getElementById('contra');
            var email = document.getElementById('correo');
            var tipo = document.getElementsByName('tipo');
            var radio;
                usuario = usuario.value;
                nombre = nombre.value;
                pass = pass.value;
                email = email.value;
                if (tipo[0].checked){
                    radio = tipo[0].value;
                }
                else {
                    radio = tipo[1].value;
                }
                 

                console.log("Usuario: " + usuario + " Nombre: " + nombre + " pass: " + pass + " Email: " + email + " tipo: " + radio );



            $("#contenedor").load("indexslq.php",{usuario,nombre,pass,email,radio});
        });
		formulario.reset();
		document.getElementById('form-mensaje-exito').classList.add('form-mensaje-exito-active');
		setTimeout(() => {
			document.getElementById('form-mensaje-exito').classList.remove('form-mensaje-exito-active');
		}, 50);
        document.getElementById('form-mensaje').classList.remove('form-mensaje-active');
		document.querySelectorAll('.form-grupo-correcto').forEach((icono) => {
			icono.classList.remove('form-grupo-correcto');
		});
        modalRegistro.close();
	} else {
		document.getElementById('form-mensaje').classList.add('form-mensaje-active');
	}
});


const formularioSe = document.getElementById('form-sesion');
const inputse = document.querySelectorAll('#form-sesion input');


const expresionesse = {
	usuariose: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	contrase: /^.{4,12}$/ // 4 a 12 digitos.
}

const camposse = {
	usuariose: false,
	contrase: false
}

const validarformularioSe = (e) => {
    switch (e.target.name) {
		case "usuariose":
			validarCampoSe(expresionesse.usuariose, e.target, 'usuariose');
		break;
		case "contrase":
			validarCampoSe(expresionesse.contrase, e.target, 'contrase');
		break;
	}
}

const validarCampoSe = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupose-${campo}`).classList.remove('form-grupose-incorrecto');
		document.getElementById(`grupose-${campo}`).classList.add('form-grupose-correcto');
		document.querySelector(`#grupose-${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupose-${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupose-${campo} .form-inputse-error`).classList.remove('form-inputse-error-active');
		camposse[campo] = true;
	} else {
		document.getElementById(`grupose-${campo}`).classList.add('form-grupose-incorrecto');
		document.getElementById(`grupose-${campo}`).classList.remove('form-grupose-correcto');
		document.querySelector(`#grupose-${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupose-${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupose-${campo} .form-inputse-error`).classList.add('form-inputse-error-active');
		camposse[campo] = false;
	}
}

inputse.forEach((input) => {
	input.addEventListener('keyup', validarformularioSe);
	input.addEventListener('blur', validarformularioSe);
});



formularioSe.addEventListener('submit', (e) => {
	e.preventDefault();

	if(camposse.usuariose && camposse.contrase ){
        $(document).ready(function(){
            var usuario = document.getElementById('usuariose');
            var pass = document.getElementById('contrase');
            var tipo = document.getElementsByName('tipos');
            var radio;
                usuario = usuario.value;
                pass = pass.value;
                if (tipo[0].checked){
                    radio = tipo[0].value;
                }
                else {
                    radio = tipo[1].value;
                }
                 

                console.log("Usuario: " + usuario +  " pass: " + pass + " tipo: " + radio );

               
                $("#contenedor").load("indexslqse.php",{usuario,pass,radio});
        
         });
		formularioSe.reset();
        
		document.getElementById('form-mensajese-exito').classList.add('form-mensajese-exito-active');
		setTimeout(() => {
			document.getElementById('form-mensajese-exito').classList.remove('form-mensajese-exito-active');
		}, 50);
        document.getElementById('form-mensajese').classList.remove('form-mensajese-active');
		document.querySelectorAll('.form-grupose-correcto').forEach((icono) => {
			icono.classList.remove('form-grupose-correcto');
		});
        modalSesion.close();
	} else {
		document.getElementById('form-mensajese').classList.add('form-mensajese-active');
	}
});

// CÓDIGO CARRITO

$(document).ready(function() {
    $("#subtotal2").load("subtotal.php");  
});

$(document).ready(function() {
    $("#cantidadproductos").load("productosql.php");  
});


function añadir(juego){
    $(document).ready(function() {
        $("#cantidadproductos").load("carrosql.php",{juego});  
    });
}

function aceptar(){
    document.getElementById("se2").style.display="contents";
    document.getElementById("se1").style.display="none";
    var lectura=document.getElementById("linea2"); 
    lectura.style.width="50%";
}

function registrar(){
    var datosdenombre = document.getElementById("nombre1").value+" "+document.getElementById("apellidos1").value; 
    document.getElementById("rnombre").innerHTML=(datosdenombre);
    document.getElementById("rtelefono").innerHTML=(document.getElementById("celular").value);
    document.getElementById("rcorreo").innerHTML=(document.getElementById("correo1").value);
    document.getElementById("rcp").innerHTML=(document.getElementById("cp").value);
    document.getElementById("restado").innerHTML=(document.getElementById("estado").value);
    document.getElementById("rciudad").innerHTML=(document.getElementById("municipio").value);
    document.getElementById("rcalle").innerHTML=(document.getElementById("calle").value);
    
    var lectura=document.getElementById("linea2"); 
    lectura.style.width="75%";
    
    document.getElementById("se3").style.display="contents";
    document.getElementById("se2").style.display="none";
}

function regresar(){
    document.getElementById("se2").style.display="none";
    document.getElementById("se1").style.display="contents";
    var lectura=document.getElementById("linea2"); 
    lectura.style.width="25%";
}

function comprobar(){
    document.getElementById("se4").style.display="contents";
    document.getElementById("se3").style.display="none";
    var lectura=document.getElementById("linea2"); 
    lectura.style.width="100%";
}

function regresardos(){
    document.getElementById("se3").style.display="none";
    document.getElementById("se2").style.display="contents";
    var lectura=document.getElementById("linea2"); 
    lectura.style.width="50%";
}

function vaciar(){

    $(document).ready(function() {
        $("#cantidadproductos").load("vaciarcarro.php");  
    });
    $(document).ready(function() {
        $("#subtotal2").load("subtotal.php");  
    });
    document.getElementById("t").innerHTML=('<div id="subtitulos"><div class="apartados" id="productos">PRODUCTO</div><div class="apartados" id="otr">CANTIDAD</div><div class="apartados" id="otr">PRECIO</div></div>');  
    document.getElementById("subtotal2").innerHTML=("$");
    document.getElementById("envio2").innerHTML=("$");
    document.getElementById("renvio").innerHTML=("$");
    total += envio;
    document.getElementById("pago2").innerHTML=("$");
    document.getElementById("rpago").innerHTML=("$");
}

var total=0;
var envio=0;

var xht = new XMLHttpRequest();
xht.open('GET','psql.php');
xht.onload = function(){
    if(xht.status == 200){
        var json = JSON.parse(xht.responseText);
        if(json[0].num==0){}else{
            envio=Math.floor(Math.random() * 340 + 150)
            total= json[0].sub;
            total = parseInt(total);
        }
        document.getElementById("envio2").innerHTML=("$"+envio);
        document.getElementById("renvio").innerHTML=("$"+envio);
        total += envio;
        document.getElementById("pago2").innerHTML=("$"+total);
        document.getElementById("rpago").innerHTML=("$"+total);

        var nopedido;
        nopedido=Math.floor(Math.random() * 335440 + 1250)
        document.getElementById("rnp").innerHTML=(nopedido);
        var dias;
        dias=Math.floor(Math.random() * 15 + 3)
        document.getElementById("rtiempo").innerHTML=(dias);
        document.getElementById("rnproductos").innerHTML=(json[0].num);
                

    }else{
        alert("error"+xht.status);
    }
}
xht.send();
   






