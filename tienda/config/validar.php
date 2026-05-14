<?php

session_start();

include("./config/conexion.php");

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios 
        WHERE correo='$correo' 
        AND password='$password'";

$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){

    $usuario = $resultado->fetch_assoc();

    $_SESSION['id_usuario'] = $usuario['id_usuario'];
    $_SESSION['nombre'] = $usuario['nombre'];

    header("Location: ./forms/inicio.html");

}else{

    echo "
    <script>
        alert('Correo o contraseña incorrectos');
        window.location='index.html';
    </script>
    ";

}

?>