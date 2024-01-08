<?php session_start();

date_default_timezone_set('America/Mexico_City');

if (!isset($_SESSION['correo'])) {
    header('Location: login.php');
}

?>