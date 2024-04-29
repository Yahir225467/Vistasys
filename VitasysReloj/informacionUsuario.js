// Función para generar números aleatorios entre un rango específico
function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Función para actualizar los datos random cada cierto tiempo
function updateRandomData() {
    // Actualizar datos de calorías
    document.getElementById("calorias").textContent = "Calorías: " + getRandomNumber(100, 500);

    // Actualizar datos de presión
    document.getElementById("presion").textContent = "Presión: " + getRandomNumber(70, 130) + "/" + getRandomNumber(40, 90);

    // Actualizar datos de temperatura
    document.getElementById("temperatura").textContent = "Temperatura: " + getRandomNumber(35, 40) + " °C";
}

// Llamar a la función inicialmente para que los datos se muestren de inmediato
updateRandomData();

// Llamar a la función cada 3 segundos para actualizar los datos
setInterval(updateRandomData, 3000);
