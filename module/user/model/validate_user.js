function validate_disco(texto){
    if (texto.length > 0){
      // var reg=/^[a-zA-Z]*$/;
        return true;
    }
    return false;
}


function validate_autor(texto){
    if (texto.length > 0){
         return true;
    }
    return false;
}
function validate_identificador(identificador){
    if (identificador.length > 0){
     
         return true;
    }
    return false;
}


function validate_duracion(texto){
    if (texto.length > 0){
         return true;
    }
    return false;
}
function validate_fecha(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate(){
    var check=true
    var v_disco=document.getElementById('disco').value;
    var v_autor=document.getElementById('autor').value;
    var v_identificador=document.getElementById('identificador').value;
    var v_duracion=document.getElementById('duracion').value;
    var v_fecha_salida=document.getElementById('fecha').value;

    var r_disco=validate_disco(v_disco);
    var r_autor=validate_autor(v_autor);
    var r_identificador=validate_identificador(v_identificador);
    var r_duracion=validate_duracion(v_duracion);
    var r_fecha_salida=validate_fecha(v_fecha_salida);


    if(!r_disco){
        document.getElementById('error_disco').innerHTML = "   Este campo es obligatorio";
        
        check=false;
    }else{
        document.getElementById('error_disco').innerHTML = "";
    }

 if(!r_identificador){ 
        document.getElementById('error_identificador').innerHTML = "  Este campo es obligatorio";
        check=false;
    }else{
        document.getElementById('error_identificador').innerHTML = "";
    }

     if(!r_autor){
        document.getElementById('error_autor').innerHTML = "    Este campo es obligatorio";
        check=false;
    }else{
        document.getElementById('error_autor').innerHTML = "";
    }
     if(!r_fecha_salida){
        document.getElementById('error_fecha_salida').innerHTML = "   Este campo es obligatorio";
        check=false;
    }else{
        document.getElementById('error_fecha_salida').innerHTML = "";
    }
    if(!r_duracion){
        document.getElementById('error_duracion').innerHTML = "    Este campo es obligatorio";
        check=false;
    }else{
        document.getElementById('error_duracion').innerHTML = "";
    }


    return check;
}