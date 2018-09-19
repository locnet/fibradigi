<template>
	<div>
		<div class="form-row">	
			
			<div class="col-md-4 col-xs-12">
				<label for="phone">Nombre</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
					<input type="text" 
							v-bind:class="[formControl,
                        		{'is-invalid': hasErrors.first_name !== undefined }]"
							name="first_name" 
							v-bind:value="first_name" 
							placeholder="Nombre" required>
				</div>
			</div>

			<div class="col-md-4 col-xs-12">
				<label for="phone">Telefono</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-phone"></i>
						</div>
					</div>
					<input type="tel"
							tigle="Solo digitos"
							v-bind:class="[formControl,
                        		{'is-invalid': hasErrors.phone !== undefined }]"
							name="phone" 
							v-bind:value="phone" 
							placeholder="Telefono" required>
				</div>
			</div>

			<div class="col-md-4 col-xs-12">
				<label for="city">Codigo postal</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-map-marker-alt"></i>
						</div>
					</div>
					<input type="number"
							pattern="[0-9]"
							title="Solo digitos"
							maxlength=5 
							v-bind:class="[formControl,
                        		{'is-invalid': hasErrors.city !== undefined }]"
							name="city"
							v-bind:value="city"
							placeholder="Codigo postal" required>

					<div class="invalid-feedback">
			        	Introduzca un codigo postal
			        </div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="col-md-6 col-xs-12">
				<label for="email">Correo electronico</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-at"></i>
						</div>
					</div>
					<input type="email"
							name="email"
							v-bind:class="[formControl,
                        		{'is-invalid': hasErrors.email !== undefined }]"
							v-bind:value="email"
							placeholder="Correo" required>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<label for="confirm_email">Confirma correo electronic</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-at"></i>
						</div>
					</div>
					<input type="email" 
							name="confirm_email"
							v-bind:class="[formControl,
                        		{'is-invalid': hasErrors.confirm_email !== undefined }]"
							v-bind:value="confirm_email" 
							placeholder="Confirma correo" required>
				</div>
			</div>
		</div>

		<div class="h-30"></div> <!-- separador -->

		<div class="col-12">
			<p class="text-center">
				<button class="btn btn-warning btn-lg" type="submit">
					QUIERO QUE ME LLAMEN
				</button>
			</p>
		</div>
	</div>
</template>

<script>
export default {
	props:['first_name','phone','email','city','errors'],
	data() {
		return {
			hasErrors: JSON.parse(this.errors),
			formControl: 'form-control',
			inputGroup: 'input-group',
			confirm_email: ''
		}
	},
	created() {
		console.log(this.hasErrors.email);
	}
};
</script>