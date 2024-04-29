<?php
// Comprobación de las variables de sesión necesarias para acceder a la página
if ((!isset($_SESSION['email'])) && (!isset($_SESSION['fecha_login'])) 
    && (!isset($_SESSION['username'])) && (!isset($_SESSION['id_sesion']))) {
    // Mensaje de error si el usuario intenta acceder sin haber iniciado sesión
    echo '<h1 style="color: red;">"No puede acceder a esta página ya que no se ha iniciado sesión";</h1>'; 
    exit(); // Finaliza la ejecución del script
} else {
    // Incluye el archivo de conexión a la base de datos
    include 'conexion.php';
    
    // Intenta ejecutar una consulta SQL
    try {
        // Consulta que busca una sesión específica en la base de datos
        $sql = "SELECT * FROM sessions WHERE id = '".$_SESSION['id_sesion']."' AND email = '".$_SESSION['email']."' 
                AND fecha_login = '".$_SESSION['fecha_login']."'";
        $resultado = $pdo->query($sql); // Ejecución de la consulta

        // Comprobación de que la consulta retornó resultados
        if (!($resultado->rowCount() > 0)) {
            // Mensaje de error si no se encuentran datos que coincidan con la sesión
            echo '<h1 style="color: red;">"Se ha logeado de una manera incorrecta o su sesión no se ha 
                  podido iniciar de la manera que debería, vuelva a logearse e intente de nuevo";</h1>'; 
            exit(); // Finaliza la ejecución del script
        }
    } catch (PDOException $e) {
        // Captura de errores en la consulta a la base de datos
        echo '<h1 style="color: red;">"Error en la consulta con la base de datos, cierre sesión en 
              caso de que esté iniciada y reinicie la página";</h1>';
        exit(); // Finaliza la ejecución del script
    }
}
?>