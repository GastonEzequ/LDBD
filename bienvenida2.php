<HTML>
    <center>
    
        <body>
    <table>
            <h1>
                Bienvenido 
            </h1>
<?php 
echo $nombre;
?>           
            <form action="agregar_persona.html" name="" method="POST">
                <tr>
                    <td><input type="submit" value="Agregar personas" /> </td>
                </tr>            
            </form>
            <form action="consulta.php" name="" method="POST">
                <tr>
                    <td><input type="submit" value="Mostrar personas" /> </td>
                </tr>            
            </form>
            
            <form action="login.html" name="" method="POST">
                <tr>
                    <td><input type="submit" value="Volver" /> </td>
                </tr>
            </form>
        </table>
        </body>
    </center>
    
    </HTML>