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
    $id = $_POST["pac_hist"] ;
    $dato=$_POST["dato"];
    $datotexto = $_POST["texto"];
    $tabla="pacientes";

    	
        if ($_REQUEST['dato'] == "pac_ape") {
            $sql="UPDATE $tabla SET Apellido='$datotexto' WHERE id='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
            if ($_REQUEST['dato'] == "pac_nom") {
                $sql="UPDATE $tabla SET Nombre='$datotexto' WHERE id='$id'";
                    $result=mysqli_query($conexion,$sql);
                    mysqli_close( $conexion );
                }
            
            if ($_REQUEST['dato'] == "pac_nac") {
        $sql="UPDATE $tabla SET FechaNacimiento='$datotexto' WHERE id='$id'";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
        }
        if ($_REQUEST['dato'] == "pac_sex") {
            $sql="UPDATE $tabla SET Sexo='$datotexto' WHERE id='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
            if ($_REQUEST['dato'] == "pac_tipodoc") {
                $sql="UPDATE $tabla SET TipoDocumento='$datotexto' WHERE id='$id'";
                    $result=mysqli_query($conexion,$sql);
                    mysqli_close( $conexion );
                }
                if ($_REQUEST['dato'] == "pac_dni") {
                    $sql="UPDATE $tabla SET NroDocumento='$datotexto' WHERE id='$id'";
                        $result=mysqli_query($conexion,$sql);
                        mysqli_close( $conexion );
                    }
                    if ($_REQUEST['dato'] == "pac_os") {
                        $sql="UPDATE $tabla SET CodObraSocial='$datotexto' WHERE id='$id'";
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