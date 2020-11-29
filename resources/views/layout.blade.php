<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ACVillaDolores</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/logo.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/estilos.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
              integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-white text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img class="img-fluid rounded mb-2" src="assets/img/logo.jpg" alt="" />
                </a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-menu text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/quienes-somos">¿Quienes Somos?</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/escuela-de-aviacion">Escuela de Vuelo</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/extranjeros">Turismo</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/estudiantes">Otras Actividades</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/galeria">Galeria</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btn-contact" href="/contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- body-->
        @yield('content')
        <!-- Footer-->
        <footer class="footer text-left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="mb-4">AC Villa Dolores</h4>
                        <p class="text-lead mb-0">
                            Ruta provincial 14, en la zona de Alto de Castro,
                            <br />
                            Villa Dolores, Córdoba
                        </p>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="mb-4">Contacto</h4>
                        <p class="text-lead mb-1"><a class="btn btn-outline-light btn-social-small mx-1" href="#!"><i
                                    class="fas fa-phone-alt"></i></a> 03544-424559</p>
                            <p class="text-lead mb-1"><a class="btn btn-outline-light btn-social-small mx-1" href="#!"><i
                                    class="fas fa-phone-alt"></i></a> 03544-406649</p>


                    </div>
                    <div class="col-lg-3">
                        <h4 class="mb-4">Más información</h4>
                        <p class="text-lead mb-0">
                            <a class="text-white" href="http://startbootstrap.com">¿Quienes Somos?</a><br>
                            <a class="text-white" href="http://startbootstrap.com">Escuela de Vuelo</a><br>
                            <a class="text-white" href="http://startbootstrap.com">Turismo</a><br>
                            <a class="text-white" href="http://startbootstrap.com">Otras Actividades</a><br>
                            <a class="text-white" href="http://startbootstrap.com">Galeria</a><br>
                        </p>
                    </div>
                    <div class="col-lg-3 mb-5 mb-lg-0">
                        <h4 class="mb-4">Seguinos</h4>
                        <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="https://www.facebook.com/aeroclubvilladoloresoficial/"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" target="_blank" href="https://www.instagram.com/aeroclubvilladolores/"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © ACVillaDolores 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
