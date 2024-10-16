<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>
<html>
<?php 
session_start();
session_destroy();
?>
<center>
    <form method="post" action="bienvenida.php">
        <table>
            <tr>
                
                    <h1>Ingreso</h1>
                
            </tr>
            <tr>
                <td rowspan="5"><img src="candado.png" /></td>
                <td><label>Usuario</label></td>
            </tr>
            <tr>
                <td><input type="text" name="txtusuario" value="" required/></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
            </tr>
            <tr>
                <td><input type="password" name="txtpassword" value="" required/> </td>
            </tr>
            <tr>
                <td><input type="submit" value="Ingresar" /> </td>
            </tr>
        </table>
    </form>
    <form action="index.html" name="" method="POST">
		<table>
        	<tr>
            	<td><input type="submit" value="Volver" /> </td>
        	</tr>
    	</table>
    </form>
</center>

</html>