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
</head>

<body onload="loading()">

    <div id="loader"></div>
    <div class="background-image"></div>

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