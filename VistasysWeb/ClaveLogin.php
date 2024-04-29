<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Seguro - Vistasys</title>
    <link rel="stylesheet" href="ClaveLoginStyle.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="menuUsuarioRegistrado.css">
</head>

<body>
    <?php session_start(); 

    if((isset($_SESSION['email'])) and (isset($_SESSION['fecha_login'])) 
    and (isset($_SESSION['username'])) and (isset($_SESSION['id_sesion']))){
        include 'menuUsuarioRegistrado.php';
    }  else{
        include 'menu.php';
    }

    include 'Restriccion.php'?>

    <!-- Main Content -->
    <div class="container">
        <h2 class="main-title">Acceso Seguro al Reloj Vistasys</h2>
        <p>Ingresa la clave para acceder al reloj inteligente Vistasys. Esta clave te permitirá utilizar todas las
            funciones del reloj.</p>

        <!-- Clave de 4 dígitos -->
        <div class="clave-container">
            <h3>Clave:</h3>
            <input type="text" id="clave-input" value="" readonly>
        </div>

        <!-- Contador regresivo -->
        <div id="contador">
            <p>La clave expirará en:</p>
            <p id="countdown"></p>
        </div>
    </div>

    <div id="errorMessage" class="error-message"></div>

    <script src="ClaveLoginScript.js"></script>
</body>

</html>
