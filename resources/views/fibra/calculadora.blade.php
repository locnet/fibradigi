@extends('master')

@section('title','Calcula precio fibra Digi Mobil| Digi Fibra optica')

@section('meta_description','Aqui puedes calcular la tarifa que pagaras con nosotros. 
Combina la fibra Digi con cualquier tarifa de movil y 
te doblamos las gigas y pagaras menos. Fibra de 500Mb mas una linea de movil con 
llamadas ilimitadas y 40Gb para navegar por solo 42€/mes, IVA incluido.')

@section('content')
<section>
	
	<div class="container" >
		<div class="row align-items-center">
			
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