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
    $id = $_POST["med_mat"] ;
    $dato=$_POST["dato"];
    $datotexto = $_POST["texto"];
    	
        if ($_REQUEST['dato'] == "med_ape") {
            $sql="UPDATE medicos SET Apellido='$datotexto' WHERE id='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
            if ($_REQUEST['dato'] == "med_nom") {
                $sql="UPDATE medicos SET Nombre='$datotexto' WHERE id='$id'";
                    $result=mysqli_query($conexion,$sql);
                    mysqli_close( $conexion );
                }
            
            if ($_REQUEST['dato'] == "med_nac") {
        $sql="UPDATE medicos SET FechaNacimiento='$datotexto' WHERE id='$id'";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
        }
        if ($_REQUEST['dato'] == "med_sex") {
            $sql="UPDATE medicos SET Sexo='$datotexto' WHERE id='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
            if ($_REQUEST['dato'] == "med_esp") {
                $sql="UPDATE medicos SET Especialidad='$datotexto' WHERE id='$id'";
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