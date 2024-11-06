<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<html>
<center>	
<head>
		<title>Agregar Consulta</title>
	</head>
	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $hist=$_POST["cons_hist"];
    $matricula = $_POST["cons_mat"] ;
    $fechahora = $_POST["cons_fechor"] ;
    $diagnostico = $_POST["cons_diag"] ;
    $tratamiento = $_POST["cons_trat"] ;
    
    $sql="INSERT INTO medicos (nro_historia_clinica  , nro_matricula, fecha_hora_consulta, diagnostico, tratamiento_recomendado) 
    VALUES('$hist', '$matricula','$fechahora', '$diagnostico','$tratamiento')";
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