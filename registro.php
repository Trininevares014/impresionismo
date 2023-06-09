<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['mail'];
	$usuario = $_POST['usuario'];
	$clave = md5($_POST['clave']);


	include("conexion.php");


	$consulta = mysqli_query($conexion, "INSERT INTO usuarios  VALUES (0,'$usuario', '$clave','$nombre','$apellido','$email')");


	header("Location:form_login.php");

?>	
    

</body>
</html>