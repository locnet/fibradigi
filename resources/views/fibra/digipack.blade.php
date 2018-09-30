@extends('master')

@section('title','Calcula precio fibra Digi Mobil| Digi Fibra optica')

@section('meta_description','Aqui puedes calcular la tarifa que pagaras con nosotros. 
Combina la fibra Digi con cualquier tarifa de movil y 
te doblamos las gigas y pagaras menos. Fibra de 500Mb mas una linea de movil con 
llamadas ilimitadas y 40Gb para navegar por solo 42€/mes, IVA incluido.')

@section('content')
<section>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="h-30"></div><!-- separador 30px-->
			<div class="col-md-10 col-xs-12 offset-md-1">
				<h1 class="blue text-center extra-big w-600">FIBRA DIGI + MOVIL DESDE SOLO 27€ / mes</h1>
				<h2 class="blue text-center big ral w-600">CONTRATA <span class="yellow"> SOLO</span>
					LO QUE <span class="yellow">NECESITAS</span></h2>
					<div class="h-30"></div><!-- separador -->
					<h3 class="text-center">
						<a href="#showPacks" class="btn btn-primary btn-lg" role="button">
						CALCULA LO QUE PAGARAS CON DIGI</a>
					</h3>
			</div>
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