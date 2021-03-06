<?php
    function validate_disco($texto){
        $reg="/^[a-zA-Z]{3,50}$/";
        return preg_match($reg,$texto);
    }

    function validate_autor($texto){
      //  $reg="/^[a-zA-Z]{3,50}$/";
          $reg="/^[a-zA-Z[:space:]]*$/";
        return preg_match($reg,$texto);
    }
    
    function validate_identificador($dni){
        $reg="/^[0-9]{1,10}$/";
        return preg_match($reg,$dni);
    }
    
    function validate_fecha($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
     function validate_duracion($texto){
        $reg="/^[0-9]{1,3}$/";
        return preg_match($reg,$texto);
    }
    
   
    function validate(){
        $check=true;
        
        $v_disco=$_POST['disco'];
        $v_autor=$_POST['autor'];
        $v_identificador=$_POST['identificador'];
         $v_duracion=$_POST['duracion'];
        $r_disco=validate_disco($v_disco);
        $r_autor=validate_autor($v_autor);
        $r_identificador=validate_identificador($v_identificador);
        $r_duracion=validate_duracion($v_duracion);
        
        if($r_disco !== 1){
            $error_disco = " * El disco introducido no es valido (solo letras 3-50)";
            $check=false;
        }else{
            $error_disco = "";
        }
          if($r_autor !== 1){
            $error_autor = " * El autor introducido no es valido (solo letras y espacios)";
            $check=false;
        }else{
            $error_autor = "";
        }
         if($r_identificador !== 1){
            $error_identificador = " * El identificador introducido no es valido (Min 1 num,Max 10 num)";
            $check=false;
        }else{
            $error_identificador = "";
        }
         if($r_duracion !== 1){
            $error_duracion = " * La duracion introducida no es valida (Min 1 num,Max 3 num)";
            $check=false;
        }else{
            $error_duracion = "";
        }


         $error =array (
                'disco'=>$error_disco,
                'autor'=>$error_autor,
                'identificador'=>$error_identificador,
                'duracion'=>$error_duracion
                //'idioma'=>$error_idioma
                );
            $result=array('resultado'=>$check,'error'=>$error);
        return $result;
    }