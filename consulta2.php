<?php 
	$conexion=mysqli_connect('localhost','root','','pruebas');
 ?>
<html>
<center>	
<head>
		<title>Mostrar datos</title>
	</head>
	<body>
	<br>
	<table border="1" >
		<tr>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>email</td>
			<td>telefono</td>	
		</tr>
		<?php 
			$sql="SELECT * from t_persona";
			$result=mysqli_query($conexion,$sql);
			
			while($mostrar=mysqli_fetch_array($result)){
		 	?>
				<tr>
					<td><?php echo $mostrar['id'] ?></td>
					<td><?php echo $mostrar['nombre'] ?></td>
					<td><?php echo $mostrar['apellido'] ?></td>
					<td><?php echo $mostrar['email'] ?></td>
					<td><?php echo $mostrar['telefono'] ?></td>
				</tr>
			<?php 
			}	
	 	?>
	</table>
		<form action="bienvenida2.html" name="" method="POST">           
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>