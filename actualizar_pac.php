<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<!DOCTYPE html>
<html>
<center>	
<head>
		<title>Mostrar datos Pacientes</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $id = $_POST["pac_hist "] ;
    $apellido = $_POST["pac_ape"] ;
    $nombre = $_POST["pac_nom"] ;
    $fechanac = $_POST["pac_nac"] ;
    $sexo = $_POST["pac_sex"] ;	
    $tipodoc = $_POST["pac_tipodoc"] ;
    $dni = $_POST["pac_dni"] ;
    $os = $_POST["pac_os"] ;


    $sql="UPDATE pacientes SET Apellido='$apellido', Nombre='$nombre', FechaNacimiento='$fechanac', Sexo='$sexo',
            TipoDocumento='$tipodoc', NroDocumento='$dni', CodObraSocial='$os'  WHERE NroHistoriaClinica='$id'";
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