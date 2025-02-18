<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto J.C</title>
    <link rel="stylesheet" href="{{ asset('css\home.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>
        <h2 class="logo">Instituto J.C</h2>
        <nav class="navigation">
            <a href="{{ asset('views\index') }}">Inicio</a>
            <a href="#">Servicios</a>
            <a href="#">Contactos</a>
            <form id="logout-form" action="{{ route('logout') }}" style="display: none;">
            </form>
            <button type="button" id="logoutButton" class="btncerrar-popup">Cerrar Seccion</button>
        </nav>
    </header>
    <main>

    </main>
    <!-- Iconos de Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('js\table.js') }}"></script>
</body>

</html>
