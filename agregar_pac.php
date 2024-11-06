<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<html>
<center>	
<head>
		<title>Agregar Paciente</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $hist=$_POST["pac_hist"];
    $apellido = $_POST["pac_ape"] ;
    $nombre = $_POST["pac_nom"] ;
    $fecha = $_POST["pac_nac"] ;
    $sexo = $_POST["pac_sex"] ;
    $tipodoc=$_POST["pac_tipodoc"] ;
    $dni=$_POST["pac_dni"] ;
    $os=$_POST["pac_os"] ;

    $sql="INSERT INTO medicos (NroHistoriaClinica , Apellido, Nombre, FechaNacimiento, Sexo, TipoDocumento,NroDocumento,CodObraSocial) 
    VALUES('$hist', '$apellido','$nombre', '$fecha','$sexo','$tipodoc','$dni','$os')";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
	 	?>
	
		<form action="bienvenida.php" name="" method="POST">      
        <tr>
                <td><label>El medico fue creado exitosamente</label></td>
            </tr>     
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>