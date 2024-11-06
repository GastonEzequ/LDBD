<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<!DOCTYPE html>
<html>
<center>	
<head>
		<title>Mostrar datos Especialidades</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $id = $_POST["esp_codesp"] ;
    $denominacion = $_POST["esp_deno"] ;
   
    $sql="UPDATE especialidades SET denominacion='$denominacion' WHERE especialidad ='$id'";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
	 	?>
	
		<form action="bienvenida.php" name="" method="POST">      
        <tr>
                <td><label>Los datos fueron actualizados exitosamente</label></td>
            </tr>     
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>