<div id="contenido">
    <h1 style="text-align: center;">Informacion del Disco</h1>
    <p>
    <table border='2' style="margin-left: 240px">
        <tr>
            <td>Disco: </td>
            <td>
                <?php
                    echo $user['disco'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>Autor del disco: </td>
            <td>
                <?php
                    echo $user['autor'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Identificador: </td>
            <td>
                <?php
                    echo $user['identificador'];
                ?>
            </td>
        </tr>

        <tr>
            <td>Num canciones: </td>
            <td>
                <?php
                    echo $user['num_canciones'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Duracion total del disco: </td>
            <td>
                <?php
                    echo $user['duracion'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Fecha salida del disco: </td>
            <td>
                <?php
                    echo $user['fechasalida'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>genero musical: </td>
            <td>
                <?php
                    echo $user['genero'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Disponibilidad: </td>
            <td>
                <?php
                    echo $user['aficion'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>lenguaje del disco : </td>
            <td>
                <?php
                    echo $user['lenguaje'];
                ?>
            </td>
        </tr>
        <!--
        <tr>
            <td>Idioma: </td>
            <td>
                <?php
                    echo $user['ciudad'];
                ?>
            </td>
        </tr>
        -->
        
    </table>
    </p>
    <p><a class="volver" href="index.php?page=controller_user&op=list">Volver</a></p>
</div>