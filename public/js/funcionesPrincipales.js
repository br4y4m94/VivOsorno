function soloLetras(e){
    key = e.keycode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz"

    especiales=[8,13];
    tecla_especial = false;

    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial){
        resultado_nombre.innerHTML = "Solo puede ingresar letras"
        return false;
    }
}

function soloRut(e){
    key = e.keycode || e.which;
    tecla = String.fromCharCode(key).toString();
    numeros = "-0123456789"

    especiales=[8,13];
    tecla_especial = false;

    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if (numeros.indexOf(tecla) == -1 && !tecla_especial){
        resultado_rut.innerHTML = "Solo puede ingresar numeros y un guion"
        return false;
    }
}

function soloNumeros(e){
    key = e.keycode || e.which;
    tecla = String.fromCharCode(key).toString();
    numeros = "0123456789"

    especiales=[8,13];
    tecla_especial = false;

    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if (numeros.indexOf(tecla) == -1 && !tecla_especial){
        resultado_rut.innerHTML = "Solo puede ingresar numeros"
        return false;
    }
}

// FUNCIONES MOSTRAR Y OCULTAR CONTRASEÑA

function mostrarContraseña(){
    if(password.type == "password"){
        password.type = "text";
        btn_mostrarPass.innerHTML = '<i class="fas fa-eye-slash"></i>';
        //setTimeout("ocultar()", 3000);
    }else{
        password.type = "password";
        btn_mostrarPass.innerHTML = '<i class="fas fa-eye"></i>';
    }
}
function ocultar(){
    password.type = "password";
    btn_mostrarPass = '<i class="fas fa-eye-slash"></i>';
}

function mostrarContraseñaConfir(){
    if(passwordConf.type == "password"){
        passwordConf.type = "text";
        btn_mostrarPassConfir.innerHTML = '<i class="fas fa-eye-slash"></i>';
        //setTimeout("ocultar()", 3000);
    }else{
        passwordConf.type = "password";
        btn_mostrarPassConfir.innerHTML = '<i class="fas fa-eye"></i>';
    }
}
function ocultarConfir(){
    passwordConf.type = "password";
    btn_mostrarPassConfir = '<i class="fas fa-eye-slash"></i>';
}

