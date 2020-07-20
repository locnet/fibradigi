<template>
	<div class="row" id="showPacks">
		<div class="h-30"></div>
		<div class="col-12">
			<h2 class="big w-600 blue text-center">Elige un producto de fibra Digi...</h2>
		</div>

		<div class="col-6 text-center">
			<button class="btn btn-primary btn-lg" style="width:100%" @click="setFiber('digi500')">
				<h3 class="w-600 yellow">FIBRA 500Mb - 30€</h3>
			</button>
		</div>
		<div class="col-6 text-center">
			<button class="btn btn-primary btn-lg" style="width: 100%" @click="setFiber('digi30')">
				<h3 class="w-600 yellow">FIBRA 30Mb - 25€</h3>
			</button>
		</div>
		<div class="h-20"></div><!-- separador -->

		<div class="col-12">
			<h2 class="w-300 blue text-center">...y combinalo con cualquier producto de telefonia 
			movil Digi.</h2>
		</div>
		
		<div class="col-6 text-center">
			<button class="btn btn-primary btn-lg" style="width:100%" @click="setActive('internacional')">
				<h3 class="w-600 yellow">LLAMADAS INTERNACIONALES</h3>
			</button>
		</div>
		<div class="col-6 text-center">
			<button class="btn btn-primary btn-lg" style="width: 100%" @click="setActive('nacional')">
				<h3 class="w-600 yellow">LAMADAS NACIONALES</h3>
			</button>
		</div>
		<div class="h-30"></div><!-- separador -->

		<div class="col-12" v-show="checkActive('internacional500')">

			<table class="table animated fadeIn">
				<thead class="blue">
					<th scope="col">COMBINACION</th>
					<th scope="col">MINUTOS INTERNACIONALES</th>
					<th scope="col">INTERNET MOVIL</th>
					<th scope="col">LLAMADAS DE DIGI A DIGI</th>
					<th scope="col">PRECIO FINAL</th>
				</thead>
				<tbody>					
					<tr class="combo5 white">
						<td>Fibra 500Mb + Combo5</td>
						<td>100 minutos</td>
					    <td>2Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>32€ al mes</td>
					</tr>
					<tr class="combo10 white">
						<td>Fibra 500Mb + Combo10</td>
						<td>400 minutos</td>
					    <td>6Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>36€ al mes</td>
					</tr>
					<tr class="combo15 white">
						<td>Fibra 500Mb + Combo15</td>
						<td>800 minutos</td>
					    <td>12Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>39€ al mes</td>
					</tr>
					<tr class="combo20 white">
						<td>Fibra 500Mb + Combo20</td>
						<td>2000 minutos</td>
					    <td>40Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>42€ al mes</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-12"  v-show="checkActive('internacional30')">
			<table class="table animated fadeIn">
				<thead class="blue">
					<th scope="col">COMBINACION</th>
					<th scope="col">MINUTOS INTERNACIONALES</th>
					<th scope="col">INTERNET MOVIL</th>
					<th scope="col">LLAMADAS DE DIGI A DIGI</th>
					<th scope="col">PRECIO FINAL</th>
				</thead>
				<tbody>					
					<tr class="combo5 white">
						<td>Fibra 30Mb + Combo 5</td>
						<td>100 minutos</td>
					    <td>2Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>27€ al mes</td>
					</tr>
					<tr class="combo10 white">
						<td>Fibra 30Mb + Combo 10</td>
						<td>400 minutos</td>
					    <td>6Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>31€ al mes</td>
					</tr>
					<tr class="combo15 white">
						<td>Fibra 30Mb + Combo 15</td>
						<td>800 minutos</td>
					    <td>12Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>34€ al mes</td>
					</tr>
					<tr class="combo20 white">
						<td>Fibra 30Mb + Combo 20</td>
						<td>2000 minutos</td>
					    <td>40Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>37€ al mes</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-12" v-show="checkActive('nacional500')">

			<table class="table animated fadeIn">
				<thead class="blue">
					<th scope="col">COMBINACION</th>
					<th scope="col">MINUTOS NACIONALES</th>
					<th scope="col">INTERNET MOVIL</th>
					<th scope="col">LLAMADAS DE DIGI A DIGI</th>
					<th scope="col">PRECIO FINAL</th>
				</thead>
				<tbody>					
					<tr class="combo5 white">
						<td>Fibra 500Mb + Mini</td>
						<td>100 minutos</td>
					    <td>2Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>32€ al mes</td>
					</tr>
					<tr class="combo10 white">
						<td>Fibra 500Mb + Ilimitado10</td>
						<td>Ilimitados</td>
					    <td>6Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>36€ al mes</td>
					</tr>
					<tr class="combo15 white">
						<td>Fibra 500Mb + Ilimitado15</td>
						<td>Ilimitados</td>
					    <td>12Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>39€ al mes</td>
					</tr>
					<tr class="combo20 white">
						<td>Fibra 500Mb + Ilimitado20</td>
						<td>Ilimitados</td>
					    <td>40Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>42€ al mes</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-12"  v-show="checkActive('nacional30')">
			<table class="table animated fadeIn">
				<thead class="blue">
					<th scope="col">COMBINACION</th>
					<th scope="col">MINUTOS NACIONALES</th>
					<th scope="col">INTERNET MOVIL</th>
					<th scope="col">LLAMADAS DE DIGI A DIGI</th>
					<th scope="col">PRECIO FINAL</th>
				</thead>
				<tbody>					
					<tr class="combo5 white">
						<td>Fibra 30Mb + Mini3</td>
						<td>100 minutos</td>
					    <td>1Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>27€ al mes</td>
					</tr>
					<tr class="combo10 white">
						<td>Fibra 30Mb + Ilimitado10</td>
						<td>Ilimitados</td>
					    <td>6Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>31€ al mes</td>
					</tr>
					<tr class="combo15 white">
						<td>Fibra 30Mb + Combo 15</td>
						<td>Ilimitados</td>
					    <td>12Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>34€ al mes</td>
					</tr>
					<tr class="combo20 white">
						<td>Fibra 30Mb + Combo 20</td>
						<td>Ilimitados</td>
					    <td>40Gb internet velocidad 4G</td>
						<td>Ilimitadas</td>
						<td>37€ al mes</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-12">
			<h3 class="w-400 ral blue">Puedes combinar hasta cuatro lineas de movil con tu fibra.</h3>
		</div>
	</div>
</template>
<script>
export default {
	data() {
		return {
			activeLayout: false,
			activeFiber: false,
			activeCombo: false
		}
	},
	methods: {
		checkActive(id) {
			if (this.activeLayout == 'internacional') {
				if (this.activeFiber == 'digi500' && id == 'internacional500') {
					return true;
				} else if (this.activeFiber == 'digi30' && id == 'internacional30') {
					return true;
				}
			
			} else if (this.activeLayout == 'nacional') {
				if (this.activeFiber == 'digi500' && id == 'nacional500') {
					return true;
				} else if (this.activeFiber == 'digi30' && id == 'nacional30') {
					return true;
				}
			}
			return false;
		},
		setFiber(type) {
			this.activeFiber = type;
			console.log('fiber: ' +this.activeFiber);
		},
		setActive(id) {
			this.activeLayout = id;
			console.log('active layout: '+id);
		}
	}
}
</script>