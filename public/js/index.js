// Obtenemos el contenedor principal que maneja el formulario de login y registro
const wrapper = document.querySelector('.wrapper');

// Botón o enlace para ir a la pantalla de inicio de sesión
const loginLink = document.querySelector('.login-link');

// Botón o enlace para ir a la pantalla de registro
const registerLink = document.querySelector('.register-link');

// Botón que abre el popup de inicio de sesión
const btnLinkPopup = document.querySelector('.btnLogin-popup');

// Icono o botón para cerrar el popup
const iconClose = document.querySelector('.icon-close');

// Cuando el usuario hace clic en "Registrarse", mostramos el formulario de registro
registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

// Cuando el usuario hace clic en "Iniciar sesión", volvemos al formulario de login
loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

// Cuando el usuario hace clic en el botón de inicio de sesión, abrimos la ventana
btnLinkPopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

// Si el usuario quiere cerrar la ventana, quitamos la clase que lo muestra
iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});

// Función para generar un nombre de usuario
function generarUsername(nombre, apellido, cedula) {
    const nombrePart = nombre.substring(0, 3).toLowerCase();
    const apellidoPart = apellido.substring(0, 1).toLowerCase();
    const cedulaPart = cedula.slice(3);
    return nombrePart + apellidoPart + cedulaPart;
}

// Manejar el registro
document.getElementById('registerForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const nombre = document.getElementById('registerNombre').value;
    const apellido = document.getElementById('registerApellido').value;
    const cedula = document.getElementById('registerCedula').value;
    const password = document.getElementById('registerPassword').value;
    const confirmPassword = document.getElementById('registerConfirmPassword').value;

    if (password !== confirmPassword) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Las contraseñas no coinciden.',
        });
        return;
    }

    const username = generarUsername(nombre, apellido, cedula);

    // Simulación de guardado en base de datos (aquí iría la lógica de Laravel)
    Swal.fire({
        icon: 'success',
        title: 'Registro exitoso',
        text: `Tu nombre de usuario es: ${username}`,
    }).then(() => {
        wrapper.classList.remove('active-popup');
        wrapper.classList.remove('active');
        // Redirigir al usuario a la página de inicio de sesión
        window.location.href = '/tablesnotes';
    });
});

// Manejar el inicio de sesión
document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const username = document.getElementById('loginUsername').value;
    const password = document.getElementById('loginPassword').value;

    // Simulación de validación (aquí iría la lógica de Laravel)
    if (username && password) {
        Swal.fire({
            icon: 'success',
            title: 'Bienvenido',
            text: `¡Hola, ${username}! Has iniciado sesión correctamente.`,
        }).then(() => {
            window.location.href = '/tablesnotes'; // Redirigir a la tabla de notas
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Credenciales incorrectas.',
        });
    }
});

