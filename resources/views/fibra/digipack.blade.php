@extends('master')

@section('title','Fibra Digi Mobil | La mejor fibra optica del mercado')

@section('meta_description','Ya esta disponible la mejor fibra del mercado en cuanto a
la relacion calidad/precio. Nuestra fibra tiene precio imbatibles y la calidad de la 
infraestructura de Movistar.')

@section('content')
<section>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="h-30"></div><!-- separador 30px-->
			<div class="col-md-10 col-xs-12 offset-md-1">
				<h1 class="blue text-center extra-big w-600">FIBRA DIGI + MOVIL DESDE SOLO 28€ / mes</h1>
				<h2 class="blue text-center big ral w-600">CONTRATA <span class="yellow"> SOLO</span>
					LO QUE <span class="yellow">NECESITAS</span></h2>
			</div>
		</div
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<h3 class="w-300">Porque tu lo has pedido</h3>
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