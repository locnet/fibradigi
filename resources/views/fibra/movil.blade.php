@extends('master')

@section('title','Digi Mobil Tarifas | Precios los productos Digi ')

@section('meta_description','Las tarifas Digi Mobil son las mejores tarifas del mercado. Siempre mejoramos 
nuestros productos dando mas megas y minutos, nunca hemos subido el precio de un combo Digi Mobil. 
Comprueba los precios de nuestros combos y comparalos con la competencia.')

@section('content')
<section>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="h-30"></div><!-- separador 30px-->
			<div class="col-md-10 col-xs-12 offset-md-1">
				<h1 class="blue text-center extra-big w-600">TARIFAS DIGI MOBIL</h1>
				<h2 class="text-center big w-300">Las mejores tarifas de telefonia 
				movil para llamar a España o estranjero.</h2>
							
			</div>
			<div class="h-30"></div><!-- separador -->
		</div>
	</div>
	<div class="container" >
		<div class="row align-items-center">
			<div class="h-30"></div><!-- separador-->
			<div class="col-12 jumbotron" style="background-color: #009df9">
				<h3 class="w-600 text-center white medium" style="margin-bottom:20px">
					TENEMOS LAS TARIFAS DIGI MOBIL QUE HAS PEDIDO</h3>
				<p class="white lead">En Digi Mobil estamos siempre al servicio del cliente. Por esto nunca
					hemos subido el precio, cada nuevo producto Digi Mobil que sacamos es mejor y mas barato que el anterior, tienes mas megas para nevegar y mas minutos para hablar con los tuyos.
				</p>
				<p class="white lead">En los diez años de vida que llevamos hemos aprendido mucho sobre 
				nuestros clientes y sobre el mercado. Podemos decir con orgullo que tenemos tarifas 
				para cada tipo de clientes, tantos para los que llaman fuera como para los que solo 
				llaman a numeros nacionales.</p>
			</div>
			<div class="h-30"></div><!-- separador -->
			<div class="col-12">
				<h2 class=" w-400 ral text-center big blue">Decide cual es la mejor tarifa Digi Mobil para ti</h2>

				<h4 class="w-100 ral">Nuestras tarifas <a href="#combos">DIGI COMBO</a> estan pensadas para los clientes que tienen familia fuera de España. Tienes minutos internacionales y megas para navegar.</h4>
				<h4 class="w-100">Si solo quieres llamar a fijos y movile de España tenemos las tarifas llamadas 
					<a href="#ilimitado">DIGI ILIMITADO</a> que 
				incluyen llamadas nacionales ilimitadas y muchos megas para navegar.</p>
				<h4 class="w-100 ral">Para los que solo quieren navegar tenemos las tarifas <a href="#navega">DIGI NAVEG@</a> que incluyen megas para navegar y llamadas ilimitadas de Digi a Digi.</h4>
			</div>
			<div class="h-30"></div>
		</div>
		
		<div class="col-12" id="combos">
			<h2 class="text-center ral w-100 blue">Llamadas nacionales y internacionales  y muchos megas para navegar.</h2>
		</div>

		<div class="h-20"></div>
		<app-tarifas-combo></app-tarifas-combo>

		<div class="h-60"></div><!-- separador -->
		<div class="col-12" id="ilimitado">
			<h2 class="text-center ral w-100 blue">Llamadas solo a fijos y moviles de España y muchos megas.</h2>
		</div>

		<div class="h-20"></div>
		<app-tarifas-ilimitado></app-tarifas-ilimitado>

		<div class="h-60"></div><!--seprador -->
		<div class="col-12" id="navega">
			<h2 class="text-center ral w-100 blue">
				Para navegar libremente gastando lo justo.
			</h2>
		</div>

		<div class="h-20"></div>
		<app-tarifas-navega></app-tarifas-navega>

		<div class="h-60"></div><!-- separador -->
		<div class="" ss="col-12 jumbotron bgWhite">
			<h3 class="w-600 text-center blue medium" style="margin-bottom:20px">
				¿TIENES PREGUNTAS SOBRE LOS COMBOS DE DIGI?</h3>
			<p class="lead">Tenemos una seccion dedicada a responder a cualquier pregunta sobre 
				los Combos y las tarifas Digi Mobil, 
				<a href="" data-toggle="modal" data-target="#faqModal">pulsa aqui 
					<i class="fa fa-link"></i>
				</a>
			</p>
		</div>
		
		<app-faq-digi-combo></app-faq-digi-combo>
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