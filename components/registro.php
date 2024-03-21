<?php
session_start(); 
require_once "conexion.php";
$conexion=conexion();

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$direccion = validate($_POST['direccion']);
	$telefono = validate($_POST['telefono']);
	$email = validate($_POST['email']);

	$user_data = 'uname='. $uname . '&direccion=' . $direccion . '&telefono=' . $telefono . '&email=' . $email;

	if (empty($uname) || empty($pass) || empty($direccion) || empty($telefono) || empty($email)) {
		header("Location: CrearCuenta.php?error=Todos los campos son obligatorios&$user_data");
	    exit();
	} else {
		// hashing the password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

	    $sql = "SELECT * FROM usuarios WHERE usuario='$uname' ";
		$result = mysqli_query($conexion, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: CrearCuenta.php?error=El nombre de usuario ya existe&$user_data");
	        exit();
		} else {
           $sql2 = "INSERT INTO usuarios(usuario, password, direccion, telefono, email) VALUES('$uname', '$pass', '$direccion', '$telefono', '$email')";
           $result2 = mysqli_query($conexion, $sql2);
           if ($result2) {
           	 header("Location: CrearCuenta.php?success=Tu cuenta ha sido creada de manera correcta");
	         exit();
           } else {
	           	header("Location: CrearCuenta.php?error=Lo sentimos, ha ocurrido un error&$user_data");
		        exit();
           }
		}
	}
	
} else {
	header("Location: ../Practica14/TiendaOnline.php");
	exit();
}
?>
