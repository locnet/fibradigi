<template>

	<div class="col-12">
		<div class="h-30"></div>
		<p class="blue pointer">Mira lo que has elegido <i class="fas fa-angle-down blue"></i></p>
		<table class="table">
			<tbody>
				<tr  v-show="internetPrice == 30">
					<td>
						<p>Fibra optica {{ fibra500.gb }}</p>
					</td>
					<td>
						<p class="blue w-600">{{ fibra500.price }}€ 
							<span class="extra-small">/mes</span> 
						</p>
					</td>
				</tr>
				<tr v-show="internetPrice == 25">
					<td>
						<p >Fibra optica {{ fibra50.gb }} </p>
					</td>
					<td>
						<p class="blue w-600">{{ fibra50.price }}€
							<span class="extra-small">/mes</span>
						</p>
					</td>
				</tr>
				<tr v-show="phonePrice == 1">
					<td>
						<p >Telefono fijo <br />
							<span class="text-danger extra-small" style="padding-top:0px; margin-top: 0px">{{ fijoSinLlamadas.minutes }} </span>
						</p>
						
					</td>
					<td>
						<p class="blue w-600">{{ fijoSinLlamadas.price }}€
							<span class="extra-small">/mes</span>
						</p>
					</td>
				</tr>

				<tr v-show="phonePrice == 3 || phonePrice == 5">
					<td>
						<p >Telefono fijo </p>						
					</td>
					<td>
						<p class="blue w-600">{{ phonePrice }}€ 
							<span class="extra-small">/mes</span>
						</p>
					</td>
				</tr>

				<tr v-for="mobile in mobColection">

					<td v-show="mobColection.length > 0">
						
						<p> Movil {{ mobile.name }} <br />
							<span class="blue extra-small" style="padding-top:0px; margin-top: 0px">
							{{ mobile.minutes }} min y
							{{ checkGb(mobile.gb) }}GB </span>
						</p>
						
					</td>

					<td v-show="mobColection.length > 0">
						<p class="blue w-600">{{ getMobilePrice(mobile.price) }}€
							<span class="extra-small">/mes</span>
						</p>
					</td>
				</tr>

			</tbody>
		</table>
		</p>
		
		<h1 class="big">
			<span class="w-600">{{ totalPrice }} €</span><span class="small"> IVA incl.</span>
		</h1>
		<p class="blue" v-show="internetPrice > 0"> Por tener la fibra en el pack te ahorras {{ totalDiscount }} euros.</p>
	</div>


</template>

<script>
	import { eventBus } from "../../../app";

	import { productMixin } from "../../../productMixin";

	export default {

		mixins: [productMixin], // lista de precios centralizada

		props: {
			//totalPrice: Number,

		},

		data() {
			return {
				internetPrice: 0,
				phonePrice: 0,
				mobColection: [],
				totalPrice: 0,
				totalDiscount: 0

			};
		},

		methods: {

			// devuelve el precio total
			getTotalPrice() {
				return this.internetPrice + this.phonePrice + this.getTotalMobilePrice();
			},

			/**
			* @param int x, los gigas
			* si el usuario a elegido una fibra se doblan los gigas 
			*/
			checkGb(x) {

				if (this.internetPrice) {
					return 2*x;
				}
				return x;
			},

			/**
			* @ param int price
			* @ return int
			* devuelve el precio con o sin descuento segun 
			* si tenemos fibra o no en el paquete
			*/
			getMobilePrice(price) {
				if (this.internetPrice) {
					// tenemos la fibra seleccionada

					if (price == 3) {
						// tengo la tarifa mini, el descuento no es exactamente
						// del 40%, estoy obligado ha hacer un apaño
						return 2;
					}

					return price - (price * this.discount);
				}

				return price;
			},

			/**
			* @return int
			* devuelve el precio total de los moviles incluidos en el paquete
			*/
			getTotalMobilePrice() {

				var mobilesPrice = 0;
				var l = this.mobColection.length;
				
				for (var i = 0; i < l; i++) {
					mobilesPrice += this.getMobilePrice(this.mobColection[i].price);
						
				}
				
				return mobilesPrice;
			},

			getTotalDiscount() {
				var x = 0;
				var t = 0;
				for (var i = 0; i < this.mobColection.length; i++) {
					x += this.mobColection[i].price;
						
				}
				t += x - this.getTotalMobilePrice();
				return t;
			}	

		},

		created() {
			
			eventBus.$on('internetPriceWasChanged', (data) => {

				this.internetPrice = data[0];
				this.phonePrice = data[1];
				this.totalPrice = this.getTotalPrice();	
				this.totalDiscount = this.getTotalDiscount();			

			});

			// evento que escucha los cambios en el precio de los moviles
			eventBus.$on('mobilePriceWasChanged', (data) => {

				// el parametro data es un array con estructura:
				// 0 - action (add o destroy)
				// 1 - index
				// 2 - objeto {name,price,minutes,gb}

				var action = data[0];	      // acction
				var index = data[1];              // index
				var mobObj = data[2];              // mobil {name,price,minutes,gb}      

				// si la accion es 'add'
				if (action == 'add') {
					// si el index existe, actualizamos el precio
					if (this.mobColection[index]) {
						this.mobColection[index] = mobObj;
					} else {
						// el index no existe, añadimos al final del array
						this.mobColection.push(mobObj);
					}

				} else if (action == 'destroy') {
					// se ha eliminado un movil en Movil.vue
					// creo una copia exacta de mobColection
					var copy = [] = this.mobColection;
					
					// limpio los elementos del array original
					this.mobColection = []; // array limpio

					// reconstruio el array eliminando el index que se ha pasado
					// desde otro componente
					for (var i = 0; i < copy.length; i++) {
						if (i != index) {
							this.mobColection.push(copy[i]);
						}
					}
				} else {

					// si no tenemos accion, tenemos un error
					console.log('No he encontrato la accion');
				}

				this.totalPrice = this.getTotalPrice();
				this.totalDiscount = this.getTotalDiscount();
			});

			// evento para poner a zero el precio de todos los moviles
			eventBus.$on('resetMobilePrice', () => {

				this.mobColection = [];

				this.totalPrice = this.getTotalPrice();

				this.totalDiscount = this.getTotalDiscount();
			});

		}
	}
</script>