<template>

	<section class="productBox">
		<div class="row">
			<div class="col-md-2 col-8 col-sm-8">
				<h5 class="blue"><i class="fas fa-mobile-alt yellow"></i> Movil</h5>
			</div>

			<div class="col-md-2 col-4 col-sm-4 align-items-top">
					<!-- Rounded switch -->
					<label class="switch">
						<input type="checkbox" v-model="switchMovil" 
								@click="mobileToggleButton(switchMovil = !switchMovil)">
						<span class="slider round"></span>
					</label>
			</div>
			<!-- container moviles -->
			<div class="col-md-8 col-12 col-sm-12 mt-3 mt-md-0">
			
				<section v-show="getMobileColectionLength">

					<div class="row" v-for="(index,key) in mobileColection">

						<div class="col-10 col-sm-10 col-md-10 mb-3 border pointer"
								@click="setSelectedMobileIndex(key)"
								data-toggle="modal" 		
								data-target="#exampleModal"
								>

							<h4 class="text-center m-3" 
								v-show="index.price == 0">Elige una tarifa </h4>

							<div  class="row text-center align-items-center"
									 v-show="index.price > 0">

								<div class="col-4" >

									<p><strong>{{ index.name }} </strong></p>

								</div>

								<div class="col-4">
									<p class="blue bold align-middle">
										{{ index.minutes }} 
										{{ index.minutes[0] == 'I' ? '' : 'min' }}<br/>
										{{ index.gb }}GB
									</p>
								</div>

								<div class="col-4 p-3" :class="[activeClass[key]]" >
									<h3 class="white w-600 align-middle">
										{{ index.price}}€<span class="small">/mes</span></h3>

								</div>
							</div>
							
							<!--	
							<div class="col-12">
								<button type="button" class="btn btn-outline-primary " 
								         data-toggle="modal" 		
								         data-target="#exampleModal"
								         @click="setSelectedMobileIndex(key)">

								  	{{ index.price > 0 ? 'Cambia tarifa' : 'Elige una tarifa' }}
								  	
								</button>
							</div>
						-->
						</div>
						<div class="col-2 text-right">
							<span class=" align-middle">
								<i class="fas fa-trash red mt-4" 
									@click="destroyView(key)"></i>
							</span>
						</div>
					</div>

				</section>
				<div class="col-md-12 col-12 col-sm-12" v-show="switchMovil && phoneCounter < 4">
					<p @click="addNewMobileView" class="pointer" 
						style="margin-top:20px">
						<i class="fas fa-plus-circle green" style="font-size: 26px"></i> 
						Añadir movil
					</p>
						
				</div>
			</div>		

		</div>
		<app-modal-tarifas 
				:selectedMobileIndex="selectedMobileIndex"></app-modal-tarifas>
	</section>


</template>

<script>
	import { eventBus } from "../../../app";

	import { productMixin } from "../../../productMixin";
	
	export default {

		data() {
			return {
				switchMovil: false,      // controla la visibilidad de todo el container
				phoneCounter: 0,         // contador vistas activas

				mobileColection: [],     // array que contiene los moviles	
				cleanColection: [],       // array "espejo" de mobileColection
				selectedMobileIndex: false,
				activeClass: [],
				internetPrice: 0
			}
		},

		methods: {

			/**
			* @param v boolean, true o false segun el estado del boton switch
			*/

			mobileToggleButton(v) {

				if (!v) {
					
					// pongo el contador de vistas a zero
					this.phoneCounter = 0;

					// limpiamos las dos colecciones
					this.cleanColection = [];        
					this.mobileColection = [];

					// reset a 0 el precio de los moviles
					eventBus.$emit('resetMobilePrice');	
				}
			},

			/**
			* cada vez que el boton es pulsado  
			* activa un telefono movil a la vez
			*/
			addNewMobileView() {

				if (this.phoneCounter < 4) {

					var m = {name: '', price: '0', minutes:'', gb: ''};

					// creamos un nuevo elemento en el array, que sera el ultima
					// en js cuando se borra un elemento no afecta la longitud del array,
					// el elemento sigue ocupando su posicion pero con falor false
					this.mobileColection.push(m);

					
					// incremento el contador de vistas activas
					this.phoneCounter++;
				}
			}, 

			/**
			* @param int index, posicion de la vista a esconder
			*/

			destroyView(pos) {
				
				// el metodo splice elimina completamente un elemento y
				// reorganiza el array
				// el primer parametro es la posicion y el segundo el 
				// numero de elementos a borrar

				this.mobileColection.splice(pos, 1);
				/*
				for (var i = 0; i < copy.length; i++) {

					if (i != index) {
						this.mobileColection.push(copy[i]);
					} 

				}*/
				console.log("index to destroy",pos);
				// el evento mobilePriceWasChanged esta declarado en PriceComponent
				// toma como argumento un array con la estructura
				// 0 - action (add o destroy)
				// 1 - index (posicion en el array de los moviles)
				// 2 - objeto a destruir
				var i = ['destroy', pos, this.mobileColection[pos]];
			    eventBus.$emit('mobilePriceWasChanged', i);

			    // actualizar el counter de los moviles
				this.phoneCounter--;
				
			},

			/**
			* @param int index
			* funcion que actualiza el valor de selectedMobileIndex
			* que se pasa como parametro al compontente ModalTarifas
			*/

			setSelectedMobileIndex(index) {

				this.selectedMobileIndex = index;

			},

			priceCalculator (p) {
				if (this.internetPrice > 0) {
					return p - (p * 0.4);
				}
				return p;
			}

		},
		computed: {

			getMobileColectionLength: function() {

				return this.mobileColection.length;
			},

			getMobileColection: function() {

				return this.mobileColection;
			}
			
		},

		created() {
			eventBus.$on('internetPriceWasChanged', (data) => {
				this.internetPrice = data[0];
				console.log('from mobil event:',this.discount);
			});

			eventBus.$on('priceWasSetted', (data) => {
				// data e un array en formato [index, name, precio, minutos, gigas, clase css]
				var i = data[0];
				if (i >= 0) {
					this.mobileColection[i].name = data[1];
					this.mobileColection[i].price = this.priceCalculator(data[2]);
					this.mobileColection[i].minutes = data[3];
					this.mobileColection[i].gb = data[4];
					this.activeClass[i] = data[5];


					console.log("event priceWasSetted", this.mobileColection[i].price);
				}
			});
			
		}
	}
</script>