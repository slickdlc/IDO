<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'IDO') }}</title>
        <!-- Styles -->
        <link href="{{ asset('css/frontoffice/main.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fa/css/all.css') }}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg" id="navbar1">
            <strong>IDO - VÍSTETE DE EMOCIONES</strong>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="rastrear">RASTREAR ORDEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="contactanos">CONTÁCTANOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="ayuda"><i class="far fa-question-circle"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg" id="navbar2">
            <div class="container">
                <a class="navbar-brand" href="#"><img border="0" alt="IDO" src="{{asset('img/frontoffice/idoblanco.png')}}" width="100" height="100"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
                        <button id="btnbuscar" class="btn btn-outline-success" type="submit">BUSCAR</button>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="inicio">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="sobrenosotros">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="tienda">TIENDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="crear">CREAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="registrar">REGISTRASE/ACCEDER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="carrito">CARRITO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="hero">
            <div class="container">
                <div class="content-left">
                    <h1>PRODUCTOS PERSONALIZADOS</h1>
                    <p id="p1"><b>Imagina y crea diseños personalizados para tus prendas con el estilo que te caracteriza.</b></p>
                    <P id="p1"><b>Y si no puedes no te preocupes nosotros te ayudamos.</b></P>
                    <P id="p1"><b>Compra prendas con diseños únicos.</b></P>
                    <P id="p1"><b>Imprimimos tú diseño a full color desde 1 producto.</b></P>
                    <a href="#" class="btn btn-light topmargin_sm" >EMPEZAR A CREAR <i class="fas fa-palette"></i></a>
                </div>

            </div>
        </section>
        <section id="creatividad">
            <div class="container-fluid">
                <div class="content-center">
                    <h2><b>CREATIVIDAD AL MÁXIMO</b></h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="creatividad-container">
                            <div class="creatividad-details">
                                <a href="#">
                                    <h2>PERZONALIZAR</h2>
                                </a>
                                <a href="#">
                                    <p>Empieza creando tus diseños</p>
                                </a>
                            </div>
                            <a href="#">
                                <img src="{{asset('img/frontoffice/creatividad.png')}}" class="img-fluid" alt="creatividad 1">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="creatividad-container">
                            <div class="creatividad-details">
                                <a href="#">
                                    <h2>PRENDAS PARA VARON</h2>
                                </a>
                                <a href="#">
                                    <p>Anímate a comprar prendas con diseños únicos.</p>
                                </a>
                            </div>
                            <a href="#">
                                <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 2">
                            </a>
                        </div>
                    </div>               
                    <div class="col-md-6">
                        <div class="creatividad-container">
                            <div class="creatividad-details">
                                <a href="#">
                                    <h2>PRENDAS PARA MUJER</h2>
                                </a>
                                <a href="#">
                                    <p>Viste para cualquier ocasión.</p>
                                </a>
                            </div>
                            <a href="#">
                                <img src="{{asset('img/frontoffice/mujer.png')}}" class="img-fluid" alt="creatividad 3">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="creatividad-container">
                            <div class="creatividad-details">
                                <a href="#">
                                    <h2>OTROS PRODUCTOS</h2>
                                </a>
                                <a href="#">
                                    <p>Decora tu casa con diseños únicos.</p>
                                </a>
                            </div>
                            <a href="#">
                                <img src="{{asset('img/frontoffice/otros.png')}}" class="img-fluid" alt="creatividad 4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer" class="bg-dark">
            <div class="container">
                <img border="0" alt="IDO" src="{{asset('img/frontoffice/idoblanco.png')}}" width="50" height="50">
                <ul class="list-inline">
                    <li class="list-inline-item footer-menu"><a href="#">Preguntas frecuentes</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Términos de uso</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Órdenes</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Devolución y cambio</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">Envío</a></li>
                    <li class="list-inline-item footer-menu"><a href="#">F.A.Q</a></li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
                <small>IDO.pe © 2020 - Todos los Derechos Reservados</small>
                <p><small>Desarrollado por: Nosotros :v</small></p>
            </div>
        </section>
        <script src="{{ asset('js/jquery.min.js') }}" rel="stylesheet"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" rel="stylesheet"></script>
        @yield('scripts')
    </body>
</html>