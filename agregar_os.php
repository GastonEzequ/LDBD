<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<html>
<center>	
<head>
		<title>Agregar Obra Social</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $nos=$_POST["os_codos"];
    $denominacion = $_POST["os_deno"] ;
    $direccion = $_POST["os_dire"] ;
    $localidad = $_POST["os_loc"] ;
    $telefono = $_POST["os_tel"] ;
    
    $sql="INSERT INTO obras_sociales (cod_obra_social   , denominacion, direccion, localidad, telefono) 
    VALUES('$nos', '$denominacion','$direccion', '$localidad','$telefono')";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
	 	?>
	
		<form action="bienvenida.php" name="" method="POST">      
        <tr>
                <td><label>La Consulta fue creado exitosamente</label></td>
            </tr>     
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>