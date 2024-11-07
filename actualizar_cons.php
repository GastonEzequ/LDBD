<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>

<!DOCTYPE html>
<html>
<center>	

	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','clinica');

    //hacemos llamado al input de formulario
    $id = $_POST["cons_num"] ;
    $hist=$_POST["cons_hist"];
    $matricula = $_POST["cons_mat"] ;
    $fechahora = $_POST["cons_fechor"] ;
    $diagnostico = $_POST["cons_diag"] ;
    $tratamiento = $_POST["cons_trat"] ;	

    $sql="UPDATE consultas_medicas SET nro_historia_clinica='$hist', nro_matricula='$matricula', fecha_hora_consulta='$fechahora', 
            diagnostico='$diagnostico', tratamiento_recomendado='$tratamiento'  WHERE nro_consulta  ='$id'";
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