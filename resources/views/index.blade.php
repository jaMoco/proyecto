<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto J.C - Registro e Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>
        <h2 class="logo">Instituto J.C</h2>
        <nav class="navigation">
            <a href="#">Inicio</a>
            <a href="#">Servicios</a>
            <a href="#">Contactos</a>
            <button class="btnLogin-popup">Inicio</button>
        </nav>
    </header>
    
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <!-- Formulario de Inicio de Sesión -->
        <div class="form-box login">
            <h2>Inicio</h2>
            <form method="POST" action="{{ route('login') }}" id="loginForm">
            @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="loginUsername" required>
                    <label>Nombre de Usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="loginPassword" required>
                    <label>Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Recuérdame</label>
                    <a href="#">¿Olvidó su contraseña?</a>
                </div>
                <button type="submit" class="btn">Iniciar</button>
                <div class="login-register">
                    <p>¿No tienes una cuenta? <a href="#" class="register-link">Regístrate</a></p>
                </div>
            </form>
        </div>
        <!-- Formulario de Registro -->
        <div class="form-box register">
            <h2>Regístrate</h2>
            <form method="POST" action="{{ route('register') }}" id="registerForm" >
                @csrf <!-- Token CSRF para protección -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="registerNombre" required minlength="2" maxlength="15">
                    <label>Nombre</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="registerApellido" required minlength="2" maxlength="15">
                    <label>Apellido</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="registerEmail" required>
                    <label>Correo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="tel" id="registerTelefono" required minlength="11" maxlength="11">
                    <label>Teléfono</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="card"></ion-icon></span>
                    <input type="number" id="registerCedula" required minlength="7" maxlength="8">
                    <label>Cédula</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="registerPassword"  required>
                    <label>Contraseña</label>
                    <span class="error" id="error-message"></span>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="registerConfirmPassword" required>
                    <label>Confirmar Contraseña</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Acepto todos los Términos y Servicios</label>
                </div>
                <button type="submit" class="btn">Registrar</button>
                <div class="login-register">
                    <p>¿Ya tienes una cuenta? <a href="#" class="login-link">Iniciar</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="ini">
        <div class="welcome-section">
            <h3>Bienvenidos</h3>
            <p>al Portal de Estudiantes del Instituto J.C</p>
        </div>
            <div class="descrip">
                <p>Aquí, cada estudiante puede acceder de manera fácil y rápida a sus calificaciones y mantenerse al día con su rendimiento académico. Nuestro objetivo es ofrecerte una plataforma intuitiva donde puedas consultar tus notas, descargar reportes y estar informado sobre todas tus evaluaciones.</p>
                <p>Estamos comprometidos con tu éxito y creemos que la transparencia y el acceso a la información son clave para tu desarrollo. ¡Explora tu portal y descubre todo lo que tenemos para ofrecerte!</p>
                <p>Las calificaciones se mostrarán luego de iniciar sesión</p>
            </div>
        </div>
    </div>
    <!-- Iconos de Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('js\index.js') }}"></script>

</body>
</html>
