<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<!DOCTYPE html>
<html>
<center>	

	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $id = $_POST["esp_codesp"] ;
    $dato=$_POST["dato"];
    $datotexto = $_POST["texto"];
    $tabla="especialidades";
    
        if ($_REQUEST['dato'] == "esp_deno") {
            $sql="UPDATE $tabla SET denominacion='$datotexto' WHERE especialidad ='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
        
    ?>
	
		<form action="bienvenida.php" name="" method="POST">      
        <tr>
                <td><label>El dato fue actualizado exitosamente</label></td>
            </tr>     
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>