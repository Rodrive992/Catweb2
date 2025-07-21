@extends('layouts.app')

@section('title', 'Invitaciones Digitales - Cat Web')

@section('content')
<div class="container main-card text-center py-5">
    <p class="lead">Invitaciones Animadas/Flyers <span>Cat Web</span></p>
    <h6>Flyares y tarjetas Animadas para eventos.</h6>
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
    <div id="videoCarousel" class="carousel slide" data-ride="carousel" data-touch="false">
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
                        <a href="/proyectos/tarjetas" class="service-link">Más información <i class="fas fa-chevron-right"></i></a>
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
                            <a href="/proyectos/paginas-web" class="service-link">Más información <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service-header">
                            <i class="fas fa-store service-icon"></i>
                            <h3>Sistemas Web/Comerciales-Institucionales</h3>
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
                    <p class="contact-info"><i class="fas fa-phone-alt"></i> Teléfono: 3834-723960</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection