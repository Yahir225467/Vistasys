<?php
include 'conexion.php';
session_start();

$sql = "SELECT id FROM users WHERE email = '".$_SESSION['email']."' AND username = '".$_SESSION['username']."'";
$resultado = $pdo->query($sql);

if ($resultado->rowCount() < 1) {
    $data = array('done' => false, 'message' => "No se inicio sesion correctamente, vuelva a logearse");
	Autentificacion($data);
}
else{
    $userId = $resultado->fetch(PDO::FETCH_ASSOC);

    do {
        // Generar un número aleatorio de 4 dígitos
        $clave = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);

        // Verificar si la clave ya existe en la base de datos
        $sql2 = "SELECT clave FROM users WHERE clave = '".$clave."'";
        $resultado2 = $pdo->query($sql2);

    } while ($resultado2->rowCount() > 0); // Repetir hasta que se genere una clave única

    try{
        // Asignar la clave al usuario utilizando el procedimiento almacenado
        // Definir la llamada al procedimiento almacenado con parámetros
        $sql3 = "CALL SetClave(:userId, :clave)";

        // Preparar la consulta
        $stmt = $pdo->prepare($sql3);

        // Asignar valores a los parámetros
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':clave', $clave, PDO::PARAM_INT);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $data = array('done' => true, 'message' => "Bienvenido", 'clave' => $clave);
	    Autentificacion($data);
        
    } catch (PDOException $e){
        $data = array('done' => false, 'message' => $e->getMessage());
	    Autentificacion($data);
    }
}

function Autentificacion($data){
	Header('Content-Type: application/json');
	echo json_encode($data);
	exit();
}

?>