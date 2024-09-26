<!DOCTYPE html>
<html>
<center>	
<head>
		<title>Agregar persona</title>
	</head>
	<body>
	<br>
	<table border="1" >
		<tr>
			<td>Usuario</td>
			<td>Contraseña</td>
		</tr>

<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conectamos la base de datos
$connection = mysqli_connect($host, $user, $pass);


//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysqli_connect_error;
        }
 
        //indicamos el nombre de la base datos
        $datab = "test";
        //indicamos selecionar a la base datos
        $db = mysqli_select_db($connection,$datab);
        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM login";
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
//echo "<table>";
//echo "<tr>";
//echo "<th><h1>Usuario</th></h1>";
//echo "<th><h1>Contraseña</th></h1>";
//echo "</tr>";

while ($colum = mysqli_fetch_array($result))
{
    
    ?> 
    <tr>
    <td><?php echo $colum['usuario'] ?></td>
    <td><?php echo password_hash($colum['password'],PASSWORD_DEFAULT) ?></td>
    </tr>
  <!--echo "<tr>";
    echo "<td><h2>" . $colum['usuario'] . "</td></h2>";
    echo "<td><h2>" . $colum['password'] . "</td></h2>";
    echo "</tr>";
    -->
	<?php 
			}	
            mysqli_close( $connection );



   //echo "Fuera " ;
   //echo'<a href="bienvenida.html"> Volver Atrás</a>';
        

?>
</table>
		<form action="bienvenida.html" name="" method="POST">      
         
			<tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
		</form>
	</body>
	</center>
</html>