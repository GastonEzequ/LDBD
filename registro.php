
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conectamos la base de datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al input de formulario
$usuario = $_POST["usuario"] ;
$contrasena = $_POST["password"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysqli_connect_error;
        }
  else
        {
            echo "<b><h3>La conexión fue exitosa</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "test";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>El usuario ha sido creado exitosamente</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO login (usuario, password) VALUES ('$usuario','$contrasena')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);


        

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="registro.html"> Volver Atrás</a>';


?>

