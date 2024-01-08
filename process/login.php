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

if (isset($_POST['correo'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $validate = validate_user($correo);
    if ($validate != false) {
        $_SESSION['correo'] = $correo;
        
        header('Location: index.php');
    }
}

?>