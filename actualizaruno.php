
<!DOCTYPE html>
<html>
<center>	

	<body>
	<br>
	
		<?php 
	$conexion=mysqli_connect('localhost','root','','pruebas');

    //hacemos llamado al input de formulario
    $id = $_POST["pers_id"] ;
    $dato=$_POST["dato"];
    $datotexto = $_POST["texto"];
    	
    if ($_REQUEST['dato'] == "nombre") {
        $sql="UPDATE t_persona SET nombre='$datotexto' WHERE id='$id'";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
        }
        if ($_REQUEST['dato'] == "apellido") {
            $sql="UPDATE t_persona SET apellido='$datotexto' WHERE id='$id'";
                $result=mysqli_query($conexion,$sql);
                mysqli_close( $conexion );
            }
            if ($_REQUEST['dato'] == "email") {
        $sql="UPDATE t_persona SET email='$datotexto' WHERE id='$id'";
			$result=mysqli_query($conexion,$sql);
            mysqli_close( $conexion );
        }
        if ($_REQUEST['dato'] == "telefono") {
            $sql="UPDATE t_persona SET telefono='$datotexto' WHERE id='$id'";
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