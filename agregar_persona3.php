<html>
<center>	
<head>
		<title>Agregar persona</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','pruebas');

    //hacemos llamado al input de formulario
    $nombre = $_POST["pers_nom"] ;
    $apellido = $_POST["pers_ape"] ;
    $email = $_POST["pers_email"] ;
    $telefono = $_POST["pers_tel"] ;	
    $sql="INSERT INTO t_persona (nombre, apellido, email, telefono) VALUES('$nombre', '$apellido','$email', '$telefono')";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
	 	?>
	
		<form action="bienvenida3.html" name="" method="POST">      
        <tr>
                <td><label>La persona fue creada exitosamente</label></td>
            </tr>     
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>