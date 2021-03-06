@extends('no_menu_header')

@section('title','Calcula precio fibra Digi Mobil| Digi Fibra optica')

@section('meta_description','Calculadora tarifas fibra Dibi. 
Aqui puedes calcular la tarifa que pagaras con nosotros. 
Combina la fibra Digi con cualquier tarifa de movil y 
te doblamos las gigas y pagaras menos. Fibra de 500Mb mas una linea de movil con 
llamadas ilimitadas y 40Gb para navegar por solo 42€/mes, IVA incluido.')

@section('content')
<section>
	<div class="container-fluid digipack">
		<div class="row align-items-center">
			<div class="col-md-12 col-xs-12">
				<div class="h-60"></div>
				<div class="col-md-6 col-xs-12">
					<h1 class="white text-center big w-600" style="margin-top:80px">
						CALCULA EL PRECIO DEL PAQUETE FIBRA + MOBIL
					</h1>
					<h2 class="white text-center w-600">CONTRATA <span class="lightRed"> SOLO</span>
						LO QUE <span class="lightRed">NECESITAS</span></h2>
					<div class="h-30"></div><!-- separador -->
					<p class="text-center">
						<a href="#showPacks" class="btn btn-danger btn-lg" role="button">
						CALCULADORA FIBRA DIGI</a>
					</p>
					
				</div>	
			</div>
			<div class="h-30"></div>
		</div>
	</div>
	<div class="container" >
		<div class="row align-items-center">
			<div class="h-30"></div><!-- separador-->
			<div class="col-12 jumbotron" style="background-color: #74838c">
				<h3 class="w-600 text-center white medium">PORQUE TU LO HAS PEDIDO</h3>
				<p class="white lead">En Digi lo tenemos claro: solo pagas por lo que contratas. Nunca te 
				obligaremos a contratar nada que no necesites. Por esto nuestros clientes nos aman.</p>
				<p class="white lead">Nuestros paquetes de fibra Digi + movil empiezan desde solo 27€ al mes.
					Por este dinero te llevas la fibra Digi de 30Mb mas mas una linea de 
					movil que incluye 1Gb de datos sobre 4G al mes con 100 minutos 
					de llamadas a fijos y moviles de España.
				</p>
				<p class="white lead">En el paquete Digi de fibra + movil puedes introducir hasta cuatro
					lineas de movil diferentes. En cada linea movil que combinas con la fibra te doblamos los gigas ademas de una reduccion substancial del precio de la linea movil.
				</p> 
			</div>
			<div class="h-30"></div><!-- separador -->
		</div>
		<!-- componente calculadora -->
		<app-calculadora
				contact_url = {{ url('contacto') }}>
					
		</app-calculadora>
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