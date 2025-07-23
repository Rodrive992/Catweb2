<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cat Web - Soluciones digitales para eventos y empresas">
    <meta name="keywords" content="diseño web, invitaciones digitales, sistemas web, comercios, bodas">
    <meta name="author" content="Cat Web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cat Web - Soluciones Digitales')</title>
    <!-- CSS externo -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/catweb.css') }}">
    <!-- Estilos boostrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    .home-button {
        position: fixed;
        top: 35px;
        right: 25px;
        z-index: 1100;
        font-size: 1.5rem;
        color: #fff;
        background-color: #f06856f5;
        border-radius: 50%;
        padding: 10px 12px;
        text-align: center;
        transition: background-color 0.3s;
    }

    .home-button:hover {
        background-color: #f18767ff;
        color: #fff;
        text-decoration: none;
    }
</style>
</head>

<body onload="loading()">

    <div id="loader"></div>
    <div class="background-image"></div>

    <!-- Botón Home fijo arriba a la derecha -->
    <a href="{{ url('/') }}" class="home-button" title="Inicio">
        <i class="fas fa-home"></i>
    </a>

    <div id="page" class="animate">
        @yield('content')
    </div>

    <script>
        var time;

        function loading() {
            time = setTimeout(showPage, 1000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("page").style.display = "block";
        }

        function openServicesMenu() {
            document.querySelector('.services-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeServicesMenu() {
            document.querySelector('.services-modal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        window.onclick = function (event) {
            const modal = document.querySelector('.services-modal');
            if (event.target == modal) {
                closeServicesMenu();
            }
        }

        document.onkeydown = function (evt) {
            evt = evt || window.event;
            if (evt.key === "Escape") {
                closeServicesMenu();
            }
        };
    </script>

    @stack('scripts')
</body>

</html>