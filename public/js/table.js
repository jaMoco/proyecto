// Verifica si el usuario está autenticado (aquí iría tu lógica de autenticación)
const isAuthenticated = false; // Cambia esto según tu lógica

const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnLinkPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const logoutButton = document.getElementById('logoutButton');

if (isAuthenticated) {
    // Mostrar el botón de "Cerrar Sesión"
    logoutButton.style.display = 'block';
}

document.addEventListener('DOMContentLoaded', (event) => {
    const logoutButton = document.getElementById('logoutButton');

    logoutButton.addEventListener('click', (e) => {
        e.preventDefault();
        document.getElementById('logout-form').submit();
    });
});