<template>
	<div>
		<div class="form-row">
			<p class="yellow">{{ confirm_email}}
			</p>
		</div>
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
				<label for="city" class="xs-hidden">Codigo postal</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-map-marker-alt"></i>
						</div>
					</div>
				
					<input type="number" 
							pattern="[0-9"
							title="Codigo postal, solo digitos"
							maxlength=5
							v-bind:class="[formControl,
								{'is-invalid': hasErrors.post_code !== undefined }]"
							name="post_code"
							v-bind:value="post_code"
							placeholder="Codigo postal" required />
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
							v-model="first_email"
							placeholder="Correo" required />
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
							v-model="second_email"
							v-on:keyup="checkEmail"
							placeholder="Confirma correo" required />

					
				</div>
				<div>
         				<p class="yellow">{{ error_message }}</p>
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
	props:['first_name','phone','email','confirm_email','post_code','errors'],
	data() {
		return {
			hasErrors: JSON.parse(this.errors),
			formControl: 'form-control',
			inputGroup: 'input-group',
			first_email: this.email,
			second_email: this.confirm_email,
			error_message: ''
		}
	},
	methods: {
		checkEmail: function(e) {
			if (this.first_email != this.second_email) {
				this.error_message = "El correo electronico nu coincide";
			} else {
				this.error_message = "¡Estupendo!";
			}
		}
	}
};
</script>