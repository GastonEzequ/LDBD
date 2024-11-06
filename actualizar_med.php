<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<!DOCTYPE html>
<html>
<center>	
<head>
		<title>Mostrar datos Obras Sociales</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $id = $_POST["med_mat "] ;
    $apellido = $_POST["med_ape"] ;
    $nombre = $_POST["med_nom"] ;
    $fechanac = $_POST["med_nac"] ;
    $sexo = $_POST["med_sex"] ;	
    $especialidad = $_POST["med_esp"] ;	

    $sql="UPDATE medicos SET Apellido='$apellido', Nombre='$nombre', FechaNacimiento='$fechanac', Sexo='$sexo',
            Especialidad='$especialidad'  WHERE NroMatricula ='$id'";
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