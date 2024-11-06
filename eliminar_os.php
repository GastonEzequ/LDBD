<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<!DOCTYPE html>
<html>
	<center>	
		<head>
			<title>Eliminar Obra Social</title>
		</head>
		<body>
			<br>
			<?php 
				$conexion=mysqli_connect('localhost','root','','clinica');
    			//hacemos llamado al input de formulario
    			$id = $_POST["os_codos"] ;
                $tabla="obras_sociales";
    			$sql="DELETE FROM $tabla WHERE cod_obra_social  ='$id'";
				$result=mysqli_query($conexion,$sql);
            	mysqli_close( $conexion );
	 		?>
			<form action="bienvenida.php" name="" method="POST">      
	        	<tr>
                	<td><label>La Obra Social fue eliminado exitosamente</label></td>
            	</tr>     
				<tr>
                	<td><input type="submit" value="Volver" /> </td>
            	</tr>
			</form>
		</body>
	</center>
</html>