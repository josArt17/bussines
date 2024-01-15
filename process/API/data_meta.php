<?php

include ('../../conexion/conexion.php');
include ('../session.php');

function get_data($usuario){
    global $conn;

    $query = $conn->prepare("
        SELECT * FROM control_meta WHERE usuario_id = :usuario;
    ");
    $query->execute(array(
        ":usuario" => $usuario
    ));
    $data = $query->fetchAll(PDO::FETCH_ASSOC);
    $result = json_encode($data);
    return $result;
}

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

$id_usuario = get_user($correo);
$id = $id_usuario[0]['usuario_id'];
$result = get_data($id);

header('Content-Type: application/json');
echo $result;

?>