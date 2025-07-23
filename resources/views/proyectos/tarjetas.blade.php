@extends('layouts.app')

@section('title', 'Invitaciones Digitales - Cat Web')

@section('content')
<div class="container main-card text-center py-5">
    <p class="lead">Invitaciones Animadas/Flyers <span>Cat Web</span></p>
    <h6>Flyers y tarjetas animadas para eventos.</h6>
    <h6>Eventos, cumpleaños, bautismos.</h6>
    <div class="d-flex justify-content-center flex-wrap">
        <a href="https://wa.me/543834723960" target="_blank" rel="noopener noreferrer" class="mr-2 mb-2">
            <button type="button" class="btn btn-primary">
                <i class="fab fa-whatsapp"></i> Consultanos
            </button>
        </a>
        <button type="button" class="btn btn-secondary mb-2" onclick="openServicesMenu()">
            <i class="fas fa-list-alt"></i> Otros Servicios
        </button>
    </div>
</div>

<!-- Imagen ejemplo -->
<div class="container main-card my-4 p-4">
    <h5 class="mb-3 font-weight-bold">Flyers</h5>
    <img src="{{ asset('images/flyer-ejemplo.jpeg') }}" alt="Flyer invitación digital" class="img-fluid rounded shadow-sm">
</div>

    <!-- Carrusel de videos -->
    <div class="container main-card my-4 p-4">
    <h5 class="mb-3 font-weight-bold">Tarjetas Animadas</h5>
    <div id="videoCarousel" class="carousel slide" data-ride="carousel" data-touch="false" data-interval="false">
        <div class="carousel-inner rounded shadow-sm">

            <div class="carousel-item active">
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls>
                        <source src="{{ asset('videos/ejemplo-tarjeta.mp4') }}" type="video/mp4">
                        Tu navegador no soporta el video.
                    </video>
                </div>
            </div>

            <div class="carousel-item">
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls>
                        <source src="{{ asset('videos/ejemplo-tarjeta2.mp4') }}" type="video/mp4">
                        Tu navegador no soporta el video.
                    </video>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#videoCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#videoCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>
<!-- Modal Servicios -->
@include('partials.modal-servicios')
<script>
    // Al iniciar: detener autoplay en todos los videos
    document.querySelectorAll('#videoCarousel video').forEach(video => {
        video.pause();
    });

    // Escuchar cuando cambia el slide
    $('#videoCarousel').on('slide.bs.carousel', function (e) {
        // Buscar video en el slide actual y pausarlo
        let activeSlide = $(this).find('.carousel-item.active video').get(0);
        if (activeSlide) {
            activeSlide.pause();
            activeSlide.currentTime = 0;
        }
    });
</script>
@endsection