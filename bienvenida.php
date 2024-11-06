<style type="text/css" media="screen">
    @import 'Estilo.css';
</style>
<HTML>
<center>
    <body>
        <h1>Menu de usuario</h1>
    <table>
       
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "test";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) 
	{
		die("No hay conexión: ".mysqli_connect_error());
	}
	session_start();
    if (!isset($_SESSION['nombre'])){
    $_SESSION["nombre"] = $_POST["txtusuario"];
	$_SESSION["pass"] = $_POST["txtpassword"];
    }
    $permi=3;
	$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$_SESSION["nombre"]."' and password = '".$_SESSION["pass"]."' and permiso = $permi");
	$nr = mysqli_num_rows($query);
    
    if ($nr == 1): ?>
    <tr>
		<td><?php echo "Bienvenido/a ",$_SESSION["nombre"] ?></td>
    </tr>
    </table>
    <table>
    <form action="agregar_medico.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar medicos" /> </td>
                        
        </form>
        <form action="consulta_med.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar medicos" /> </td>
                        
        </form>
        <form action="preactualizar_med.html" name="" method="POST">
            
                <td><input type="submit" value="Actualizar datos medicos" /> </td>
                        
        </form>
        <form action="eliminar_med.html" name="" method="POST">
            
                <td><input type="submit" value="Eliminar medicos" /> </td>
            </tr>            
        </form>
        </table>
        <table>
        <form action="agregar_pac.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar pacientes" /> </td>
                        
        </form>
        <form action="consulta_pac.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar pacientes" /> </td>
                        
        </form>
        <form action="preactualizar_pac.html" name="" method="POST">
            
                <td><input type="submit" value="Actualizar datos pacientes" /> </td>
                        
        </form>
        <form action="eliminar_pac.html" name="" method="POST">
            
                <td><input type="submit" value="Eliminar pacientes" /> </td>
            </tr>            
        </form>
        </table>
        <table>
        <form action="agregar_cons.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar consultas" /> </td>
                        
        </form>
        <form action="consulta_cons.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar consultas" /> </td>
                        
        </form>
        <form action="preactualizar_cons.html" name="" method="POST">
            
                <td><input type="submit" value="Actualizar datos consultas" /> </td>
                        
        </form>
        <form action="eliminar_cons.html" name="" method="POST">
            
                <td><input type="submit" value="Eliminar consultas" /> </td>
            </tr>            
        </form>
        </table>
        <table>
        <form action="agregar_os.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar Obras Sociales" /> </td>
                        
        </form>
        <form action="consulta_os.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar Obras Sociales" /> </td>
                        
        </form>
        <form action="preactualizar_os.html" name="" method="POST">
            
                <td><input type="submit" value="Actualizar datos Obras Sociales" /> </td>
                        
        </form>
        <form action="eliminar_os.html" name="" method="POST">
            
                <td><input type="submit" value="Eliminar Obras Sociales" /> </td>
            </tr>            
        </form>
        </table>
        <table>
        <form action="agregar_esp.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar Especialidades" /> </td>
                        
        </form>
        <form action="consulta_esp.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar Especialidades" /> </td>
                        
        </form>
        <form action="preactualizar_esp.html" name="" method="POST">
            
                <td><input type="submit" value="Actualizar datos Especialidades" /> </td>
                        
        </form>
        <form action="eliminar_esp.html" name="" method="POST">
            
                <td><input type="submit" value="Eliminar Especialidades" /> </td>
            </tr>            
        </form>
        </table>
        <table>

        <form action="usuarios.php" name="" method="POST">
            <tr>
                <td><input type="submit" value="Mostrar usuarios" /> </td>
            </tr>
        </form>
        </table>
        <table>
        <form action="login.php" name="" method="POST">
            <tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
          
        </form>
        
    <?php endif; ?>
    <?php 
    $permi=2;
	$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$_SESSION["nombre"]."' and password = '".$_SESSION["pass"]."' and permiso = $permi");
	$nr = mysqli_num_rows($query);
    if ($nr == 1): ?>
     <tr>
		<td><?php echo "Bienvenido/a ",$_SESSION["nombre"] ?></td>
    </tr>
    </table>
    <table>
    <form action="agregar_medico.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar medicos" /> </td>
                        
        </form>
        <form action="consulta_med.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar medicos" /> </td>
                        
        </form>
    
        </table>
        <table>
        <form action="agregar_pac.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar pacientes" /> </td>
                        
        </form>
        <form action="consulta_pac.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar pacientes" /> </td>
                        
        </form>
        <table>
        <form action="agregar_cons.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar consultas" /> </td>
                        
        </form>
        <form action="consulta_cons.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar consultas" /> </td>
                        
        </form>
        </form>
        </table>
        <table>
        <form action="agregar_os.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar Obras Sociales" /> </td>
                        
        </form>
        <form action="consulta_os.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar Obras Sociales" /> </td>
                        
        </form>
      
        <table>
        <form action="agregar_esp.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Agregar Especialidades" /> </td>
                        
        </form>
        <form action="consulta_esp.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar Especialidades" /> </td>
                        
        </form>
        <table>
        <form action="login.php" name="" method="POST">
            <tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
          
        </form>
        
        <?php endif; ?>
        <?php 
        $permi=1;
	$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$_SESSION["nombre"]."' and password = '".$_SESSION["pass"]."' and permiso = $permi");
	$nr = mysqli_num_rows($query);
    if ($nr == 1): ?>
     <tr>
		<td><?php echo "Bienvenido/a ",$_SESSION["nombre"] ?></td>
    </tr>
    </table>
    <table>
        <form action="consulta_med.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar medicos" /> </td>
                        
        </form>
        </table>
        <table>
        <form action="consulta_pac.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar pacientes" /> </td>
                        
        </form>
        </table>
        <table>
       
        <form action="consulta_cons.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar consultas" /> </td>
                        
        </form>
       
        </table>
        <table>
        <form action="consulta_os.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar Obras Sociales" /> </td>
                        
        </form>
        </table>
        <table>
        <form action="consulta_esp.php" name="" method="POST">
            
                <td><input type="submit" value="Mostrar Especialidades" /> </td>
                        
        </form>
        </table>
        <table>
        <form action="login.php" name="" method="POST">
            <tr>
                <td><input type="submit" value="Volver" /> </td>
            </tr>
          
        </form>
 
    <?php endif; ?>
    </table>
    </body>
</center>
</HTML>