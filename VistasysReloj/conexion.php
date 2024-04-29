<?php
// Configuración de la conexión a la base de datos
$db_host = "localhost";  // Host de la base de datos
$db_user = "root";       // Nombre de usuario para la base de datos
$db_pass = "";           // Contraseña para el usuario de la base de datos
$db_database = "vistasys"; // Nombre de la base de datos

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_database", $db_user, $db_pass);
    
    // Configurar PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Configurar la codificación de caracteres a UTF-8
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    // Manejo de excepciones en caso de error de conexión
    echo "ERROR CONNECTING TO DATABASE: " . $e->getMessage();
    exit();
}
?>
