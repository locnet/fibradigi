@extends('master')

@section('title','Calcula precio fibra Digi Mobil| Digi Fibra optica')

@section('meta_description','Fibra Digi con linea movil desde solo 27€ al mes. Contrata solo lo
	que necesitas y solo paga lo que has contratado.')

@section('content')
<section>
	<div class="container-fluid digipack">
		<div class="row align-items-center">
			<div class="col-md-12 col-xs-12">
				<div class="h-60"></div>
				<div class="col-md-6 col-xs-12">
					<h1 class="white text-center extra-big w-600">FIBRA DIGI + MOVIL DESDE SOLO 27€</h1>
					<h2 class="white text-center w-600">CONTRATA <span class="lightBlue"> SOLO</span>
						LO QUE <span class="lightBlue">NECESITAS</span></h2>
					<div class="h-30"></div><!-- separador -->
					<h3 class="text-center">
						<a href="#showPacks" class="btn btn-danger btn-lg" role="button">
						CALCULA LO QUE PAGARIAS CON DIGI</a>
					</h3>
				</div>	
			</div>
			<div class="h-30"></div>
		</div>
	</div>
	<div class="container" >
		<div class="row align-items-center">
			<div class="h-30"></div><!-- separador-->
			<div class="col-12 jumbotron" style="background-color: #009df9">
				<h3 class="w-600 text-center white medium">PORQUE TU LO HAS PEDIDO</h3>
				<p class="white lead">En Digi lo tenemos claro: solo pagas por lo que contratas. Nunca te 
				obligaremos a contratar nada que no necesites. Por esto nuestros clientes nos aman.</p>
				<p class="white lead">Nuestros paquetes de fibra Digi + movil empiezan desde solo 27€ al mes.
					Por este dinero te llevas la fibra Digi de 30Mb mas mas una linea de 
					movil que incluye 1Gb de datos sobre 4G al mes con 100 minutos 
					de llamadas a fijos y moviles de España.
				</p>
				<p class="white lead">En el paquete Digi de fibra + movil puedes introducir hasta cuatro
					lineas de movil diferentes. En cada linea movil que combinas con la fibra te doblamos 
					los gigas ademas de una reduccion substancial del precio de la linea movil.
				</p> 
			</div>
			<div class="h-30"></div><!-- separador -->
		</div>
		<!-- componente calculadora -->
		<app-calculadora></app-calculadora>
	</div>
</section>
@endsection

@section('custom_js')
<script>
	var scroll = new SmoothScroll('a[href*="#"]',{
		speed:1000,
	});
</script>
@endsection