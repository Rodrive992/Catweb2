@extends('layouts.app')

@section('title', 'Inicio - Cat Web')

@section('content')
<div class="container main-card text-center py-5">
    <p class="lead">Soluciones Digitales <span>Cat Web</span></p>
    <h6>Diseño web profesional, invitaciones digitales y sistemas a medida</h6>
    <h6>Para eventos, comercios e instituciones. Contáctanos para más información.</h6>

    <!-- "Nuestros Servicios"  -->
    <button type="button" class="btn btn-primary mt-2" onclick="openServicesMenu()">
        <i class="fas fa-list-alt"></i> Nuestros Servicios
    </button>
</div>

<!-- "Consultanos" -->
<div class="text-center my-3">
    <a href="https://wa.me/543834534010" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> Consultanos
        </button>
    </a>
</div>

<!-- Modal Servicios como el de tarjetas animadas -->
@include('partials.modal-servicios')
@endsection