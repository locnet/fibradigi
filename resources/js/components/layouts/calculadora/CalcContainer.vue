<template>

	<div class="row">
		<div class="col-12 col-sm-12 col-md-8">
			<!-- componente calculadora -->
			<app-fibra></app-fibra>

			<div class="h-20"></div>
			
			<app-movil></app-movil>
		</div>
		<div class="col-12 col-sm-12 col-md-4">
			<app-price-component
				:totalPrice="totalPrice">
			</app-price-component>
		</div>
	</div>

</template>

<script>

import { eventBus } from "../../../app";

export default {

	data() {
		return {
			totalPrice: 0,
		}
	},

	methods: {

	},
	created() {

		eventBus.$on('internetPriceHasChanged', (price) => {

			this.totalPrice = price;

		});

		eventBus.$on('phone')
	}
}

</script>