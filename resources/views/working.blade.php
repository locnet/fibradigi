@extends('master')

@section('title','Fibra Digi en Arganda del Rey | Contacte con nosotros')

@section('meta_description','Calculadora tarifas fibra Dibi. 
Aqui puedes calcular la tarifa que pagaras con nosotros. 
Combina la fibra Digi con cualquier tarifa de movil y 
te doblamos las gigas y pagaras menos. Fibra de 500Mb mas una linea de movil con 
llamadas ilimitadas y 40Gb para navegar por solo 42€/mes, IVA incluido.')

@section('content')
<section>
	
	<div class="container" >
		<div class="row">
			<div class="col-12">
				<div class="h-60"></div>
				<div class="h-60"></div><!-- separador -->
				<h1 class="w-600 ral big blue text-center">ESTAMOS TRABAJANDO....</h1>
				<h2 class="w-300 text-center">Pronto esta seccion estara disponible</h2>
				<h3 class="w-600 text-center">¡GRACIAS!</h3>
				<div class="h-60"></div>
				<div class="h-60"></div>
			</div>
		</div>		
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