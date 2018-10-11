<template>

		<div id="accordion">
			<div class="card">
				<div class="card-header" id="divOne">
					<h5 class="mb-0">
						<i class="fas fa-broadcast-tower blue"></i>
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseDivOne" aria-expanded="false" aria-controls="collapseDivOne">
							Tengo megas pero el internet no va
						</button>
					</h5>
				</div>
				<div id="collapseDivOne" class="collapse" aria-labelledby="divOne" data-parent="#accordion">
					<div class="card-body">
						<h4>Si el internet de Digi no va comprueba esto: </h4>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Comprueba si te quedan megas para navegar. Marca 
							<b>*134#</b> en tu telefono, te llegara un mensaje con el estado de tu bono. Si tienes megas para navegar sigue leyendo.</li>
							<li class="list-group-item">
								Comprueba que tienes los <b>datos moviles</b> y la <b> intinerancia de datos</b>
							activadas. Es posible que en algunos models "itinerancia de datos" aparezca como "roaming de datos". Si ya los tenias activados sigue leyendo.</li>
							<li class="list-group-item">Comprueba que el <b>APN</b> esta corectamente configurado
								y que esta activado. Lee <a href="#manual_settings">como configurar una APN Digi. </a>
								Si tienes mas de una conexion de datos (APN) asegurate que 
							la que esta activa es la de Digi.</li>
							<li class="list-group-item">Si tienes un telefono con doble sim asegurate que 
								la conexion de datos que esta activa es la de APN Digi.</li>
						</ul>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="divTwo">
						<h4>
							<i class="fas fa-tachometer-alt blue"></i>
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseDivTwo" aria-expanded="true" aria-controls="collapseDivTwo">
								El internet va muy lento
							</button>
						</h4>
					</div>

					<div id="collapseDivTwo" class="collapse" aria-labelledby="divTwo" data-parent="#accordion">
						<div class="card-body">
							<h4>Si el internet Digi va lento comprueba esto: </h4>
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<b>Asegurate que los megas que te quedan son a maxima velocidad.</b>
										Es posible que hayas terminado los megas a maxima velocidad y solo te quedan los megas a velocidad minima.
									</li>
									<li class="list-group-item">
										<b>Comprueba la configuracion de la APN Digi.</b> Hemos notado que configurando la APN como "internet" (en minusculas y sin comillas) funciona mejor que "internet.digimobil.es". Despues de hacer el cambio pon el movil en modo avion durante 5 secundos y luego quita el modo avion.
									</li>
									<li class="list-group-item">
										Si tu telefono es 4G comprueba que el ajuste de tipo preferido de red 
										sea <b>4G</b> o <b>LTE</b>.
									</li>
									<li class="list-group-item">
										Si despues de comprobar todo esto el internet Digi sigue lento intenta 
										esto: borra la APN de Digi y reinicia el movil. Cuando arranca configura 
										una conexion de datos nueva siguiendo estas <a href="#config"><b>intrucciones
										</b></a>.
									</li>
								</ul>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</template>