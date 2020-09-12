@extends('frontoffice.layouts.app')

@section('contenido')
		<link href="{{ asset('css/frontoffice/nosotros.css') }}" rel="stylesheet">
        @yield('styles')

<section>
</section>
<section>
	<div class="container">
		<h2 id="sobre"><b>AYUDA</b></h2>
	</div>
	<div class="container">
		<h3 id="nuestra"><b>Si no te gusta ¡Envíalo de vuelta!</b></h3>
		<p id="historia">
			¿No te queda tu prenda o no te gusta el color? ¡No hay problema! En IDO valoramos a nuestros clientes y sentimos orgullo de nuestros productos. Si no estás 100% satisfecho con tu producto, puedes cambiarlo por otro o pedir un reembolso dentro de los primeros 30 días después de recibirlo.Por favor sigue estos 3 simples pasos para cambio o reembolso:<br>Envía tu producto a:<br>Envía tu producto a:<br>IDO Perú<br>Dirección:<br>Ayacucho-Perú<br>Por favor incluye el número de seguimiento de ser posible, para que sea más sencillo el rastreo de tu producto.
			Contáctate con nuestro Departamento de Servicio al Cliente para detallar el problema y especificar si quieres cambio de producto o reembolso. Por favor incluye tu información de seguimiento (si está disponible, claro).
			Una vez recibido, confirma tu información de seguimiento (o recibo de embalaje en caso de que no la tengas). Luego recibirás tu reemplazo o reembolso.
		</p>
	</div>
	<div class="container">
		<h3 id="nuestra"><b>Tu información está a salvo con nosotros</b></h3>
		<p id="historia">
			Toda la información que nos brindas está a salvo. Nuestros servidores cifran tu información y se aseguran de que sea enviada a través de una conexión segura, sin posibilidad de alteración. No compartimos tu información con terceros y solo empleamos métodos seguros de pago conocidos por sus garantías al comprador tales como PayPal y PagoEfectivo. Para más información, por favor revisa nuestras Políticas de privacidad.
		</p>
	</div>
</section>
@endsection('contenido')
<!-- estamos usando los nosotros.css así no andes buscando ayuda.css :V -->