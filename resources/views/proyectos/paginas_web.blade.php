@extends('layouts.app')

@section('title', 'Sitios Web - Cat Web')

@section('content')
<div class="container main-card text-center py-5">
    <p class="lead">Sitios Web <span>Cat Web</span></p>
    <h6>Sitios para eventos especiales y comercios.</h6>
    <h6>Los sitios de eventos incluyen galeria de fotos, formularios de confirmacion, ubicacion del evento, lista de regalos.</h6>
    <h6>Adaptadas a tus necesidades.</h6>
    <h6>Incluye hosting y dominio por un año.</h6>
    <div class="d-flex justify-content-center flex-wrap">
        <a href="https://wa.me/543834534010" target="_blank" rel="noopener noreferrer" class="mr-2 mb-2">
            <button type="button" class="btn btn-primary">
                <i class="fab fa-whatsapp"></i> Consultanos
            </button>
        </a>
        <button type="button" class="btn btn-secondary mb-2" onclick="openServicesMenu()">
            <i class="fas fa-list-alt"></i> Otros Servicios
        </button>
    </div>
</div>

<!-- Carrusel para eventos especiales -->
<div class="container main-card my-4 p-4">
    <h5 class="mb-3 font-weight-bold">Sitios Web para Eventos Especiales</h5>
    <div id="eventosCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner rounded shadow-sm">
            <div class="carousel-item active">
                <img src="{{ asset('images/sitio-evento1.png') }}" class="d-block w-100 rounded" alt="Sitio web para bodas">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/sitio-evento2.jpg') }}" class="d-block w-100 rounded" alt="Sitio web para bodas2">
            </div>
        </div>
        <a class="carousel-control-prev" href="#eventosCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#eventosCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<!-- Imagen para sitios web de comercios -->
<div class="container main-card my-4 p-4">
    <h5 class="mb-3 font-weight-bold">Sitios Web para Comercios</h5>
    <img src="{{ asset('images/sitio-comercio.jpg') }}" alt="Sitio web para comercios" class="img-fluid rounded shadow-sm">
</div>

<!-- Modal Servicios -->
@include('partials.modal-servicios')
@endsection