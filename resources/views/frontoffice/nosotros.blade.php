@extends('frontoffice.layouts.app')

@section('contenido')
		<link href="{{ asset('css/frontoffice/nosotros.css') }}" rel="stylesheet">
        @yield('styles')

<section>
    <div class="nosotros-container">
    	<a href="#">
        <img src="{{asset('img/frontoffice/nosotros.jpg')}}" class="img-fluid" alt="nosotros">
        </a>
	</div>
</section>
<section>
	<div class="container">
		<h2 id="sobre"><b>SOBRE IDO</b></h2>
	</div>
	<div class="container">
		<h3 id="nuestra"><b>NUESTRA HISTORIA</b></h3>
		<p id="historia">
			A inicios del año 2020 un par de jóvenezuelos como tú se trazó una meta: <b>Ayudar a las personas a encontrar un estilo que represente sus vidas.</b> Al ver que cada persona tenía un estilo de vida distinto, decidimos enfocarnos en la creatividad porque ésta es un medio que nos permite conseguir nuestros propósitos. Así fue que el sueño de IDO se convirtió desde entonces en: <b>Promover la creatividad de las personas.</b> La marca IDO llevará en sus productos mensajes que motivarán a las personas a ser más creativas, también nos dimos cuenta que empoderando a las personas para que ellas mismas hagan los diseños sería una mejor manera de promover su creatividad. Fué así que implementamos una web donde las personas puedan subir sus diseños o ilustrasiones. Dando inicio a nuestro pequeño sueño de ayudar a que más personas se vuelvan artistas.
		</p>
	</div>
</section>
<section id="carrusel">
	<div id="carouselnosotros" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carouselnosotros" data-slide-to="0" class="active"></li>
    		<li data-target="#carouselnosotross" data-slide-to="1"></li>
    		<li data-target="#carouselnosotros" data-slide-to="2"></li>
  		</ol>
  	<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img src="{{asset('img/frontoffice/carrusel.jpg')}}" alt="Primer slide">
    	</div>
    	<div class="carousel-item">
      		<img src="{{asset('img/frontoffice/carrusel.jpg')}}" alt="Segundo slide">
    	</div>
    	<div class="carousel-item">
      		<img src="{{asset('img/frontoffice/carrusel.jpg')}}" alt="Tercer slide">
    	</div>
  	</div>
  		<a class="carousel-control-prev" href="#carouselnosotros" role="button" data-slide="prev">
    		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    		<span class="sr-only">Anterio</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselnosotros" role="button" data-slide="next">
    		<span class="carousel-control-next-icon" aria-hidden="true"></span>
    		<span class="sr-only">Siguiente</span>
  		</a>
	</div>
</section>

@endsection('contenido')