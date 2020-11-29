@extends('layout')
@section('content')
    <header class="text-white text-center bg-image-school">
        <div class="masthead-title">
            <h1 class="masthead-heading mb-0">Escuela de Vuelo</h1>
        </div>

    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <p class="text-lead pb-5 text-dark">
                    <strong>
                        La institución  cuenta con todo el material bibliográfico necesario para el cursado, que se le entrega al alumno, una vez efectuada su inscripción.
                    </strong>
                </p>
                <h3 class="e-lead font-weight-bold border-blue border-bottom">Cursos</h3>
            </div>
        </div>
        <!---------******-------->
        <div class="alert-secondary box-courses">
            <div class="container">
                <div class="row pt-lg-3 pb-lg-3 pt-lg-3">
                    <div class="col-lg-6 courses-title">
                        <h4 class="mt-0 mb-3">Piloto Privado de Avión (ppa)</h4>
                        <div class="border-bottom width-20px border-blue mb-4"></div>
                        <p class="text-lg-rem">Es el primer curso obligatorio para poder acceder a niveles de mayor performance. Está habilitado a pilotear una aeronave de hasta 5.900 kg.</p>
                        <p class="text-lg-rem">Durante la práctica deben completarse 40 horas de vuelo. En un mínimo de 2 meses y un máximo de dos años. De las cuales 30 horas son en doble comando y 10 de vuelo solo.</p>

                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Mínimo de edad 17 años.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Primario completo.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Poseer la certificación médica aeronáutica.</p>
                    </div>
                    <div class="col-lg-6 courses-img">
                        <div id="carouselExampleIndicatorsPPA" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicatorsPPA" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicatorsPPA" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicatorsPPA" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/assets/img/escuela_de_vuelo/ppa/ppa_1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/escuela_de_vuelo/ppa/ppa_2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/escuela_de_vuelo/ppa/ppa_3.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicatorsPPA" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicatorsPPA" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white box-courses">
            <div class="container">
                <div class="row pt-lg-3 pb-lg-3 pt-lg-3">
                    <div class="col-lg-6 courses-img">
                        <div id="carouselExampleIndicatorsPCA" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicatorsPCA" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicatorsPCA" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicatorsPCA" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/assets/img/escuela_de_vuelo/pca/pca_1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/escuela_de_vuelo/pca/pca_2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/escuela_de_vuelo/pca/pca_3.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicatorsPCA" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicatorsPCA" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 courses-title">
                        <h4 class="mt-0 mb-3">Piloto Comercial de Avión (pca)</h4>
                        <div class="border-bottom width-20px border-blue mb-4"></div>
                        <p class="text-lg-rem">
                            El Piloto Comercial de Aviones es un profesional integrante del sistema aeronáutico.
                            Podrá estar al mando en naves de pequeño porte realizando vuelos rentados y
                            como co-piloto en vuelos de líneas aéreas.
                            Al haber llegado a este nivel se encontrará encaminado hacia otros objetivos de “gran altura”,
                            entre ellos piloto aero-aplicador (fumigador) y TLA (Piloto de transporte de líneas aéreas).
                        </p>
                        <p class="text-lg-rem">Requisitos:</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Poseer la licencia de piloto privado.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Tener 18 años de edad.</p>
                        <p class="text-lg-rem">
                            <i class="fas fa-angle-right mr-3"></i>
                            Ser capaz de leer, hablar, escribir y entender correctamente el idioma español.
                        </p>
                        <p class="text-lg-rem">
                            <i class="fas fa-angle-right mr-3"></i>
                            Haber completado y aprobado el Ciclo de Educación Polimodal, estudios secundarios,
                            o su equivalente,reconocidos por el Ministerio de Educación y/o autoridad competente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert-secondary box-courses">
            <div class="container">
                <div class="row pt-lg-3 pb-lg-3 pt-lg-3">
                    <div class="col-lg-6 courses-title">
                        <h4 class="mt-0 mb-3">Piloto Aeroaplicador</h4>
                        <div class="border-bottom width-20px border-blue mb-4"></div>
                        <p class="text-lg-rem">Licencia habilitante para el vuelo de aviones agricolas, permite el trabajo en fumigacion entre otros.</p>
                        <p class="text-lg-rem">Requisitos:</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Ser titular de una licencia profesional de piloto (Piloto comercial de avión o helicóptero, o Piloto Comercial de Primera Clase de Avión o de transporte de línea aérea de avión o helicóptero).</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Tener 21 años de edad.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Poseer la Certificación Médica Aeronáutica.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Poseer las horas de vuelo exigidas para la Licencia de Aeroaplicador para cada categoría de aeronave.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Aprobar las exigencias teóricas establecidas por la Autoridad Aeronáutica en el curso de instrucción reconocida para esta licencia en la categoría avión o helicóptero.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Aprobar ante un Inspector de Vuelo el examen de vuelo de las áreas operativas establecidas en los estándares para la realización de Exámenes Prácticos en Aeronaves.</p>
                    </div>
                    <div class="col-lg-6 courses-img">
                        <img src="/assets/img/escuela_de_vuelo/aeroaplicador.JPG" class="w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white box-courses">
            <div class="container">
                <div class="row pt-lg-3 pb-lg-3 pt-lg-3">
                    <div class="col-lg-6 courses-img">
                        <img src="/assets/img/escuela_de_vuelo/p_instructor.jpg" class="w-100" alt="...">
                    </div>
                    <div class="col-lg-6 courses-title">
                        <h4 class="mt-0 mb-3">Piloto instructor</h4>
                        <div class="border-bottom width-20px border-blue mb-4"></div>
                        <p class="text-lg-rem">Requisitos:</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Ser titular de la licencia de Piloto Comercial, Piloto Comercial de Primera Clase de Avión o Piloto de Transporte de Línea Aérea o Piloto de Planeador.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Tener 21 años de edad.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Ser capaz de leer, hablar, escribir y entender correctamente el idioma español.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Haber aprobado el Ciclo de Educación Polimodal o estudios secundarios completos, o equivalente reconocido por la autoridad competente.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Poseer el Certificado de Habilitación Psicofisiológica vigente, correspondiente a la licencia de piloto profesional o de planeador de la cual es titular.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Aprobar las exigencias establecidas en el curso teórico de Instrucción Reconocida para la licencia de Instructor de Vuelo.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Poseer las horas de vuelo exigidas para cada licencia de Instructor de Vuelo por categoría de aeronave.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Aprobar ante Inspector de Vuelo designado por la Autoridad Aeronáutica competente, un examen teórico de conocimientos y la prueba de pericia de las áreas de instrucción establecida en los Estándares para la realización de Exámenes Prácticos en Aeronaves.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert-secondary box-courses">
            <div class="container">
                <div class="row pt-lg-3 pb-lg-3 pt-lg-3">
                    <div class="col-lg-6 courses-title">
                        <h4 class="mt-0 mb-3">Piloto remolcador</h4>
                        <div class="border-bottom width-20px border-blue mb-4"></div>
                        <p class="text-lg-rem">Requisitos</p>

                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Actividad ideal para sumar horas para todos aquellos pilotos que quieran hacer la licencia comercial.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Tener la licencia de piloto privado, más las 25 horas de vuelo solo al mando. </p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Poseer certificación médica aeronáutica.</p>
                    </div>
                    <div class="col-lg-6 courses-img">
                        <img src="/assets/img/escuela_de_vuelo/remolcador.jpg" class="w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white box-courses">
            <div class="container">
                <div class="row pt-lg-3 pb-lg-3 pt-lg-3">
                    <div class="col-lg-6 courses-img">
                        <img src="/assets/img/escuela_de_vuelo/planeador.jpg" class="w-100" alt="...">
                    </div>
                    <div class="col-lg-6 courses-title">
                        <h4 class="mt-0 mb-3">Piloto de planeador</h4>
                        <div class="border-bottom width-20px border-blue mb-4"></div>
                        <p class="text-lg-rem">Requisitos:</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Tener 16 años de edad.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Haber aprobado la Educación General Básica
                            (EGB) o ciclo primario completo o equivalente.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Poseer una Certificación Médica Aeronáutica.
                        </p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Aprobar las exigencias teóricas referidas a
                            los conocimientos aeronáuticos del Curso de Instrucción Reconocida y de la experiencia de vuelo
                            establecida en el Manual de Sistema de Envuelo por Torno para Planeadores que se establecen en
                            la parte del Curso Básico para Piloto de Planeador.</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Aprobar el examen teórico de conocimientos
                            aeronáuticos y práctico de vuelo ante un Inspector de Vuelo designado por la Autoridad Aeronáutica
                            competente, de acuerdo a los Estándares para la Realización de Exámenes Prácticos en Aeronaves en el
                            sistema de envuelo en el que haya realizado el curso.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert-secondary box-courses">
            <div class="container">
                <div class="row pt-lg-3 pb-lg-3 pt-lg-3">
                    <div class="col-lg-6 courses-title">
                        <h4 class="mt-0 mb-3">Nuestra flota</h4>
                        <div class="border-bottom width-20px border-blue mb-4"></div>
                        <p class="text-lg-rem">Contamos con un cessna c 150 conocido por ser el monomotor más eficiente, fiable y
                            utilizado en el mundo para la formación de pilotos y tildados por muchos como
                            <strong>“aviòn escuela”</strong></p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Motor continental 100hp</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Ala alta</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Tren triciclo</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Autonomía 4 hs de vuelo</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Equipamiento vor transponder</p>
                        <p class="text-lg-rem"><i class="fas fa-angle-right mr-3"></i>Capacidad 2 pasajeros con capacidad de equipaje</p>
                    </div>
                    <div class="col-lg-6 courses-img">
                        <img src="/assets/img/escuela_de_vuelo/flota.jpg" class="w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white box-courses">
            <div class="container">
                <div class="row pt-lg-3 pb-lg-3 pt-lg-3">
                    <div class="col-lg-6 courses-img">
                        <div id="carouselExampleIndicatorsALOJ" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicatorsALOJ" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicatorsALOJ" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicatorsALOJ" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/assets/img/escuela_de_vuelo/alojamiento/a_1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/escuela_de_vuelo/alojamiento/a_2.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/escuela_de_vuelo/alojamiento/a_3.jpeg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicatorsALOJ" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicatorsALOJ" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 courses-title">
                        <h4 class="mt-0 mb-3">Alojamiento para pilotos</h4>
                        <div class="border-bottom width-20px border-blue mb-4"></div>
                        <p class="text-lg-rem">Contamos con una casa dentro del predio del Aeroclub , cómoda con servicio de wifi,
                            televisión por cable, calefacción y servicio de limpieza</p>
                        <p class="text-lg-rem">En caso de querer utilizar las instalaciones se deberá dar aviso para  coordinar
                            la estadía, y hacerla lo mejor posible.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="alert-secondary">
        <div class="container">
            <div class="row pt-4">
                <h3 class="e-lead font-weight-bold border-blue border-bottom">Staff</h3>
            </div>
        </div>
    </section>
    <section class="media alert-secondary">
        <div class="pl-5 pr-5">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col mb-3">
                    <div class="card">
                        <img src="/assets/img/escuela_de_vuelo/staff/Presidente del aeroclub- Eduardo Uliana.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Eduardo Uliana</h5>
                            <p class="card-text">Presidente del aeroclub</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card">
                        <img src="/assets/img/escuela_de_vuelo/staff/instructor Cesar Silva.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cesar Silva</h5>
                            <p class="card-text">Instructor</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card">
                        <img src="/assets/img/escuela_de_vuelo/staff/Instructor Mario Bernaldi1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mario Bernaldi</h5>
                            <p class="card-text">Instructor</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card">
                        <img src="/assets/img/escuela_de_vuelo/staff/julian.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Julián</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="media alert-secondary">
        <div class="pl-5 pr-5 pb-5">
            <div class="card text-white">
                <img src="/assets/img/escuela_de_vuelo/staff/STAFF.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Staff Turismo</h5>
{{--                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
{{--                    <p class="card-text">Last updated 3 mins ago</p>--}}
                </div>
            </div>
        </div>
    </section>
@endsection

