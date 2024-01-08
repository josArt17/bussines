<?php
$servername = "151.106.97.204";
$username = "u885165645_control_admin";
$password = "RSkQm5D=";
$dbname = "u885165645_control";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion exitosa";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>