@extends('frontoffice.layouts.app')

@section('contenido')
<section id="hero">
    <div class="container">
        <div class="content-left">
            <h1>PRODUCTOS PERSONALIZADOzszsS</h1>
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
@endsection('contenido')