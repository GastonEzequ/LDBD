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
	$nombre = $_POST["txtusuario"];
	$pass = $_POST["txtpassword"];
	$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."' and permiso = 3");
	$nr = mysqli_num_rows($query);
	switch($nr){
		case 1:
			echo"<script>window.location='bienvenida3.html'</script>";
		case 0: 
			$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."' and permiso = 2");
			$nr = mysqli_num_rows($query);
				switch($nr){
				case 1:
					echo"<script>window.location='bienvenida2.html'</script>";
				case 0:
					$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."' and permiso = 1");
					$nr = mysqli_num_rows($query);
					switch($nr){
						case 1:
							echo"<script>window.location='bienvenida1.html'</script>";
						case 0:
							echo "<script> alert('Usuario no registrado');window.location= 'login.html' </script>";
					}
				}
			}			