<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VITASYS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="menuUsuarioRegistrado.css">
</head>
<body>
  <header>
  <?php session_start(); 

  if((isset($_SESSION['email'])) and (isset($_SESSION['fecha_login'])) 
  and (isset($_SESSION['username'])) and (isset($_SESSION['id_sesion']))){
    include 'menuUsuarioRegistrado.php';
  }  else{
    include 'menu.php';
  } ?>

      <div class="container mt-4">
        <div class="card">
          <img src="imagenes/Captura de pantalla 2024-04-28 225008.png" class="card-img-top" alt="Imagen de un corazón con ECG">
          <div class="card-body">
            <h5 class="card-title">VITASYS</h5>
            <p class="card-text">Las Enfermedades No Transmisibles (ENT) constituyen una de las principales causas de morbilidad, discapacidad y mortalidad en todo el mundo. Existen múltiples personas que padecen de enfermedades crónicas, al año estas enfermedades son responsables de 41 millones de muertes a nivel mundial; lo que las sitúa como la principal causa de muerte y discapacidad en el mundo..</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <div class="row">
          <!-- Tarjeta 1 -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img src="imagenes/Captura de pantalla 2024-04-28 223915.png" class="card-img-top" alt="Monitoreo médico">
              <div class="card-body">
                <h5 class="card-title">¿Qué hace VitaSys?</h5>
                <p class="card-text">Monitorear signos vitales a través de una aplicación que pueda otorgar un diagnóstico constante sobre los síntomas de cada usuario.</p>
              </div>
            </div>
          </div>
          <!-- Tarjeta 2 -->
          <!-- Asegúrate de que la clase 'mb-4' está en ambas columnas para agregar el margen inferior -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img src="imagenes/Captura de pantalla 2024-04-28 222816.png" class="card-img-top" alt="Reloj inteligente VitaSys">
              <div class="card-body">
                <h5 class="card-title">¿Cómo lo hace VitaSys?</h5>
                <p class="card-text">Mediante un reloj inteligente, este dispositivo se encarga de supervisar constantemente los signos vitales de las personas, y proporciona alarmas cuando los signos son inestables.</p>
              </div>
            </div>
          </div>
          <!-- Si hay una tercera tarjeta, añádela aquí -->
          <!-- Tarjeta 3 -->
          <!-- Asegúrate de que la clase 'mb-4' está en ambas columnas para agregar el margen inferior -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img src="imagenes/Captura de pantalla 2024-04-28 224240.png" class="card-img-top" alt="Reloj inteligente VitaSys">
              <div class="card-body">
                <h5 class="card-title">Objetivo</h5>
                <p class="card-text">Tiene el objetivo de reducir el índice de muertes de dichas enfermedades no terminales , y mejorar la vida de las personas que padecen algun tipo de enfermedad no trasmisible.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      
  </header>
  <footer>
    <!-- Footer content -->
  </footer>
  
  <script src="script.js"></script>
   <!-- Opcional: Incluir JavaScript de Bootstrap -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
