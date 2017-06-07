<?php
    include("model/connect.php");
    
	class DAOUser{
		function insert_user($datos){
			$disco=$datos['disco'];
        	$autor=$datos['autor'];
        	$identificador=$datos['identificador'];
        	$duracion=$datos['duracion'];
        	$fecha_salida=$datos['fecha_salida'];
        	$canciones=$datos['canciones'];
            $genero=$datos['genero'];
            $language=$datos['num'];
            /*
        	foreach ($datos['idioma'] as $indice) {
        	    $language=$language."$indice:";
        	}
            */
            $hobby='';
        	foreach ($datos['disponible'] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	$sql = " INSERT INTO usuario (disco, autor, identificador, duracion, fechasalida, genero, aficion, lenguaje, num_canciones)
                 VALUES ('$disco', '$autor', '$identificador', '$duracion', '$fecha_salida', '$genero', '$hobby', '$language','$canciones')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			$sql = "SELECT * FROM usuario ORDER BY disco ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

        function select_all_user_date_desc(){
            $sql = "SELECT * FROM usuario order by fechasalida DESC";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }

           function select_all_user_date_asc(){
            $sql = "SELECT * FROM usuario order by fechasalida ASC";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
        }
		
		function select_user($user){
			$sql = "SELECT * FROM usuario WHERE disco='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_user($datos){
			$disco=$datos['disco'];
            $autor=$datos['autor'];
            $identificador=$datos['identificador'];
            $duracion=$datos['duracion'];
            $fecha_salida=$datos['fecha_salida'];
            $canciones=$datos['canciones'];
            $genero=$datos['genero'];
            $language=$datos['num'];
            $hobby='';
        
        	/*
        	$comment=$datos['observaciones'];
        	foreach ($datos['aficion'] as $indice) {
        	    $hobby=$hobby."$indice:";
        	}
        	*/
            foreach ($datos['disponible'] as $indice) {
                $hobby=$hobby."$indice:";
            }

        	$sql = " UPDATE usuario SET disco='$disco', autor='$autor', identificador='$identificador', duracion='$duracion', fechasalida='$fecha_salida', genero='$genero', aficion='$hobby',lenguaje='$language',num_canciones='$canciones' WHERE disco='$disco'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		function delete_user($user){
			$sql = "DELETE FROM usuario WHERE disco='$user'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
	}