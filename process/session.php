<?php
    session_start();

    if (!isset($_SESSION['correo'])) {
        header('Location: login.php');
        exit();
    }
    
    $correo = $_SESSION['correo'];
?>