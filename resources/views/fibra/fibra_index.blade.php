@extends('master')

@section('title','Fibra optica Digi Mobil | La mejor fibra del mercado')

@section('meta_description','Ya esta disponible la mejor fibra del mercado en cuanto a
la relacion calidad/precio. Nuestra fibra tiene precio imbatibles y la calidad de la 
infraestructura de Movistar.')

@section('content')
<section>
	<div class="container-fluid portada">
		<div class="row align-items-center portada-info">
			<div class="col-12">
				<h1 class="text-center extra-big ral bold-600 white">FIBRA DIGI MOBIL</h1>
				<h2 class="text-center ral-600 white">¡Pronto podras difrutar de la mejor fibra del mercado en cuanto a calidad precio!
				</h2>
			</div>
			<div class="col-6 col-xs-12 offset-md-3 oferta">
				<h3 class="text-center bold">Estamos haciendo pruebas de velocidad y fiabilidad.
					Dentro de poco nuestra fibra estara disponible para todo el mundo.
					<span class="blue"><br />Apuntate a nuestra lista y te llamaremos cuando 
					esta disponible para ti.</span></h3>
				<p class="text-center">
					<a href="{{ url('/fibra-digimobil') }}">
						<button class="btn btn-warning btn-lg">
							Lista de espera
						</button></a>
				</p>
			</div>
		</div>
	</div>
</section>
@endsection