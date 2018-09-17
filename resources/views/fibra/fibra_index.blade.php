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
					<a href="#suscribe">
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
				<h1 class="extra-big w-600 text-center blue">
					"LO QUE VES ES LO QUE HAY"
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
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="big blue text-center w-300">
					Formulario preinscripcion
				</h2>
			</div>
			<div class="col-12">
				<form id="suscribe">
					<div class="form-row">
						<div class="col-md-4 col-xs-12">
							<label for="inlineFormInputGroup">Nombre</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="text" class="form-control" placeholder="Nombre">
							</div>
						</div>
					
						<div class="col-md-4 col-xs-12">
							<label for="inlineFormInputGroup">Telefono</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-phone"></i>
									</div>
								</div>
								<input type="text" class="form-control" placeholder="Telefono">
							</div>
						</div>

						<div class="col-md-4 col-xs-12">
							<label for="inlineFormInputGroup">Localidad</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-location-arrow"></i>
									</div>
								</div>
								<input type="text" class="form-control" placeholder="Localidad">
							</div>
						</div>
						<div class="h-30"></div>
						<div class="col-12">
							<p class="text-center">
							<button type="sumbit" class="col-xs-12 btn-lg btn-primary">INSCRIBIRME</button>
						</p>
						</div>
					</div>
					

				</form>
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