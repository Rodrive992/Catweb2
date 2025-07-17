@extends('layouts.app')

@section('title', 'Inicio - Cat Web')

@section('content')
<div class="container main-card">
    <p class="lead">Soluciones Digitales <span>Cat Web</span></p>
    <h6>Diseño web profesional, invitaciones digitales y sistemas a medida</h6>
    <h6>Para eventos, comercios e instituciones. Contáctanos para más información.</h6>
    <a href="https://wa.me/543834534010" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </button>
    </a>
</div>

<div class="container">
    <div class="services-container text-center">
        <button type="button" class="btn btn-primary services-trigger" onclick="openServicesMenu()">
            <i class="fas fa-list-alt"></i> Nuestros Servicios
        </button>

        <div class="services-modal">
            <div class="services-content">
                <span class="close-modal" onclick="closeServicesMenu()">&times;</span>
                <h2 class="modal-title">Servicios Profesionales</h2>

                <div class="services-list">
                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-laptop-code service-icon"></i>
                            <h3>Diseño Web</h3>
                        </div>
                        <p>Sitios web profesionales, responsivos y optimizados para SEO.</p>
                        <div class="service-footer">
                            <a href="/proyectos/paginas-web" class="service-link">Más información <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-envelope-open-text service-icon"></i>
                            <h3>Invitaciones Digitales</h3>
                        </div>
                        <p>Diseños exclusivos para bodas, cumpleaños y eventos corporativos.</p>
                        <div class="service-footer">
                            <a href="/proyectos/tarjetas" class="service-link">Más información <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-store service-icon"></i>
                            <h3>Sistemas Comerciales</h3>
                        </div>
                        <p>Soluciones personalizadas para gestión de negocios e instituciones.</p>
                        <div class="service-footer">
                            <a href="/proyectos/sistemas-web" class="service-link">Más información <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-section">
                    <h3>Contacto Directo</h3>
                    <div class="contact-methods">
                        <a href="https://wa.me/543834534010" target="_blank" class="btn whatsapp-btn">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <a href="tel:3834534010" class="btn phone-btn">
                            <i class="fas fa-phone"></i> Llamar
                        </a>
                    </div>
                    <p class="contact-info"><i class="fas fa-phone-alt"></i> Teléfono: 3834-534010</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection