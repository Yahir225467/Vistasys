<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion del usuario</title>
    <link rel="stylesheet" href="informacionUsuario.css">
</head>
<body>

    <div class="background"></div> <!-- Agregamos un div para el fondo animado -->

    <div class="container">
        <div class="smartwatch">
            <?php include 'ShowUser.php'?>
            <div class="additional-info">
                <p id="calorias">Calorías: 0</p>
                <p id="presion">Presión: 0</p>
                <p id="temperatura">Temperatura: 0</p>
            </div>
        </div>
    </div>

    <script src="informacionUsuario.js"></script> <!-- Enlazamos el archivo script.js -->
    
    
</body>
</html>