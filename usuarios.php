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
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "test";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);
        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM login";
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Usuario</th></h1>";
echo "<th><h1>Contraseña</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['usuario'] . "</td></h2>";
    echo "<td><h2>" . $colum['password'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";
mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="bienvenida.html"> Volver Atrás</a>';


?>
