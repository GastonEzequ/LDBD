
<!DOCTYPE html>
<html>
<center>	
<head>
		<title>Mostrar datos</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','pruebas');

    //hacemos llamado al input de formulario
    $id = $_POST["pers_id"] ;
    $nombre = $_POST["pers_nom"] ;
    $apellido = $_POST["pers_ape"] ;
    $email = $_POST["pers_email"] ;
    $telefono = $_POST["pers_tel"] ;	
    $sql="UPDATE t_persona SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono' WHERE id='$id'";
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