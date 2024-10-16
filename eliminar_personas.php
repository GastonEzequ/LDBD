<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<!DOCTYPE html>
<html>
	<center>	
		<head>
			<title>Eliminar personas</title>
		</head>
		<body>
			<br>
			<?php 
				$conexion=mysqli_connect('localhost','root','','pruebas');
    			//hacemos llamado al input de formulario
    			$id = $_POST["pers_id"] ;
    			$sql="DELETE FROM t_persona WHERE id='$id'";
				$result=mysqli_query($conexion,$sql);
            	mysqli_close( $conexion );
	 		?>
			<form action="bienvenida.php" name="" method="POST">      
	        	<tr>
                	<td><label>La persona fue eliminada exitosamente</label></td>
            	</tr>     
				<tr>
                	<td><input type="submit" value="Volver" /> </td>
            	</tr>
			</form>
		</body>
	</center>
</html>