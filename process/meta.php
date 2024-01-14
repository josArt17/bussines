<?php

include ('session.php');
include ('../conexion/conexion.php');

function get_user($correo_usuario){
    global $conn;

    $query = $conn->prepare("
        SELECT usuario_id FROM control_usuario WHERE usuario_correo = :correo
    ");

    $query->execute(array(
        ":correo" => $correo_usuario
    ));
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function register_meta($nombre, $inicio, $fin, $monto, $id_usuario){
    global $conn;

    $id_key = uniqid('ART_');

    $query = $conn->prepare("
        INSERT INTO control_meta VALUES (:meta_id, :nombre, :inicio, :fin, :objetivo, :estatus, :usuario_id);
    ");
    $query->execute(array(
        ":meta_id" => $id_key,
        ":nombre" => $nombre,
        ":inicio" => $inicio,
        ":fin" => $fin,
        ":objetivo" => $monto,
        ":estatus" => 'activo',
        ":usuario_id" => $id_usuario
    ));
}


if (isset($_POST['nombre-meta'])) {
    
    $nombre = $_POST['nombre-meta'];
    $inicio = $_POST['inicio-meta'];
    $fin = $_POST['fin-meta'];
    $monto = $_POST['monto-meta'];

    $id_usuario = get_user($correo);
    $id = $id_usuario[0]['usuario_id'];

    register_meta($nombre, $inicio, $fin, $monto, $id);
    header('Location: ../index.php');
} 


?>