document.addEventListener('DOMContentLoaded', function() {
    var countdownElement = document.getElementById('countdown');
    var claveInput = document.getElementById('clave-input');
    var claveExpiration = 120; // Duración en segundos (2 minutos)

    // Función para actualizar el contador regresivo
    function updateCountdown() {
        var minutes = Math.floor(claveExpiration / 60);
        var seconds = claveExpiration % 60;
        countdownElement.textContent = minutes + ':' + (seconds < 10 ? '0' : '') + seconds;

        if (claveExpiration > 0) {
            claveExpiration--;
            setTimeout(updateCountdown, 1000); // Actualizar cada segundo
        } else {
            // Clave expirada, deshabilitar el campo de entrada
            claveInput.disabled = true;
            claveInput.value = ''; // Limpiar el valor
            countdownElement.textContent = 'Tiempo Expirado, presione para darle una clave nueva'; // Mostrar mensaje de tiempo expirado

            // Agregar evento de clic para reiniciar el contador y obtener una nueva clave
            countdownElement.style.cursor = 'pointer';
            countdownElement.addEventListener('click', function() {
                obtenerNuevaClave();
            });
        }
    }

    // Función para obtener una nueva clave llamando al script PHP
    function obtenerNuevaClave() {
        fetch('GeneracionClave.php', {
            method: 'POST'
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.done) {
                claveInput.value = data.clave;
                claveExpiration = 120; // Reiniciar el contador a 2 minutos
                claveInput.disabled = false; // Habilitar el campo de entrada
                countdownElement.textContent = '02:00'; // Restaurar el texto inicial del contador
                updateCountdown(); // Iniciar el contador regresivo
            } else {
                errorMessage.innerText = data.message;
            }
        })
        .catch(error => {
            errorMessage.innerText = 'Error: ' + error.message;
        });
        
    }

    // Llamar a obtenerNuevaClave al cargar la página inicialmente
    obtenerNuevaClave();
});
