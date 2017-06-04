<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3 style="text-align: center;">LISTADO DE DISCOS DISPONIBLES</h3>
    	</div>
    	<div class="row">
    		<p style="text-align:center"><a href="index.php?page=controller_user&op=create"><img src="view/img/anadir.png"></a></p>
    		
    		<table style="width: 650px; margin-left: 50px">
                <tr style="backgrou
                nd: #11b0ff;">
                      <td width=125><b>Disco</b></th>
                    <td width=125><b>Identificador</b></th>
                    <td width=125><b>Formato disponible</b></th>
                    <th width=350><b>Botones</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                        
                       		echo '<tr border="1">';
                    	   	echo '<td width=125>'. $row['disco'] . '</td>';
                    	   	echo '<td width=125>'. $row['identificador'] . '</td>';
                    	   	echo '<td width=125>'. $row['aficion'] . '</td>';
                    	   	echo '<td width=350>';
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['disco'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['disco'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_user&op=delete&id='.$row['disco'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                            
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>