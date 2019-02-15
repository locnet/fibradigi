<template>
	<div class="row" id="showPacks">
		<div class="col-12">
			<h2 class="big w-600 blue text-center">Para empezar, elige un producto de fibra Digi.</h2>
		</div>

		<div class="col-md-6 col-xs-12 pointer">
			<div class="card text-white bg-primary w-80 text-center" 
				@click="setType(30)" data-toggle="modal" data-target="#exampleModal">
				<div class="card-header">
					<h2 class="w-600">FIBRA 500Mb 
							<i class="fas fa-check-circle yellow"
								v-show="activeType == 30"></i></h2>
				</div>
				<div class="card-body">
					<p class="card-text"><i class="fas fa-euro-sign"></i>
						30 euros al mes, IVA incluido.</p>
				</div>
			</div>
		</div>
		<div class="h-30 d-block d-sm-none"></div> <!-- separador, solo para moviles -->

		<div class="col-md-6 col-xs-12 pointer" >
			<div class="card text-white bg-primary w-80 text-center" 
						@click="setType(25)" data-toggle="modal" data-target="#exampleModal">
				<div class="card-header">
					<h2 class="w-600">FIBRA 30Mb
						<i class="fas fa-check-circle yellow"
								v-show="activeType == 25"></i></h2>
				</div>
				<div class="card-body">
					<p class="card-text"><i class="fas fa-euro-sign"></i>
						25 euros al mes, IVA incluido.</p>
				</div>
			</div>
		</div>
		<div class="h-20"></div><!-- separador -->

		
		
		<div class="col-12" v-show="activeType">
			<h2 class="blue">DIGI COMBO</h2>
			<p> Para navegar y llamar a destinos nacionales
			y internacionales (mas de 50 paises)</p>
			<table class="table animated fadeIn">
				
				<tbody>					
					<tr class="combo5 white">
						<td>Combo5</td>
						<td class="d-none d-sm-table-cell">
							100 minutos nacional y internacional, ilimitadas de Digi a Digi
						</td>
					    <td class="d-none d-sm-table-cell">2Gb internet velocidad 4G</td>
						<td>3€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ combo5counter }}</span></td>
						<td class="pointer bgGrey" 
							@click="totalCounter < 4 ? (combo5counter++,totalCounter++) :combo5counter">
							<i class="fas fa-plus-circle"></i>
						</td>
						<td class="pointer bgGrey" 
						 		@click="combo5counter > 0 ? (totalCounter--,combo5counter--) :combo5counter">
							<i class="fas fa-minus-circle" v-show="checkIfVisible(combo5counter)"></i>
						</td>
					</tr>
					<tr class="combo10 white">
						<td>Combo10</td>
						<td class="d-none d-sm-table-cell">
							400 minutos nacional y internacional, ilimitadas de Digi a Digi</td>
					    <td class="d-none d-sm-table-cell">6Gb internet velocidad 4G</td>
						<td>6€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ combo10counter }}</span></td>
						<td class="pointer bgGrey" 
								@click="totalCounter < 4 ? (combo10counter++,totalCounter++) :combo10counter">
							<i 	class="fas fa-plus-circle"></i>
						</td>
						<td class="pointer bgGrey" 
								@click="combo10counter > 0 ? (totalCounter--,combo10counter--) :combo10counter">
							<i class="fas fa-minus-circle" v-show="checkIfVisible(combo10counter)"></i>
						</td>
					</tr>
					<tr class="combo15 white">
						<td>Combo15</td>
						<td class="d-none d-sm-table-cell">
							800 minutos nacional y internacional, Ilimitadas de Digi a Digi</td>
					    <td class="d-none d-sm-table-cell">12Gb internet velocidad 4G</td>
						<td>9€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ combo15counter }}</span></td>
						<td class="pointer bgGrey" 
							@click="totalCounter < 4 ? (combo15counter++,totalCounter++) :combo15counter">
							<i class="fas fa-plus-circle"></i>
						</td>
						<td class="pointer bgGrey" 
						 		@click="combo15counter > 0 ? (totalCounter--,combo15counter--) :combo15counter">
							<i class="fas fa-minus-circle" v-show="checkIfVisible(combo15counter)"></i>
						</td>
					</tr>
					<tr class="combo20 white">
						<td>Combo20</td>
						<td class="d-none d-sm-table-cell"> 
							2000 minutos nacional y internacional, ilimitadas de Digi a Digi</td>
					    <td class="d-none d-sm-table-cell">40Gb internet velocidad 4G</td>
						<td>12€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ combo20counter }}</span></td>
						<td class="pointer bgGrey"
							@click="totalCounter < 4 ? (combo20counter++,totalCounter++) :combo20counter">
							<i class="fas fa-plus-circle"></i>
						</td>
						<td class="pointer bgGrey" 
						 		@click="combo20counter > 0 ? (totalCounter--,combo20counter--) :combo20counter">
							<i class="fas fa-minus-circle" v-show="checkIfVisible(combo20counter)"></i>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="h-30"></div><!-- separador -->
		</div>		
		<div class="col-12" v-show="activeType">
			<h2 class="blue">DIGI ILIMITADO</h2>
				<p> Para navegar y llamar a destinos nacionales</p>
			
			<table class="table animated fadeIn">				
				<tbody>					
					<tr class="mini">
						<td>Mini</td>
						<td class="d-none d-sm-table-cell">
							100 minutos nacionales, ilimitado de Digi a Digi</td>
					    <td class="d-none d-sm-table-cell">1Gb internet velocidad 4G</td>
						<td>2€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ miniCounter }}</span></td>
						<td class="pointer bgGrey" 
							@click="totalCounter < 4 ? (miniCounter++,totalCounter++) :miniCounter">
							<i class="fas fa-plus-circle white"></i>
						</td>
						<td class="pointer bgGrey" 
						 		@click="miniCounter > 0 ? (totalCounter--,miniCounter--) :miniCounter">
							<i class="fas fa-minus-circle white" v-show="checkIfVisible(miniCounter)"></i>
						</td>
					</tr>
					<tr class="ilimitado white">
						<td>Ilimitado 3GB</td>
						<td class="d-none d-sm-table-cell">Llamadas ilimitadas nacionales</td>
					    <td class="d-none d-sm-table-cell">6Gb internet velocidad 4G</td>
						<td>6€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ i10counter }}</span></td>
						<td class="pointer bgGrey" 
								@click="totalCounter < 4 ? (i10counter++,totalCounter++) :i10counter">
							<i 	class="fas fa-plus-circle"></i>
						</td>
						<td class="pointer bgGrey" 
								@click="i10counter > 0 ? (totalCounter--,i10counter--) :i10counter">
							<i class="fas fa-minus-circle" v-show="checkIfVisible(i10counter)"></i>
						</td>
					</tr>
					<tr class="ilimitado white">
						<td>Ilimitado 6GB</td>
						<td class="d-none d-sm-table-cell">Llamadas ilimitadas nacionales</td>
					    <td class="d-none d-sm-table-cell">12Gb internet velocidad 4G</td>
						<td>9€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ i15counter }}</span></td>
						<td class="pointer bgGrey" 
							@click="totalCounter < 4 ? (i15counter++,totalCounter++) :i15counter">
							<i class="fas fa-plus-circle"></i>
						</td>
						<td class="pointer bgGrey" 
						 		@click="i15counter > 0 ? (totalCounter--,i15counter--) :i15counter">
							<i class="fas fa-minus-circle" v-show="checkIfVisible(i15counter)"></i>
						</td>
					</tr>
					<tr class="ilimitado white">
						<td>Ilimitado 12GB</td>
						<td class="d-none d-sm-table-cell">Llamadas ilimitadas nacionales</td>
					    <td class="d-none d-sm-table-cell">40Gb internet velocidad 4G</td>
						<td>12€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ i20counter }}</span></td>
						<td class="pointer bgGrey" 
							@click="totalCounter < 4 ? (i20counter++,totalCounter++) :i20counter">
							<i class="fas fa-plus-circle"></i>
						</td>
						<td class="pointer bgGrey" 
						 		@click="i20counter > 0 ? (totalCounter--,i20counter--) :i20counter">
							<i class="fas fa-minus-circle" v-show="checkIfVisible(i20counter)"></i>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="h-30"></div><!-- separador -->
		</div>
		
		<div class="col-12" v-show="activeType">
			<h2 class="blue">DIGI NAVEG@</h2>
			<p> Para hablar y navegar con las tarifas por minuto mas económicas</p>
			
			<table class="table animated fadeIn">				
				<tbody>					
					<tr class="navega white">
						<td>NAVEG@ 2GB</td>
						<td class="d-none d-sm-table-cell">Llamadas ilimitadas de Digi a Digi</td>
					    <td class="d-none d-sm-table-cell">4GB internet velocidad 4G</td>
						<td>3€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ nav5counter }}</span></td>
						<td class="pointer bgGrey" 
							@click="totalCounter < 4 ? (nav5counter++,totalCounter++) :nav5counter">
							<i class="fas fa-plus-circle white"></i>
						</td>
						<td class="pointer bgGrey" 
						 		@click="nav5counter > 0 ? (totalCounter--,nav5counter--) :nav5counter">
							<i class="fas fa-minus-circle white" v-show="checkIfVisible(nav5counter)"></i>
						</td>
					</tr>
					<tr class="navega white">
						<td>NAVEG@ 5GB</td>
						<td class="d-none d-sm-table-cell">Llamadas ilimitadas de Digi a Digi</td>
					    <td class="d-none d-sm-table-cell">10Gb internet velocidad 4G</td>
						<td>6€ al mes</td>
						<td class="bgGrey"><span class="lightBlue">{{ nav10counter }}</span></td>
						<td class="pointer bgGrey" 
								@click="totalCounter < 4 ? (nav10counter++,totalCounter++) :nav10counter">
							<i 	class="fas fa-plus-circle"></i>
						</td>
						<td class="pointer bgGrey" 
								@click="nav10counter > 0 ? (totalCounter--,nav10counter--) :nav10counter">
							<i class="fas fa-minus-circle" v-show="checkIfVisible(nav10counter)"></i>
						</td>
					</tr>
					
				</tbody>
			</table>
			<div class="h-30"></div><!-- separador -->
		</div>
		
		<div class="col-12" v-show="activeType">
			<h2 class="blue">LINEA DE TELEFONO FIJO</h2>
			<p> Telefono fijo con o sin llamadas incluidas</p>
			
			<table class="table animated fadeIn">				
				<tbody>					
					<tr class="phone white">
						<td>FIJO SIN LLAMADAS</td>
						<td class="d-none d-sm-table-cell">Llamadas a coste por minuto</td>
						<td>1€ al mes</td>
						<td class="bgGrey">
							Selecciona
							<input class="" type="radio"  v-model="phone" value=1>  							
						</td>
					</tr>
					<tr class="phone white">
						<td>FIJO CON LLAMADAS</td>
						<td class="d-none d-sm-table-cell">
							Llamadas ilimitadas nacionales + 500 minutos 	internacionales</td>
						<td>3€ al mes</td>
						<td class="bgGrey">
							Selecciona
							<input class="" type="radio" v-model="phone" value=3>  							
						</td>
					</tr>
					
				</tbody>
			</table>
			<div class="h-20"></div><!--separador-->
		</div>
		
		<div class="col-12" v-show="activeType">
			<h2 class="w-300 blue">¡LO QUE VES ES LO QUE HAY!</h2>
			<h2 class="blue w-600">RESUMEN DEL PRECIO</h2>
			<ul class="list-group">
				<li class="list-group-item"><span class="w-600 blue">Fibra Digi </span>
					{{ activeType == 30 ? '500Mb simetrica ' : '30Mb simetrica' }}
					<span class="blue w-600"> - {{ activeType }} €</span>
				</li>
				<li class="list-group-item" v-show="combo5counter > 0">
					<span class="w-600 blue">{{ combo5counter }} x Combo5 </span>
					(100 minutos nacionales y internacionales + llamadas ilimitadas de Digi a Digi 
					+ 2GB acumulables) - 
					<span class="w-600 blue">{{ combo5counter * 3 }} €</span>
				</li>
				<li class="list-group-item" v-show="combo10counter"> 
					<span class="w-600 blue">{{ combo10counter }} x Combo10</span>
					(400 minutos nacionales y internacionales + llamadas ilimitadas de Digi a Digi 
					+ 6GB acumulables) -
					<span class="w-600 blue">{{ combo10counter * 6 }} €</span>
				</li>
				<li class="list-group-item" v-show="combo15counter"> 
					<span class="w-600 blue">{{ combo15counter }} x Combo15</span>
					(800 minutos nacionales y internacionales + llamadas ilimitadas de Digi a Digi 
					+ 12GB acumulables) -
					<span class="w-600 blue">{{ combo15counter * 9 }} €</span>
				</li>
				<li class="list-group-item" v-show="combo20counter"> 
					<span class="w-600 blue">{{ combo20counter }} x Combo20</span>
					(2000 minutos nacionales y internacionales + llamadas ilimitadas de Digi a Digi 
					+ 40GB acumulables) -
					<span class="w-600 blue">{{ combo20counter * 12 }} €</span>
				</li>
				<li class="list-group-item" v-show="miniCounter"> 
					<span class="w-600 blue">{{ miniCounter }} x Mini </span>
					(100 minutos nacionales + llamadas ilimitadas de Digi a Digi 
					+ 1GB acumulables) -
					<span class="w-600 blue">{{ miniCounter * 2 }} €</span>
				</li>
				<li class="list-group-item" v-show="i10counter"> 
					<span class="w-600 blue">{{ i10counter }} x Ilimitado 3GB</span>
					(llamadas ilimitadas a moviles y fijos de España
					+ 6GB acumulables) -
					<span class="w-600 blue">{{ i10counter * 6 }} €</span>
				</li>
				<li class="list-group-item" v-show="i15counter"> 
					<span class="w-600 blue">{{ i15counter }} x Ilimitado 6GB</span>
					(llamadas ilimitadas a moviles y fijos de España
					+ 12GB acumulables) -
					<span class="w-600 blue">{{ i15counter * 9 }} €</span>
				</li>
				<li class="list-group-item" v-show="i20counter"> 
					<span class="w-600 blue">{{ i20counter }} x Ilimitado 20GB</span>
					(llamadas ilimitadas a moviles y fijos de España
					+ 40GB acumulables) -
					<span class="w-600 blue">{{ i20counter * 12 }} €</span>
				</li>
				<li class="list-group-item" v-show="nav5counter"> 
					<span class="w-600 blue">{{ nav5counter }} x NAVEG@ 2GB </span>
					(llamadas ilimitada de Digi a Digi + 4GB acumulables) - 
					<span class="w-600 blue"> {{ nav5counter * 3 }} €</span>
				</li>
				<li class="list-group-item" v-show="nav10counter"> 
					<span class="w-600 blue">{{ nav10counter }} x NAVEG@ 5GB </span>
					(llamadas ilimitada de Digi a Digi + 10GB acumulables) - 
					<span class="w-600 blue"> {{ nav10counter *  6 }}€</span>
				</li>
				<li class="list-group-item" v-show="phone == 1"> 
					<span class="w-600 blue">1 linea fija</span> con llamadas a 
					coste por minuto - <span class="w-600 blue"> 1€</span>					
				</li>
				<li class="list-group-item" v-show="phone == 3"> 
					<span class="w-600 blue">1 linea</span> fija con llamadas ilimitadas a
					fijos y moviles de España + 500 minutos internacionales
					- <span class="w-600 blue"> 3€</span>					
				</li>
				<li class="list-group-item" v-show="activeType">
					<span class="big w-600 blue">TOTAL {{ getTotal() }}€</span> IVA incluido /
					precio para toda la vida
				</li>
				<li class="list-group-item">
					<button class="btn btn-warning bt-lg" @click="resetAll">EMPEZAR OTRA VEZ</button>

					<a v-bind:href="contact_url" role="button" class="btn btn-primary bt-lg float-right">
					ME ENTERESA MUCHO</a>
				</li>
			</ul>
		</div>
		<div class="h-30"></div><!-- separador-->
	

		<!-- MODAL FIBRA -->
		<div class="col-12">
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
						aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h4 class="w-300 blue" v-if="activeType">Has seleccionado la 
								<b>Fibra Digi de {{ activeType == 30 ? '500Mb' : '30Mb' }}</b>.
									Para que empiece la magia combinala con cualquier producto de 
									telefonia movil Digi.</h4>
								<h4 class="w-300 blue">
									Puedes asociar hasta 4 productos diferentes junto con la fibra.
								</h4>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">CERRAR</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>

