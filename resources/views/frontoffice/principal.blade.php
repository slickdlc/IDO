@extends('frontoffice.layouts.app')

@section('contenido')
<section id="hero">
    <div class="container">
        <div class="content-left">
            <h1><b>PRODUCTOS PERSONALIZADOS</b></h1><br><br>
            <p id="p1"><b>Imagina y crea diseños personalizados para tus prendas con el estilo que te caracteriza.</b></p>
            <P id="p1"><b>Y si no puedes no te preocupes nosotros te ayudamos.</b></P>
            <P id="p1"><b>Compra prendas con diseños únicos.</b></P>
            <P id="p1"><b>Imprimimos tú diseño a full color desde 1 producto.</b></P><br><br>
            <a href="#" class="btn btn-light topmargin_sm" id="btncrear" ><h5><b>EMPEZAR A CREAR</b></h5><i class="fas fa-palette"></i></a>
        </div>

    </div>
</section>
<section id="destacados">
    <div class="container-fluid">
        <div id="slidedestacados">
            <div class="content-center">
                <h2><b>PRODUCTOS DESTACADOS</b></h2>
            </div>
            <div class="row">
            <div class="col-md-2">
                <div class="creatividad-container">
                    <a href="#">
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 1">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="creatividad-container">
                    <a href="#">
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 2">
                    </a>
                </div>
            </div>               
            <div class="col-md-2">
                <div class="creatividad-container">
                    <a href="#">
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 3">
                    </a>
                </div>
            </div>
                        <div class="col-md-2">
                <div class="creatividad-container">
                    <a href="#">
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 3">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="creatividad-container">
                    <a href="#">
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 3">
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="creatividad-container">
                    <a href="#">
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 4">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section id="creatividad">
    <div class="container-fluid">
        <div class="content-center">
            <h2><b>CREATIVIDAD AL MÁXIMO</b></h2>
        </div>
        <div class="row">
            <div class="col-md-3">
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
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 1">
                    </a>
                </div>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-3">
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
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 3">
                    </a>
                </div>
            </div>
            <div class="col-md-3">
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
                        <img src="{{asset('img/frontoffice/varon.png')}}" class="img-fluid" alt="creatividad 4">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="iconosgarantia">
    <div class="container">
        <div class="row">
            <div class="col-md-4 content-center">
                <p class="iconos"><i class="fas fa-shield-alt"></i></p>
                <p><b>Pagos en línea, compras 100% seguras.</b></p>
            </div>
            <div class="col-md-4 content-center">
                <p class="iconos"><i class="fas fa-paper-plane"></i></p>
                <p><b>Envíos a nivel nacional.</b></p>
            </div>
            <div class="col-md-4 content-center">
                <p class="iconos"><i class="fas fa-people-carry"></i></p>
                <p><b>Política de devolución de 30 días.</b></p>
            </div>
        </div>
    </div>
</section>
@endsection('contenido')