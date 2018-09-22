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
				<h2 class="text-center w-300 white">
					¡Ya esta aqui la mejor fibra del mercado! Internet de verdad, sin trucos.
				</h2>
				<p class="text-center yellow">Disponible solo en la Comunidad de Madrid</p>
			</div>
			<div class="col-12">
				<div class="h-30"></div><!-- separador -->
				<h2 class="text-center big ral w-600 white">
					500Mb <span class="yellow">30€/mes</span>
					<span class="small d-none d-sm-block">IVA incluido / permanencia 12 meses</span>
				</h2>
				<h2 class="text-center big ral w-600 white">
					30Mb - <span class="yellow">25€/mes</span> 
					<span class="small d-none d-sm-block">IVA incluido / permanencia 12 meses</span>
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
				<h1 class="big w-600 text-center blue">
					"LO QUE VES ES LO QUE HAY"
				</h1>
				<p class="big ral w-100">No tenemos letra pequeña en nuestros productos. Si 
					te decimos que la Fibra Digi 500Mb cuesta 30€/mes es realmente lo que cuesta: 
					solo 30 € IVA incluido. Tambien te decimos claro que la instalacion es gratuita
					a cambio de 12 meses de permanencia. Sin trucos.
				</p>
				<p class="big ral w-100">Desde el 19 de septiembre hemos lanzado nuestro servicio
					de fibra. De momento la fibra esta disponible solo en la Comunidad de Madrid.
					Poco a poco estara disponible para toda España.
				</p>
			</div>
			<div class="h-50"></div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<h2 class="big w-600 text-center blue">Caracteristicas fibra Digi</h2>
			</div>
			<div class="h-30"></div><!--separador-->
			<div class="col">
				<h2>fibra 500</h2>
			</div>
			<div class="col">
				<h2>fibra 30</h2>
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