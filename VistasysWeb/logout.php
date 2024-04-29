<?php
// Iniciar la sesión para poder manejarla
session_start(); 

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión para asegurar que el usuario se desloguea completamente
session_destroy();

// Cerrar la conexión PDO a la base de datos (esto no se hace explícitamente aquí, pero se asume por el comentario)

// Redirigir al usuario a la página de login y registro
header("Location: LyR.php");
?>
