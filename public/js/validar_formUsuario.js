// VARIABLES

var rut = document.getElementById('rut');
var nombres = document.getElementById('name');
var ape_Paterno = document.getElementById('apePaterno');
var ape_Materno = document.getElementById('apeMaterno');
var email = document.getElementById('email');
var telefono = document.getElementById('telefono');
var password = document.getElementById('password');
var passwordConf = document.getElementById('password-confirm');


// EXPRESIONES REGULARES

let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
let regexLetras = /^[a-zA-Z]$/i
let regexRut = new RegExp("^[0-9,-]+$");

// PARRAFOS 

var resultado_rut = document.getElementById('resultado_rut');
var resultado_nombre = document.getElementById('resultado_Nombre');
var resultado_apepaterno = document.getElementById('resultado_apePaterno');
var resultado_apematerno = document.getElementById('resultado_apeMaterno');
var resultado_email = document.getElementById('resultado_email');
var resultado_telefono = document.getElementById('resultado_telefono');
var resultado_password = document.getElementById('resultado_password');
var resultado_passconfirm = document.getElementById('resultado_passconfirm');

// BOTONES  
var btn_Registar = document.getElementById('btn-registrar');
var btn_mostrarPass = document.getElementById('btnOjo'); 
var btn_mostrarPassConfir = document.getElementById('btnOjoConfir');

//LISTENERS

eventListener();

function eventListener (){

    //listeners de pagina
    document.addEventListener('DOMContentLoaded', inicioApp);
    //listeners de input
    rut.addEventListener('blur', validarRut);
    nombres.addEventListener('blur', validarNombre);
    ape_Paterno.addEventListener('blur', validarApePaterno);
    ape_Materno.addEventListener('blur', validarApeMaterno);
    email.addEventListener('blur', validarEmail);
    telefono.addEventListener('blur', validarTelefono);
    password.addEventListener('blur', validarPassword);
    passwordConf.addEventListener('blur', validarPassConfirm);
    //listeners de formulario

    //listeners de botones
}

function inicioApp(){
    var rutValido = false
    var nombreValido = false;
    var apePaternoValido = false;
    var apeMaternoValido = false;
    var emailValido = false;
    var telefonoValido = false;
    var passwordValido = false;
    var passwordConfValido = false;
    btn_Registar.disabled = true;
}

function validarRut(){
    let stringRut = rut.value;
    if (rut.value != ""){
        if (rut.value.length <= 10 && rut.value.length > 8 ){           
            if(stringRut.charAt(rut.value.length-2) == "-"){
                let rutValidor = new RutValidador(rut.value)
                if(rutValidor.esValido){
                    rutValido = true;
                    rut.classList.remove('input_Error')
                    rut.classList.remove('input_Vacio');
                    rut.classList.add('input_Valido')
                    
                    camposValidos();   
                }else{
                    rut.classList.remove('input_Valido')
                    rut.classList.remove('input_Vacio');
                    rut.classList.add('input_Error');
                    
                }
            } else{
                rut.classList.remove('input_Valido')
                rut.classList.remove('input_Vacio');
                rut.classList.add('input_Error');
                
            }                 
        }else{
            rut.classList.remove('input_Valido')
            rut.classList.remove('input_Vacio');
            rut.classList.add('input_Error');
            
            
        }
    }else{
        rut.classList.add('input_Vacio');
    }
}

function validarNombre(){
    if(nombres.value !=""){
        if (nombres.value.length >=3 ){
            nombres.classList.remove('input_Vacio');
            nombres.classList.remove('input_Error');
            nombres.classList.add('input_Valido')
            nombreValido = true;
            camposValidos();             
        }else{
            nombres.classList.remove('input_Valido')
            nombres.classList.remove('input_Vacio');
            nombres.classList.add('input_Error');
        }
    } else{
        nombres.classList.remove('input_Valido')
        nombres.classList.remove('input_Error');
        nombres.classList.add('input_Vacio');
        
    }
}

function validarApePaterno(){
    if(ape_Paterno.value != ""){
        if (ape_Paterno.value.length > 3 ){
            ape_Paterno.classList.remove('input_Vacio');
            ape_Paterno.classList.remove('input_Error');
            ape_Paterno.classList.add('input_Valido')
            apePaternoValido = true;
            camposValidos();
        }else{
            ape_Paterno.classList.remove('input_Valido')
            ape_Paterno.classList.remove('input_Vacio');
            ape_Paterno.classList.add('input_Error');           
        }
    }else{
        ape_Paterno.classList.remove('input_Valido')
        ape_Paterno.classList.remove('input_Error');
        ape_Paterno.classList.add('input_Vacio');    
    }
}

