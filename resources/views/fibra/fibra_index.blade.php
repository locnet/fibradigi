@extends('master')

@section('title','Fibra Digi Mobil | La mejor fibra optica del mercado')

@section('meta_description','Ya esta disponible la mejor fibra del mercado en cuanto a
la relacion calidad/precio. Nuestra fibra tiene precio imbatibles y la calidad de la 
infraestructura de Movistar.')

@section('content')
<section>
	<div class="container-fluid portada">
		<div class="row align-items-center portada-info">
			<div class="col-12">
				<h1 class="text-center extra-big ral w-600 white">FIBRA DIGI MOBIL</h1>
				<h2 class="text-center ral-600 white">¡Pronto podras difrutar de la mejor fibra optica del mercado en cuanto a calidad precio!
				</h2>
			</div>
			<div class="col-md-6 col-xs-12 offset-md-3 oferta">
				<h3 class="text-center w-300">Dentro de poco tiempo nuestra fibra
				 estara disponible para todo el mundo. Apuntate a nuestra lista y te llamaremos cuando 
					esta disponible para ti.</h3>
				<p class="text-center">
					<a href="{{ url('/fibra-digimobil') }}">
						<button class="btn btn-warning btn-lg">
							QUIERO PREINSCRIBIRME
						</button></a>
				</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="h-50"></div>
			<div class="col-12">
				<h1 class="big w-600 text-center blue">
					Nuestro lema: "LO QUE VES ES LO QUE HAY"
				</h1>
				<p class="big ral w-100">No tenemos letra pequeña en nuestros productos. Si 
					te decimos que el Digi Combo cuesta 20€/mes es realmente lo que cuesta: 
					solo 20 € IVA incluido. Sin trucos.
				</p>
				<p class="big ral w-100">En nuestra mision de dar el mejor servicio a nuestros 
					clients vamos a dar un paso mas alla ofreciendo el servicio de fibra optica
					para los hogares. 
				</p>
				<p class="big ral w-100">
					Actualmente estamos realizado instalaciones de prueba 
					de nuestra fibra optica. Pronto la fibra Digi Mobil sera disponible para todo el mundo.
				</p>
				<p class="big ral w-100">Si quieres ser uno de los primeros en tener nuestro 
					servicio de fibra en tu casa apuntate a nuestra lista de espera.
				</p>
			</div>
			<div class="h-50"></div>
		</div>
	</div>
</section>
@endsection