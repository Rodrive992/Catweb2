@extends('layouts.app')

@section('title', 'Inicio - Cat Web')

@section('content')
<div class="container main-card text-center py-5">
    <p class="lead">Soluciones Digitales <span>Cat Web</span></p>
    <h6>Diseño web profesional, invitaciones digitales y sistemas a medida</h6>
    <h6>Para eventos, comercios e instituciones. Contáctanos para más información.</h6>

    <!-- "Nuestros Servicios" ADENTRO -->
    <button type="button" class="btn btn-primary mt-2" onclick="openServicesMenu()">
        <i class="fas fa-list-alt"></i> Nuestros Servicios
    </button>
</div>

<!-- "Consultanos" AFUERA -->
<div class="text-center my-3">
    <a href="https://wa.me/543834534010" target="_blank" rel="noopener noreferrer">
        <button type="button" class="btn btn-primary">
            <i class="fab fa-whatsapp"></i> Consultanos
        </button>
    </a>
</div>

<!-- Modal Servicios como el de tarjetas animadas -->
<div class="container">
    <div class="services-container text-center">        
        <div class="services-modal" id="servicesModal" style="display: none; position: fixed; z-index: 1050; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.5);">
            <div class="services-content" style="background: #fff; margin: 5% auto; padding: 20px; border-radius: 10px; max-width: 600px; position: relative;">
                <span class="close-modal" onclick="closeServicesMenu()" style="position: absolute; top: 10px; right: 20px; font-size: 30px; cursor: pointer;">&times;</span>
                <h2 class="modal-title">Servicios</h2>               

                <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-envelope-open-text service-icon"></i>
                            <h3>Invitaciones Animadas/Flyres</h3>
                        </div>
                        <p>Diseños exclusivos para cumpleaños y eventos corporativos.</p>
                        <div class="service-footer">
                            <a href="/servicios/tarjetas" class="service-link">Más información <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="services-list">
                        <div class="service-item">
                            <div class="service-header">
                                <i class="fas fa-laptop-code service-icon"></i>
                                <h3>Sitios Web/Comercios-Bodas-Eventos</h3>
                            </div>
                            <p>Sitios web para comercios y eventos especiales.</p>
                            <div class="service-footer">
                                <a href="/servicios/paginas-web" class="service-link">Más información <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="service-header">
                                <i class="fas fa-store service-icon"></i>
                                <h3>Sistemas Web/Comerciales-Institucionales</h3>
                            </div>
                            <p>Soluciones personalizadas para gestión de negocios e instituciones.</p>
                            <div class="service-footer">
                                <a href="/servicios/sistemas-web" class="service-link">Más información <i class="fas fa-chevron-right"></i></a>
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
                        <p class="contact-info"><i class="fas fa-phone-alt"></i> Teléfono: 3834-723960</p>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection