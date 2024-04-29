<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistasys - Reloj Inteligente</title>
    <link rel="stylesheet" href="LyRStyle.css">
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
    } ?>

    <!-- Main Content -->
    <div class="container">
        <h2 class="main-title">Vistasys - Tu compañero inteligente</h2>
        <div id="content">
            <p>Descubre la nueva era de la tecnología de relojes inteligentes con Vistasys. Mantente conectado y en
            control de tu vida diaria.</p>

            <!-- Formulario de Inicio de Sesión -->
            <div id="login-form" class="form">
                <h3>Iniciar sesión</h3>
                <form id="login-form-content">
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Iniciar sesión</button>
                </form>
                <p id="register-link" class="link-text">¿No tienes una cuenta? <a href="#" onclick="showRegisterForm()">Registrarse</a></p>
            </div>

            <!-- Formulario de Registro -->
            <div id="register-form" class="form" style="display: none;">
                <h3>Regístrate ahora</h3>
                <form id="register-form-content">
                    <div class="form-group">
                        <label for="username">Nombre de usuario (máximo 15 caracteres):</label>
                        <input type="text" id="username" name="username" maxlength="15" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" id="register-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña (8-16 caracteres):</label>
                        <input type="password" id="register-password" name="password" minlength="8" maxlength="16" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirmar contraseña:</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    <div class="form-group">
                        <label for="profile-pic">Foto de perfil:</label>
                        <input type="file" id="profile-pic" name="profile-pic" accept="image/*" required>
                    </div>
                    <button type="submit">Registrarse</button>
                </form>
                <p id="login-link" class="link-text">¿Ya tienes una cuenta? <a href="#" onclick="showLoginForm()">Iniciar sesión</a></p>
            </div>

            <!-- Error Message -->
            <div id="error-message" class="error-message"></div>
        </div>
    </div>

    <script src="LyRScript.js"></script>
</body>

</html>
