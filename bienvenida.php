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
        <form action="preactualizar.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Actualizar datos personas" /> </td>
            </tr>            
        </form>
        <form action="eliminar_personas.html" name="" method="POST">
            <tr>
                <td><input type="submit" value="Eliminar personas" /> </td>
            </tr>            
        </form>
        <form action="usuarios.php" name="" method="POST">
            <tr>
                <td><input type="submit" value="Mostrar usuarios" /> </td>
            </tr>
        </form>
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
        <form action="consulta.php" name="" method="POST">
            <tr>
                <td><input type="submit" value="Mostrar personas" /> </td>
            </tr>            
        </form>
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