@extends('master')

@section('title','Fibra Digi en Arganda del Rey | Contacte con nosotros')

@section('meta_description','Calculadora tarifas fibra Dibi. 
Aqui puedes calcular la tarifa que pagaras con nosotros. 
Combina la fibra Digi con cualquier tarifa de movil y 
te doblamos las gigas y pagaras menos. Fibra de 500Mb mas una linea de movil con 
llamadas ilimitadas y 40Gb para navegar por solo 42€/mes, IVA incluido.')

@section('content')
<section>
	
	<div class="container-fluid" >
		<div class="row align-items-center contacto">
			<div class="col-12">
				<div class="h-60"></div>
				<div class="col-12">
					<h1 class="white text-center extra-big ral w-600">
						Despegamos cualquier duda
					</h1>
				</div>
				<div id="suscribe" class="col-md-8 col-xs-12 offset-md-2">				
					<form  action="{{ url('/contacto/enviar') }}" method="POST"
							class="needs-validation"  novalidate>
						{{ csrf_field() }}
										
						<!-- vue component -->
						<app-form-contacto
							first_name="{{ old('first_name') }}"
							phone = "{{ old('phone') }}"
							post_code = "{{ old('post_code') }}"
							email = "{{ old('email') }}"
							cofirm_email = "{{ old('confirm_email') }}"
							errors = "{{ $errors }}">

						</app-form-contacto>
					</form>
				</div>
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