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
<h1>Datos de Obras Sociales</h1>	
		
	</head>
	<body>
	<br>
	<table border="1" >
	    <tr>
			<td>Codigo Obra Social</td>
			<td>Denominacion</td>
			<td>Direccion</td>
			<td>Localidad</td>
			<td>Telefono</td>
          
	    </tr>
		<?php 
			$tabla='obras_sociales';
            $sql="SELECT * from $tabla";
			$result=mysqli_query($conexion,$sql);
			while($mostrar=mysqli_fetch_array($result)){
		 	?>
				<tr>
					<td><?php echo $mostrar['cod_obra_social'] ?></td>
					<td><?php echo $mostrar['denominacion'] ?></td>
					<td><?php echo $mostrar['direccion'] ?></td>
					<td><?php echo $mostrar['localidad'] ?></td>
					<td><?php echo $mostrar['telefono'] ?></td>
              
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