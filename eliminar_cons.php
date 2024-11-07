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
    			$id = $_POST["cons_num"] ;
    			$sql="DELETE FROM consultas_medicas WHERE nro_consulta='$id'";
				$result=mysqli_query($conexion,$sql);
            	mysqli_close( $conexion );
	 		?>
			<TABLE>
            <form action="bienvenida.php" name="" method="POST">      
	        	<tr>
                	<td><label>La consulta fue eliminada exitosamente</label></td>
            	</tr>     
				<tr>
                	<td><input type="submit" value="Volver" /> </td>
            	</tr>
			</form>
            </TABLE>
		</body>
	</center>
</html>