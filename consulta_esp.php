<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');
 ?>
<!DOCTYPE html>
<html>
<center>	
<head>
<h1>Datos de especialidades</h1>	
		
	</head>
	<body>
	<br>
	<table border="1" >
	    <tr>
			<td>Codigo Especialidad</td>
			<td>Denominacion</td>
		
          
	    </tr>
		<?php 
			$tabla='especialidades';
            $sql="SELECT * from $tabla";
			$result=mysqli_query($conexion,$sql);
			while($mostrar=mysqli_fetch_array($result)){
		 	?>
				<tr>
					<td><?php echo $mostrar['especialidad'] ?></td>
					<td><?php echo $mostrar['denominacion'] ?></td>
			
              
				</tr>
			<?php 
			}	
	 	?>
	</table>
			<table>
	<form action="bienvenida.php" name="" method="POST">           
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
		</table>
	</body>
	</center>
</html>