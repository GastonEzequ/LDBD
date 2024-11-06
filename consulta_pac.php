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
<h1>Datos de Pacientes</h1>	
		
	</head>
	<body>
	<br>
	<table border="1" >
	    <tr>
			<td>Nro Historia Clinica</td>
			<td>Apellido</td>
			<td>Nombre</td>
			<td>Fecha Nacimiento</td>
			<td>Sexo</td>
            <td>Tipo de Documento</td>
            <td>Nro de Documento</td>
            <td>Codigo de Obra Social</td>

	    </tr>
		<?php 
			$tabla='pacientes';
            $sql="SELECT * from $tabla";
			$result=mysqli_query($conexion,$sql);
			while($mostrar=mysqli_fetch_array($result)){
		 	?>
				<tr>
					<td><?php echo $mostrar['NroHistoriaClinica'] ?></td>
					<td><?php echo $mostrar['Apellido'] ?></td>
					<td><?php echo $mostrar['Nombre'] ?></td>
					<td><?php echo $mostrar['FechaNacimiento'] ?></td>
					<td><?php echo $mostrar['Sexo'] ?></td>
                    <td><?php echo $mostrar['TipoDocumento'] ?></td>
                    <td><?php echo $mostrar['NroDocumento'] ?></td>
                    <td><?php echo $mostrar['CodObraSocial'] ?></td>

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