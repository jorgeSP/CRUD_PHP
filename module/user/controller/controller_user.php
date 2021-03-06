<?php
    include ("module/user/model/DAOUser.php");
   // session_start();
    
    switch($_GET['op']){
        case 'list';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_all_user();
                $rdo1 = $daouser->select_all_user_date_desc();
                $rdo2 = $daouser->select_all_user_date_asc();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/list_user.php");
    		}
            break;
            
        case 'create';
            include("module/user/model/validate.php");
            $error =array (
                'disco'=>'',
                'autor'=>'',
                'identificador'=>'',
                'duracion'=>'',
                'genero'=>'',
                'disponible'=>'', 
                'idioma'=>''
                );
            $check = true;
            
            if (isset($_POST['create'])){
                $check=validate();
                
                if ($check['resultado']){
                    $_SESSION['user']=$_POST;

                    try{
                        $daouser = new DAOUser();
    		            $rdo = $daouser->insert_user($_POST);

                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Registrado el disco correctamente")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
                else {
                   // print_r($check);
                    $error=$check['error'];
                }
            }
            include("module/user/view/create_user.php");
            break;
            
        case 'update';
            include("module/user/model/validate.php");
             $error =array (
                'disco'=>'',
                'autor'=>'',
                'identificador'=>'',
                'duracion'=>'',
                'genero'=>'',
                'disponible'=>'', 
                'idioma'=>''
                );
            $check = true;
            
            if (isset($_POST['update'])){
                $check=validate();
                
                if ($check['resultado']){
                    $_SESSION['user']=$_POST;
                    
                    try{
                        $daouser = new DAOUser();
    		            $rdo = $daouser->update_user($_POST);

                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Actualizados los campos del disco en la base de datos")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }else{
                    // print_r($check);
                    $error=$check['error'];
                     $_SESSION['user']=$_POST;
                    $_GET['id']=$_POST['disco'];

                }

            }
            
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/user/view/update_user.php");
    		}
            break;
            
        case 'read';
            try{
                $daouser = new DAOUser();
            	$rdo = $daouser->select_user($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/read_user.php");
    		}
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daouser = new DAOUser();
                	$rdo = $daouser->delete_user($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_user&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/user/view/delete_user.php");
            break;
        default;
            include("view/inc/error404.php");
            break;
    }