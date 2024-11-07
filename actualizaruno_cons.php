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
    $dato=$_POST["dato"];
    $datotexto = $_POST["texto"];
    $tabla="consultas_medicas";
    	
        if ($_REQUEST['dato'] == "cons_hist") {
            $sql="UPDATE $tabla SET nro_historia_clinica='$datotexto' WHERE nro_consulta ='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
            if ($_REQUEST['dato'] == "cons_mat") {
                $sql="UPDATE $tabla SET nro_matricula='$datotexto' WHERE nro_consulta ='$id'";
                    $result=mysqli_query($conexion,$sql);
                    mysqli_close( $conexion );
                }
            
            if ($_REQUEST['dato'] == "cons_fechor") {
        $sql="UPDATE $tabla SET fecha_hora_consulta='$datotexto' WHERE nro_consulta ='$id'";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
        }
        if ($_REQUEST['dato'] == "cons_diag") {
            $sql="UPDATE $tabla SET diagnostico='$datotexto' WHERE nro_consulta ='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
            if ($_REQUEST['dato'] == "cons_trat") {
                $sql="UPDATE $tabla SET tratamiento_recomendado='$datotexto' WHERE nro_consulta ='$id'";
                    $result=mysqli_query($conexion,$sql);
                    mysqli_close( $conexion );
                }
    ?>
	
		<form action="bienvenida.php" name="" method="POST">      
        <tr>
                <td><label>El dato fue actualizado exitosamente</label></td>
            </tr>     
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>