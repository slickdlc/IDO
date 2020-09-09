@extends('frontoffice.layouts.app')

@section('contenido')
		<link href="{{ asset('css/frontoffice/rastrearorden.css') }}" rel="stylesheet">
        @yield('styles')

<section id="rastrearorden">
	<div class="container"id="rastrearorden1">
		<h2><b>REVISA TU ORDEN</b></h2><br>
		<form>
			<label for="fname"><b>Correo electrónico *</b></label><br>
            <input type="email" id="fname"placeholder="123@gmail.com"><br><br>
            <label for="fname"><b>Número de orden *</b></label><br>
            <input type="text" id="fname"><br><br>
            <input type="submit" value="BUSCAR MI ORDEN" class="btn-acceder">
		</form>
	</div>
</section>

@endsection('contenido')