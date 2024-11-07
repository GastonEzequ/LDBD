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
<h1>Consultas Medicas</h1>	
		
	</head>
	<body>
	<br>
	<table border="1" >
	    <tr>
			<td>Nro Consulta</td>
            <td>Fecha y Hora</td>
			<td>Diagnostico</td>
			<td>Tratamiento</td>
        
            <td>Apellido Paciente</td>
			<td>Nombre Paciente</td>
            <td>Apellido Medico</td>
			<td>Nombre Medico</td>

	    </tr>
		<?php 
			$tabla='consultas_medicas';
            $sql="SELECT nro_consulta, fecha_hora_consulta, diagnostico, tratamiento_recomendado, pacientes.Apellido as Apellido_Paciente, 
            pacientes.Nombre as Nombre_Paciente, medicos.Apellido as Apellido_Medico, medicos.Nombre as Nombre_Medico from ((consultas_medicas 
            inner join pacientes on consultas_medicas.nro_historia_clinica  = pacientes.NroHistoriaClinica ) inner join medicos on 
            consultas_medicas.nro_matricula = medicos.NroMatricula) order by fecha_hora_consulta";
			//$sql="SELECT fecha_hora_consulta, diagnostico, tratamiento_recomendado, pacientes.Apellido as Apellido_Paciente, 
            //pacientes.Nombre as Nombre_Paciente, medicos.Apellido as Apellido_Medico, medicos.Nombre as Nombre_Medico from 
            //consultas_medicas, pacientes, medicos where consultas_medicas.nro_historia_clinica  = pacientes.NroHistoriaClinica and 
            //consultas_medicas.nro_matricula = medicos.NroMatricula";
            $result=mysqli_query($conexion,$sql);
			while($mostrar=mysqli_fetch_array($result)){
		 	?>
				<tr>
					<td><?php echo $mostrar['nro_consulta'] ?></td>
                    <td><?php echo $mostrar['fecha_hora_consulta'] ?></td>
					<td><?php echo $mostrar['diagnostico'] ?></td>
					<td><?php echo $mostrar['tratamiento_recomendado'] ?></td>
                    <td><?php echo $mostrar['Apellido_Paciente'] ?></td>
					<td><?php echo $mostrar['Nombre_Paciente'] ?></td>
                    <td><?php echo $mostrar['Apellido_Medico'] ?></td>
					<td><?php echo $mostrar['Nombre_Medico'] ?></td>
               
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