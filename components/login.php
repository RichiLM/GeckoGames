<?php
session_start();
require_once "conexion.php";
$conexion = conexion();

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname) || empty($pass)) {
        // Redireccionar con mensaje de error si el usuario o la contraseña están vacíos
        header("Location: CrearCuenta.php?error=Usuario y contraseña son requeridos");
        exit();
    } else {
        // hashing de la contraseña
        $pass = md5($pass);

        // Consultar la base de datos para verificar las credenciales
        $sql = "SELECT * FROM usuarios WHERE usuario='$uname' AND password='$pass'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) === 1) {
            // Iniciar sesión y redireccionar a la página deseada
            $_SESSION['usuario'] = $uname;
            header("Location: Perfil.php");
            exit();
        } else {
            // Redireccionar con mensaje de error si las credenciales son incorrectas
            header("Location: CrearCuenta.php?error=Usuario o contraseña incorrectos");
            exit();
        }
    }
} else {
    // Redireccionar si no se enviaron los datos del formulario
    header("Location: CrearCuenta.php");
    exit();
}
?>

