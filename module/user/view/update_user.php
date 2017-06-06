<div id="contenido">
    <form autocomplete="on" method="post" name="aupdate_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Modificar Disco</h1>
        <table border='0'>

             <tr>
                <td>Disco: </td>
                <td><input type="text" id="disco" name="disco" placeholder="disco" value="<?php echo $user['disco'];?>" readonly/></td>
                <td><font color="red">
                  <span id="error_disco" class="error" style="margin-left: -380px">
                        <?php
                        echo $error['disco'];
                        ?>
                    </span>
                </font></font></td>
            </tr>



            <tr>
                <td>Autor: </td>
                <td><input type="autor" id="autor" name="autor" placeholder="autor" value="<?php echo $user['autor'];?>" style="width: 167px"/></td>
                <td><font color="red">
                   <span id="error_autor" class="error"  style="margin-left: -380px">
                       <?php
                        echo $error['autor'];
                        ?>
                    </span>
                 
                </font></font></td>
            </tr>
            
            <tr>
                <td>identificador: </td>
                <td><input type="text" id="identificador" name="identificador" placeholder="identificador" value="<?php echo $user['identificador'];?>"/></td>
                <td><font color="red">
                    <span id="error_identificador" class="error"  style="margin-left: -380px">
                       <?php
                        echo $error['identificador'];
                        ?>
                    </span>
                </font></font></td>
            </tr>

              <tr>
                <td>Fecha de salida: </td>
               <td><input id="fecha" type="text" name="fecha_salida" placeholder="fecha de salida"  value="<?php echo $user['fechasalida'];?>" readonly/></td>
                <td><font color="red">
              
                  <span id="error_fecha_salida" class="error"  style="margin-left: -380px">
                   
                </font></font></td>
            </tr>
            
                        <tr>
                <td>Duracion total : </td>
                <td><input id="duracion" type="text" name="duracion" placeholder="duracion" value="<?php echo $user['duracion'];?>"/></td>
                <td><font color="red">
               
                   <span id="error_duracion" class="error"  style="margin-left: -380px">
                       <?php
                        echo $error['duracion'];
                        ?>
                    </span>
                   
                </font></font></td>
                
            </tr>


              <tr>
                <td>Numero de canciones: </td>
                <td><select id="canciones" name="canciones" placeholder="canciones">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>

                    </select></td>
                <td><font color="red">
                
                </font></font></td>
            </tr>
              <tr>
                <td>Idioma del disco: </td>
                <td><select id="num" name="num" placeholder="num">
                    <option value="Castellano"  checked="true">Castellano</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Italiano">Italiano</option>
                    </select></td>
                <td><font color="red">
                <!--
                 <span id="error_idioma" class="error">
                       <?php
                    //    echo $error['idioma']
                        ?>
                    </span>
                  -->
                </font></font></td>
            </tr>

                 <tr>
                <td>Genero musical: </td>
                <td>
                    <?php
                        if ($user['genero']==="N/A"){
                    ?><input type="radio" id="genero" name="genero" placeholder="genero" value="N/A" checked="true" />Sin categoria
                       <input type="radio" id="genero" name="genero" placeholder="genero" value="Electronica" />Electronica
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Reggae"/>Reggae
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop"/>Pop
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Jazz"/>Jazz
                    <?php    
                        }elseif($user['genero']==="Electronica"){
                    ?>
                     <input type="radio" id="genero" name="genero" placeholder="genero" value="N/A"/>Sin categoria
                        <input type="radio" id="genero" name="genero" placeholder="genero" value="Electronica" checked="true"/>Electronica
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Reggae"/>Reggae
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop"/>Pop
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Jazz"/>Jazz
                    <?php   
                        }elseif($user['genero']==="Reggae"){
                    ?>
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="N/A"/>Sin categoria
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Electronica"/>Electronica
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Reggae" checked="true"/>Reggae
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop"/>Pop
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Jazz"/>Jazz
                    <?php
                }elseif($user['genero']==="Pop"){
                     ?>
                       <input type="radio" id="genero" name="genero" placeholder="genero" value="N/A"/>Sin categoria
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Electronica"/>Electronica
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Reggae"/>Reggae
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop" checked="true"/>Pop
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Jazz"/>Jazz
                    <?php
                     }else{
                     ?>
                       <input type="radio" id="genero" name="genero" placeholder="genero" value="N/A"/>Sin categoria
                     <input type="radio" id="genero" name="genero" placeholder="genero" value="Electronica"/>Electronica
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Reggae"/>Reggae
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop"/>Pop
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Jazz" checked="true"/>Jazz
                    <?php
                    }
                    ?>
                </td>
                
                <td><font color="red">
                      <span id="error_genero" class="error"  style="margin-left: -380px">
                       
                    </span>
                </font></font></td>
            </tr>


            <tr>
                <td>Disponible en: </td>
                <?php
                    $afi=explode(":", $user['aficion']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("disco", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "disponible[]" name="disponible[]" value="disco" checked/>Disco
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "disponible[]" name="disponible[]" value="disco"/>Disco
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("vinilo", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "disponible[]" name="disponible[]" value="vinilo" checked/>Vinilo
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "disponible[]" name="disponible[]" value="vinilo"/>Vinilo
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("single", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "disponible[]" name="disponible[]" value="single" checked/>Single</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "disponible[]" name="disponible[]" value="single"/>Single</td>
                    <?php
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_aficion" class="error"  style="margin-left: -380px">
                        <?php
                            if(isset($error_aficion)){
                            echo "$error_aficion";
                        }else
                        echo " ";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td><a class="volver" href="index.php?page=controller_user&op=list" style="margin-left: 330px">Volver</a></td>
            </tr>
        </table>
    </form>
</div>