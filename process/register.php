<?php
include ('../conexion/conexion.php');

function validate_user($correo){
    global $conn;

    $query = $conn->prepare("
        SELECT usuario_id FROM control_usuario WHERE usuario_correo = :correo;
    ");
    $query->execute(array(
        ":correo" => $correo
    ));
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function register_user($nombre, $correo, $password){
    global $conn;

    $id = uniqid('ART_');

    $query = $conn->prepare("
        INSERT INTO control_usuario VALUES(:id, :nombre, :correo, :password)
    ");
    $query->execute(array(
        ":id" => $id,
        ":nombre" => $nombre,
        ":correo" => $correo,
        "password" => $password
    ));
}

if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $consulta = validate_user($correo);

    if ($consulta == false) {
        register_user($nombre, $correo, $password);
    }

    header('Location: ../login.php');
}
?>