@extends('frontoffice.layouts.app')

@section('contenido')
		<link href="{{ asset('css/frontoffice/contactanos.css') }}" rel="stylesheet">
        @yield('styles')

<section>
	<div class="container">
		<div class="contac-container">
			<h2>CONTACTÁNOS</h2>
		</div>
		<div class="row">
			<div class="col-md-2 content-center">
				<div class="redes-conteiner">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<p>IDO</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="redes-conteiner content-center">
					<a href="#"><i class="fab fa-whatsapp"></i></a>
					<p>966933410</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="redes-conteiner content-center">
					<a href="#"><i class="fab fa-instagram"></i></a>
					<p>IDO</p>
				</div>
			</div>
			<div class="col-md-2 content-center">
				<div class="redes-conteiner">
					<a href="#"><i class="fab fa-youtube"></i></a>
					<p>IDO</p>
				</div>
			</div>
			<div class="col-md-2 content-center">
				<div class="redes-conteiner">
					<a href="#"><i class="fab fa-twitter"></i></a>
					<p>IDO</p>
				</div>
			</div>
			<div class="col-md-2 content-center">
				<div class="redes-conteiner">
					<a href="#"><i class="fas fa-envelope"></i></a>
					<p>IDO@gmail.com</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection('contenido')




