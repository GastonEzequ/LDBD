<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<html>
<center>	
<head>
		<title>Agregar Especialidad</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $id=$_POST["esp_codesp"];
    $denominacion = $_POST["esp_deno"] ;
   
    
    $sql="INSERT INTO especialidades (especialidad, denominacion) 
    VALUES('$id', '$denominacion')";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
	 	?>
	
		<form action="bienvenida.php" name="" method="POST">      
        <tr>
                <td><label>La Especialidad fue creada exitosamente</label></td>
            </tr>     
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>