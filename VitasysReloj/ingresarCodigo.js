let currentDigit = 1; // Inicializar con el primer número

function changeDigit(direction) {
    // Aumentar o disminuir el número actual
    currentDigit += direction;

    // Mantener el número entre 0 y 9
    if (currentDigit > 9) {
        currentDigit = 0;
    } else if (currentDigit < 0) {
        currentDigit = 9;
    }

    // Actualizar el número mostrado
    document.querySelector('.current-digit').innerText = currentDigit;
}


function agregarCodigo() {
    // Obtener el valor del número ingresado
    var numero = document.querySelector('.current-digit').innerText;
    
    // Obtener todas las casillas de NIP
    var casillas = document.querySelectorAll('.nip-input');

    // Buscar la próxima casilla vacía y llenarla con el número
    for (var i = 0; i < casillas.length; i++) {
        if (casillas[i].value === '') {
            casillas[i].value = numero;
            break;
        }
    }

    // Verificar si se han ingresado los 4 dígitos
    var nipCompleto = true;
    for (var i = 0; i < casillas.length; i++) {
        if (casillas[i].value === '') {
            nipCompleto = false;
            break;
        }
    }

    // Si se han ingresado los 4 dígitos, enviarlos al script PHP
    if (nipCompleto) {
        // Obtener el código NIP completo
        var nipCompletoString = Array.from(casillas).map(input => input.value).join('');

        // Crear un objeto FormData y agregar el código NIP completo
        var formData = new FormData();
        formData.append('codigo', nipCompletoString);

        // Realizar una solicitud POST al script PHP
        fetch('ingresarCodigo.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data === 'Bienvenido') {
                window.location.href = 'informacionUsuario.php';
            } else {
                window.location.href = 'codigoIncorrecto.html';
            }
        })
        .catch(error => {
            errorMessage.innerText = 'Error: ' + error;
        });
    }
}


function borrarNumero() {
    // Obtener todas las casillas de NIP
    var casillas = document.querySelectorAll('.nip-input');

    // Borrar el contenido de la última casilla no vacía
    for (var i = casillas.length - 1; i >= 0; i--) {
        if (casillas[i].value !== '') {
            casillas[i].value = '';
            break;
        }
    }
}

