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
    $id = $_POST["os_codos"] ;
    $dato=$_POST["dato"];
    $datotexto = $_POST["texto"];
    $tabla="obras_sociales";
    
        if ($_REQUEST['dato'] == "os_deno") {
            $sql="UPDATE $tabla SET denominacion='$datotexto' WHERE cod_obra_social ='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
            if ($_REQUEST['dato'] == "os_dir") {
                $sql="UPDATE $tabla SET direccion='$datotexto' WHERE cod_obra_social ='$id'";
                    $result=mysqli_query($conexion,$sql);
                    mysqli_close( $conexion );
                }
            
            if ($_REQUEST['dato'] == "os_loc") {
        $sql="UPDATE $tabla SET localidad='$datotexto' WHERE cod_obra_social ='$id'";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
        }
        if ($_REQUEST['dato'] == "os_tel") {
            $sql="UPDATE $tabla SET telefono='$datotexto' WHERE cod_obra_social ='$id'";
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