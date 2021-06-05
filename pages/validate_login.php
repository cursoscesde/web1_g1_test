<?php

$email = $_POST['email'];
$password = $_POST['password'];
/* crear en el modelo un método que verifque en la db
    Si el usuario existe
    puede retorna el rol del usuario
*/
$rol = 'invitado';
// 1. Iniciar servicio de sesión
session_start();
// 2 . Crear la sesión
$_SESSION['user'] = 'ok'; // user = ok;
$_SESSION['rol'] = $rol;

$pageToRedirect = "/pages/list_tasks.php";
header("Location: {$pageToRedirect}");
exit;
