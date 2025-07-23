@extends('layouts.app')

@section('title', 'Sistemas Web - Cat Web')

@section('content')
<div class="container main-card text-center py-5">
    <p class="lead">Sistemas Web <span>Cat Web</span></p>
    <h6>Sistemas web para instituciones y comercios.</h6>
    <h6>Gestión de bases de datos y sistemas eCommerce.</h6>
    <h6>Incluye hosting y dominio.</h6>
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
<!-- Imagen 1: Sistema de RRHH -->
<div class="container main-card my-4 p-4">
    <h5 class="mb-3 font-weight-bold">Sistema de Recursos Humanos</h5>
    <img src="{{ asset('images/sistemas-web1.jpg') }}" alt="Sistema de Recursos Humanos" class="img-fluid rounded shadow-sm">
</div>

<!-- Imagen 2: Sistema Comercio / eCommerce --> q
<div class="container main-card my-4 p-4">
    <h5 class="mb-3 font-weight-bold">Sistema de Comercio y Compras Online</h5>
    <img src="{{ asset('images/sistemas-web2.jpg') }}" alt="Sistema de Comercio y Compras Online" class="img-fluid rounded shadow-sm">
</div>

<!-- Modal Servicios -->
@include('partials.modal-servicios')
@endsection