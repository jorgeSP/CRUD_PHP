<div id="contenido">
    <form autocomplete="on" method="post" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_user&op=create">
        <h1 style="text-align: center;">Disco nuevo</h1>
        <table border='0'>
            <tr>
                <td style="width: 150px">Disco: </td>
                <td style="width: 10px"><input type="text" id="disco" name="disco" placeholder="disco" value=""/></td>
                <td><font color="red">
                    <span  style="margin-left: -200px" id="error_disco" class="error" value="">
                        <?php
                        echo $error['disco'];
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
    
            
            <tr >
                <td>Autor: </td>
                <td><input type="text" id="autor" name="autor" placeholder="autor" value=""/></td>
                <td><font color="red">
                    <span style="margin-left: -200px" id="error_autor" class="error">
                   
                       <?php
                        echo $error['autor'];
                        ?>
                    </span>
                 
                </font></font></td>
            </tr>
            
            <tr>
                <td>identificador: </td>
                <td ><input type="text" id= "identificador" name="identificador" placeholder="identificador" value=""/></td>
                <td><font color="red">
              
                    <span style="margin-left: -200px" id="error_identificador" class="error">
                       <?php
                        echo $error['identificador'];
                        ?>
                    </span>
                   
                </font></font></td>
            </tr>
            
            <tr >
                <td>Fecha de salida: </td>
                <td><input id="fecha" type="text" name="fecha_salida" placeholder="fecha de salida" value="" readonly /></td>
                <td><font color="red">
              
                 <span style="margin-left: -200px" id="error_fecha_salida" class="error">
                       
                    </span>
                   
                </font></font></td>
            </tr>
            
            <tr>
                <td>Duracion total : </td>
                <td><input type="text" id="duracion" name="duracion" placeholder="duracion" value=""/></td>
                <td><font color="red">
               
                    <span style="margin-left: -200px" id="error_duracion" class="error">
                       <?php
                        echo $error['duracion'];
                        ?>
                    </span>
                   
                </font></font></td>
                
            </tr>
            
            <tr >
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

<div id="radio">
                     <td>Genero musical: </td>
                <td style="width: 380px"><input type="radio" id="genero" name="genero" placeholder="genero" value="N/A" checked="true" />Sin categoria
                <input type="radio" id="genero" name="genero" placeholder="genero" value="Electronica"/>Electronica
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Reggae"/>Reggae
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Pop"/>Pop
                    <input type="radio" id="genero" name="genero" placeholder="genero" value="Jazz"/>Jazz
                    </td>
              
            </tr>


            <tr>
                <td>Disponible en: </td>
                <td>
                <input type="checkbox" id= "disponible[]" name="disponible[]" placeholder= "disponible" value="DescargaDigital"  checked="true"/>Descarga Digital
                <input type="checkbox" id= "disponible[]" name="disponible[]" placeholder= "disponible" value="disco" />Disco
                    <input type="checkbox" id= "disponible[]" name="disponible[]" placeholder= "disponible" value="vinilo"/>Vinilo
                    <!--<input type="checkbox" id= "disponible[]" name="disponible[]" placeholder= "disponible" value="single"/>Single</td>-->
                <td><font color="red">
              
                    <span style="margin-left: -200px" id="error_disponible" class="error">
                       
                    </span>
                   
                </font></font></td>
            </tr>

            </div>

            
       


            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a  class="volver" href="index.php?page=controller_user&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>