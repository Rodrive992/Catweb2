@extends('layouts.app')

@section('title', 'Invitaciones Digitales - Cat Web')

@section('content')
<div class="container main-card text-center py-5">
    <p class="lead">Invitaciones Digitales <span>Cat Web</span></p>
    <h6>Diseños exclusivos y personalizados para cumpleaños y eventos especiales</h6>
    <h6>Elegantes, interactivas y adaptadas a cualquier dispositivo.</h6>
    <a href="https://wa.me/543834534010" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-primary mt-3">
            <i class="fab fa-whatsapp"></i> Consultanos
        </button>
    </a>
</div>

<!-- Video ejemplo -->
<div class="container main-card my-4 p-4">
    <h5 class="mb-3 font-weight-bold">Tarjetas Animadas</h5>
    <div class="embed-responsive embed-responsive-16by9 rounded shadow-sm">
        <video controls>
            <source src="{{ asset('videos/ejemplo-tarjeta.mp4') }}" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
    </div>
</div>


<!-- Imagen ejemplo -->
<div class="container main-card my-4 p-4">
    <h5 class="mb-3 font-weight-bold">Flyers</h5>
    <img src="{{ asset('images/flyer-ejemplo.jpeg') }}" alt="Flyer invitación digital" class="img-fluid rounded shadow-sm">
</div>


<!-- Descripción 
<div class="container main-card text-center my-4 p-4">
    <h4 class="mb-3">Tarjetas web para bodas</h4>
    <p>
        Ofrecemos tarjetas web interactivas para bodas: incluyen toda la información del evento, 
        confirmación de asistencia en línea, mapas, galería de fotos y personalización con tu estilo.
    </p>
    <p>
        Compartí fácilmente el enlace de tu invitación con tus invitados y disfrutá de una presentación moderna y práctica.
    </p>
    <a href="https://wa.me/543834534010" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-primary mt-3">
            <i class="fab fa-whatsapp"></i> Pedí tu tarjeta ahora
        </button>
    </a>
</div> -->
@endsection