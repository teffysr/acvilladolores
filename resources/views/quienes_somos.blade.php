@extends('layout')
@section('content')
    <header class="text-white text-center bg-image-contact">
        <div id="carouselExampleIndicators" class="carousel slide mt-120" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/quienes_somos/portada0_.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/quienes_somos/portada0_1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/quienes_somos/portada0_2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/quienes_somos/portada0_4.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/quienes_somos/portada0_5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/quienes_somos/portada0_6.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio">
        <div class="container">
            <div class="row">
                <p class="text-lead">
                    El Aeroclub Villa Dolores fue fundado en el año 1949 y es una asociación sin fines de lucro que está  constituida por una comisión directiva que trabaja a d honorem solamente por la vocación y la pasión por la aeronáutica.
                </p>
                <p class="text-lead">
                    Cuenta con su propia escuela de vuelo habilitada que tiene como objetivo lograr la excelencia académica en formación de profesionales , sin dejar de lado el ambiente familiar y camaradería aeronáutico que nos caracteriza, con su excelente clima cordial y de amistad de los lugareños
                </p>
            </div>
        </div>
    </section>
@endsection