function validarApeMaterno(){
    if(ape_Materno.value != ""){
        if (ape_Materno.value.length >=4){
            ape_Materno.classList.remove('input_Vacio');
            ape_Materno.classList.remove('input_Error');
            ape_Materno.classList.add('input_Valido')
            apeMaternoValido = true;
            camposValidos();
        }else{
            ape_Materno.classList.remove('input_Valido')
            ape_Materno.classList.remove('input_Vacio');
            ape_Materno.classList.add('input_Error');
        }
    }else{
        ape_Materno.classList.remove('input_Valido')
        ape_Materno.classList.remove('input_Error');
        ape_Materno.classList.add('input_Vacio'); 
    }
}

function validarEmail(){
    if(email.value !=""){
        if(regexEmail.test(email.value)){
            email.classList.remove('input_Vacio');
            email.classList.remove('input_Error');
            email.classList.add('input_Valido')
            emailValido = true;
            camposValidos();
        }else{
            email.classList.remove('input_Valido')
            email.classList.remove('input_Vacio');
            email.classList.add('input_Error');
        }
    }else{
        email.classList.remove('input_Valido')
        email.classList.remove('input_Error');
        email.classList.add('input_Vacio'); 
    }
}

function validarTelefono(){
    if(telefono.value != ""){
        if(telefono.value.length == 9){
            telefono.classList.remove('input_Vacio');
            telefono.classList.remove('input_Error');
            telefono.classList.add('input_Valido')
            telefonoValido = true;
            camposValidos();
        }else {
            telefono.classList.remove('input_Valido')
            telefono.classList.remove('input_Vacio');
            telefono.classList.add('input_Error');
        }
    }else{
        telefono.classList.remove('input_Valido')
        telefono.classList.remove('input_Error');
        telefono.classList.add('input_Vacio'); 
    }
}

function validarPassword(){
    if(password.value != ""){
        if ( password.value.length >= 8){
            password.classList.remove('input_Vacio');
            password.classList.remove('input_Error');
            password.classList.add('input_Valido')
            passwordValido = true;
            camposValidos();
        }else{
            password.classList.remove('input_Valido')
            password.classList.remove('input_Vacio');
            password.classList.add('input_Error');
        }
    }else{
        password.classList.remove('input_Valido')
        password.classList.remove('input_Error');
        password.classList.add('input_Vacio'); 
    }

}
function validarPassConfirm(){
    if(passwordConf.value != ""){
        if ( password.value === passwordConf.value){
            passwordConf.classList.remove('input_Vacio');
            passwordConf.classList.remove('input_Error');
            passwordConf.classList.add('input_Valido')
            passwordConfValido = true;
            camposValidos();
        }else{
            passwordConf.classList.remove('input_Valido')
            passwordConf.classList.remove('input_Vacio');
            passwordConf.classList.add('input_Error');
        }
    }else{
        passwordConf.classList.remove('input_Valido')
        passwordConf.classList.remove('input_Error');
        passwordConf.classList.add('input_Vacio'); 
    }
}

function camposValidos (){

    if(rut.value != "" && nombres.value !="" && ape_Paterno.value !="" && ape_Materno.value !="" && email.value !="" &&
        telefono.value !="" && password.value !="" && passwordConf.value !=""){
        console.log('Los CAMPOS NO ESTAN VACIOS')
        
        console.log(rutValido)
        if ((rutValido) && (nombreValido) && (apePaternoValido) && (apeMaternoValido) && 
        (emailValido) && (telefonoValido) && (passwordValido) && (passwordConfValido)){    
            btn_Registar.disabled = false
        } else{
            console.log("no entra nunca")
        }
    }else{
        console.log('FALTA RELLENAR LOS DEMAS CAMPOS')
    }
}

function mostrarMensaje(tipo,mensaje){
    return `
    <div class='alert alert-${tipo} mt-1' style="width:19.5rem">
        <strong>${mensaje}</strong>
    </div>
    `   
    /*
    setTimeout(function() {
        $('#resultado_rut').fadeOut('fast');
    }, 3000);
    
    */
}

