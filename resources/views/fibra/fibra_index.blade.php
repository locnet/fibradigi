@extends('master')

@section('title','Fibra Digi Mobil Distribuidor Autorizat | La mejor fibra optica del mercado')

@section('meta_description','Ya esta disponible la mejor fibra del mercado. Instalacion y wifi gratis 
incluido, permanecia 12 meses.')

@section('content')
<section>
	<div class="container-fluid portada">
		<div class="row align-items-center portada-info">
			<div class="col-12">
				<h1 class="text-center extra-big ral w-600 white">FIBRA DIGI MOBIL</h1>
				<h2 class="text-center big ral w-100 lightBlue">SOMOS DISTRIBUIDOR AUTORIZADO <b>DIGI MOBIL</b></h2>
				<h2 class="text-center w-300 white">
					¡Ya esta aqui la mejor fibra del mercado! Internet de verdad, sin trucos.
				</h2>
			</div>
			<div class="col-12">
				<div class="h-30"></div><!-- separador -->
				<h2 class="text-center big ral w-600 white">
					500Mb <span class="yellow">30€/mes</span>
					<span class="small">IVA incluido / permanencia 12 meses</span>
				</h2>
				<h2 class="text-center big ral w-600 white">
					50Mb - <span class="yellow">25€/mes</span> 
					<span class="small">IVA incluido / permanencia 12 meses</span>
				</h2>
			</div>
			
			<div id="suscribe" class="col-md-8 col-xs-12 offset-md-2">	
				
				<form  action="{{ url('/fibra/lista-espera') }}" method="POST"
						class="needs-validation"  novalidate>
					{{ csrf_field() }}
									
					<!-- vue component -->
					<app-form-lista-espera
						first_name="{{ old('first_name') }}"
						phone = "{{ old('phone') }}"
						post_code = "{{ old('post_code') }}"
						email = "{{ old('email') }}"
						cofirm_email = "{{ old('confirm_email') }}"
						errors = "{{ $errors }}">

					</app-form-lista-espera>
				</form>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="h-50"></div>
			<div class="col-12">
				<h2 class="big w-600 text-center blue">
					#LO QUE VES ES LO QUE HAY
				</h2>
				<p class="big ral w-100">No tenemos letra pequeña en nuestros productos. Si 
					te decimos que la Fibra Digi 500Mb cuesta 30€/mes es realmente lo que cuesta: 
					solo 30 € IVA incluido. Tambien te decimos claro que la instalacion es gratuita
					a cambio de 12 meses de permanencia. Sin trucos.
				</p>
				<p class="big ral w-100">Desde el 19 de septiembre hemos lanzado nuestro servicio
					de fibra. De momento la fibra esta disponible solo en la Comunidad de Madrid.
					Poco a poco estara disponible para toda España.
				</p>
				<p class="big ral w-100">Si tienes cualquier pregunta sobre la fibra Digi o el servicio de telefonia no 
					dudes en <a href="{{ url('contacto') }}">contactarnos <i class="fas fa-link"></i></a>.
				Te contestaremos encantados.</p>
			</div>
			<div class="h-50"></div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<h2 class="big w-600 text-center blue">FIBRA DIGI MOBIL - INTERNET DE VERDAD</h2>
			</div>

			<div class="h-30"></div><!--separador-->

			<div class="col-md-6 col-xs-12">
				<div class="card text-white bg-primary w-80 text-center">
					<div class="card-header">
						<h2 class="w-600">FIBRA DIGI 500Mb</h2>
					</div>
					<div class="card-body">
						<p class="card-text"><i class="fas fa-euro-sign"></i>
							30 euros al mes, IVA incluido.
						<p class="card-text"><i class="fas fa-rocket"></i> 
							500Mb de subida y bajada.</p>
						<p class="card-text"><i class="fas fa-wifi"></i>
							Router wi-fi incluido</p>
						<p class="card-text"><i class="fas fa-cogs"></i>
							Instalacion gratuita.</p>
						<p class="card-text"><i class="fas fa-info-circle"></i>
							Precio para siempre. Permanencia 12 meses.</p>
					</div>
				</div>
			</div>
			<div class="h-30 d-block d-sm-none"></div> <!-- separador, solo para moviles -->

			<div class="col-md-6 col-xs-12">
				<div class="card text-white bg-primary w-80 text-center">
					<div class="card-header">
						<h2 class="w-600">FIBRA DIGI 30Mb</h2>
					</div>
					<div class="card-body">
						<p class="card-text"><i class="fas fa-euro-sign"></i>
							25 euros al mes, IVA incluido.
						<p class="card-text"><i class="fas fa-rocket"></i> 
							30Mb de subida y bajada.</p>
						<p class="card-text"><i class="fas fa-wifi"></i>
							Router wi-fi incluido.</p>
						<p class="card-text"><i class="fas fa-cogs"></i>
							Instalacion gratuita</p>
						<p class="card-text"><i class="fas fa-info-circle"></i>
							Precio para siempre. Permanencia 12 meses.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="h-40"></div>
		<div class="col-12">
			<h2 class="blue big text-center w-600">¿Quieres saber mas sobre nuestras tarifas?</h2>
			<p class="big ral w-100">Consulta las <a href="{{ route('digipack') }}">tarifas <i class="fas fa-search">
				</i></a> de nuestros paquetes de fibra y movil incluidos. Si no quieres fibra en tu casa no hay problema,  tenemos las <a href="{{ url('digi-mobil-tarifas') }}"> tarifas <i class="fas fa-search"></i></a> perfectas para cada caso.</p>
		</div>
		<div class="h-40"></div>
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