export default {
	props: ['contact_url'],
	data() {
		return {
			activeType: '',
			combo5counter: 0,
			combo10counter: 0,
			combo15counter: 0,
			combo20counter:0,
			miniCounter: 0,
			i5counter: 0,
			i10counter: 0,
			i15counter: 0,
			i20counter:0,
			nav5counter:0,
			nav10counter: 0,
			totalCounter: 0,
			phone: 0,
			totalPrice: 0
		}
	},
	methods: {
		setType(type) {
			this.activeType = type;
			console.log("modalidad fibra seleccionado");
		},
		checkIfVisible(comboCounter) {
			return comboCounter > 0;
		},
		getTotal() {
			// precio total
			var t = 0;

			// total servicios que cuestan 2 €, tarifa MINI
			if ( this.miniCounter > 0) {
				t += this.miniCounter * 2;
			}

			// total servicios que cuestan 3€, combo 5 y navega 2gb
			var y = this.combo5counter + this.nav5counter;
			if (y > 0) {
				t += (y * 3);
			}
			
			// sumo todos los servicios que cuestan 6 €, combo 10, ilimitado 10 y navega 5gb
			var x = this.combo10counter + this.i10counter + this.nav10counter;
			if (x > 0) {
				t += (x * 6);
			}

			// servicios que cuestan 9€ 
			var z = this.combo15counter + this.i15counter;
			if (z > 0) {
				t += (z * 9);
			}

			// servicio que cuestan 12€
			var w = this.combo20counter + this.i20counter;
			if (w > 0) {
				t += (w * 12);
			}

			// precio telefonia fija
			if (this.phone > 0 ) {
				t += parseInt(this.phone);
			}
			this.totalPrice = t;
			return t + this.activeType;
		},
		resetAll() {
			this.combo5counter = 0;
			this.combo10counter = 0;
			this.combo15counter = 0;
			this.combo20counter = 0;
			this.i10counter = 0;
			this.i15counter = 0;
			this.i20counter = 0;
			this.miniCounter = 0;
			this.nav5counter = 0;
			this.nav10counter = 0;
			this.phone = 0;
			this.activeType = 0;
		}
	},
	
}
</script>