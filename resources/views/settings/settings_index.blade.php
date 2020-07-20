@extends('master')

@section('title','Configurar apn Digi Mobil | Configurar internet Digi')

@section('meta_description','Configurar apn Digi Mobil Naveg@r a velocidad
	 4G en tu movil es muy facil, activa un bono Digi y configura una conexion.')

@section('content')
<section>	
	<div class="container-fluid settings" >
		<div class="row">
			<div class="col-md-6 col-xs-12 text-center">
				<div class="h-60"></div>
				<h1 class="white extra-big ral w-600">Configurar apn Digi Mobil</h1>
				<h2 class="white big w-400">Naveg@r a velocidad 4G en tu movil es 
				muy facil, activa un bono Digi y  configura una conexion</h2>
				<a href="#config" role="button" class="btn btn-danger btn-lg" style="margin-top:40px">Ver configuraciones</a>
			</div>
			<div class="h-60"></div>
		</div>	
	</div>

	<div class="container">
		<div class="row">
			<div class="h-40"></div>
			<div class="col-12" id="config">
				<h3 class="blue big text-center w-400">Configuracion automatica</h3>
				<h4>Primero activa un <b>Digi Combo, Digi Ilimitado o Digi Naveg@</b>. Para que la conexion funcione
					<b>siempre</b> tienen que estar activados el <b>servicio de
					datos y la itinerancia de datos.</b>
				<h4>Hay dos formas de configurar una apn Digi de manera automatica:</h4>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"> 
						<h4 class="text-center"><i class="fas fa-cog big blue text-center"></i></h4>
						<p>Aplicacion <b>Digi Config</b> (solo Android) disponible en 
							<a href="https://play.google.com/store/apps/details?id=com.digimobil.digimobilconfig&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">Google Play <i class="fas fa-link"></i></a>
						</p>.
					</li>
					<li class="list-group-item">
						<h4 class="text-center"><i class="fas fa-comment-alt big blue text-center"></i></h4>
						<p><b>Por SMS</b>: marca<span class="blue"> *148#</span> en el telefono que quieres configurar.
							Recibiras un SMS de configuracion automatica de la apn. <b>No olvides activar 
							los datos y la itinerancia de datos.</b></p>
					</li>
				</ul>
				<h3 id="manual_settings" class="blue big text-center w-400" style="margin-top:30px">Configuracion manual</h3>

				<div id="accordion">
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<i class="fas fa-cog blue"></i>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Configuracion general APN Digi
								</button>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								<h3 class="w-100 ral">
									Si eres un usuario avanzado y conoces tu movil como la palma de la mano, 
									configurar el internet de Digi en tu movil sera facil. Solo tienes que hacer 
									tres pasos:
								</h3>
								<h4 class="w-100">
									<i class="blue fas fa-check" style="margin-right:30px"></i>Datos moviles activados</h4>
								<h4 class="w-100"><i class="blue fas fa-check" style="margin-right:30px"></i>Itinerancia de datos activada</h4>
								<h4 class="w-100"><i class="blue fas fa-check" style="margin-right:30px"></i>Crear un APN con el parametro "internet"</h4>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="headingOne">
							<h4>
								<i class="fab fa-android blue"></i>
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Configurar APN Digi para Android
								</button>
							</h4>
						</div>

						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<p>Esta configuracion vale para todos los moviles con sistema operativo 
									Android. Tienes que crear un punto de acceso a la red 
									(APN) nuevo. En la mayora de los telefonos Android hay que entrar en:
									<b>Ajustes</b> (o Configuracion ) -> <b>Redes moviles</b> (aqui hay que activar "datos moviles" y "itinerancia de datos") -> <b>APN</b> o <b>Punto de acceso</b>. </p>
									<p>Es posible que el menu de tu telefono sea un poco diferente, seguro que 
										encontraras. Una vez encontrado menu <b>APN</b> creamos una conexion nueva con los siguientes parametros, <b>todo en minuscula</b>:
									</p>
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											Nombre: <b class="blue">Digi </b>(o lo que quieras)
										</li>
										<li class="list-group-item">
											Punto de acceso o APN: <b class="bold blue">internet</b>
										</li>
										<li class="list-group-item">
											Usuario: <b class="bold blue">digi</b> (es opcional)
										</li>
										<li class="list-group-item">
											Contraseña: <b class="bold blue">digi</b> (es opcional)
										</li>
									</ul>
									<p>El resto de los campos no se tocan. Ahora guardamos la nueva APN Digi y 
									la activamos pulsando sobre ella.</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<i class="fas fa-mobile blue"></i>
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Configurar APN Digi para iPhone
								</button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<p>Entramos en <b>Ajustes -> Datos moviles</b> (aqui activamos los datos moviles deslizando el boton hacia derecha). Debajo de "Datos moviles" tenemos la pestaña<b>Opciones</b>, entramos y activamos la "Itinerancia de datos".</p>
								<p> Sin salir de "Opciones" seguimos hacia abajo, aqui encontramos la opcion <b>Red de datos moviles</b>, pulsamos sobre ella para entrar. Debajo  "DATOS MOVILES" completamos los siguientes datos, <b>todo en minusculas</b>:</p>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										Punto de acceso: <b class="blue">internet</b>
									</li>
									<li class="list-group-item">
										Usuario: <b class="blue">digi</b> (este paso es opcional)
									</li>
									<li class="list-group-item">
										Contraseña: <b class="blue">digi</b> (este paso es opcional)
									</li>
								</ul>
								<p>Volvemos a la pantalla anterior y la configuracion de APN Digi para iPhone esta 
									lista para usar.
								</p>

							</div>
						</div>
					</div>
				</div>

				<h3 class="blue big text-center w-400" style="margin-top:30px">Resolucion problemas de conexion</h3>
				<p>En esta seccion te ayudamos a resolver los problemas mas comunes con el internet de Digi en el movil.</p>
				<app-faq-configuracion></app-faq-configuracion>
				<div class="h-40"></div>
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