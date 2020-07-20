@extends('master')

@section('title','Fibra Digi Mobil | La mejor fibra optica del mercado')

@section('meta_description','Ya esta disponible la mejor fibra del mercado en cuanto a
la relacion calidad/precio. Nuestra fibra tiene precio imbatibles y la calidad de la 
infraestructura de Movistar.')

@section('content')
<section>
	<div class="container-fluid portada" >
		<div class="row align-items-center portada-info" style="min-height:500px">
			<div class="col-md-8 col-xs-12 offset-md-2">
				<h1 class="white text-center extra-big ral w-400">{{ $message['title'] }}</h1>
				<h2 class="white text-center ral w-300">{{ $message['body'] }}</h2>
				<h3 class="yellow w-100 text-center">{{ $message['footer'] }}</h3>
			</div>
		</div
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