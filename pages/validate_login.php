<?php

$email = $_POST['email'];
$password = $_POST['password'];
/* crear en el modelo un método que verifque en la db
    Si el usuario existe
    puede retorna el rol del usuario
*/
$rol = 'admin';
// 1. Iniciar servicio de sesión
session_start();
// 2 . Crear la sesión
$_SESSION['user'] = 'ok'; // user = ok;
$_SESSION['rol'] = $rol;

// $pageToRedirect = "/web1_g1_test/pages/list_tasks.php";
$pageToRedirect = "/pages/list_tasks.php";
header("Location: {$pageToRedirect}");
exit;
