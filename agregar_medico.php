<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<html>
<center>	
<head>
		<title>Agregar Medico</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $matricula=$_POST["med_mat"];
    $apellido = $_POST["med_ape"] ;
    $nombre = $_POST["med_nom"] ;

    $fecha = $_POST["med_nac"] ;
    $sexo = $_POST["med_sex"] ;
    $especialidad=$_POST["med_esp"] ;
    $sql="INSERT INTO medicos (NroMatricula, Apellido, Nombre, FechaNacimiento, Sexo, Especialidad) 
    VALUES('$matricula', '$apellido','$nombre', '$fecha','$sexo','$especialidad')";
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