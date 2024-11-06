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
    $id = $_POST["os_codos"] ;
    $denominacion = $_POST["os_deno"] ;
    $direccion = $_POST["os_dir"] ;
    $localidad = $_POST["os_loc"] ;
    $telefono = $_POST["os_tel"] ;	
    $sql="UPDATE obras_sociales SET denominacion='$denominacion', direccion='$direccion', localidad='$localidad', telefono='$telefono' WHERE cod_obra_social ='$id'";
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