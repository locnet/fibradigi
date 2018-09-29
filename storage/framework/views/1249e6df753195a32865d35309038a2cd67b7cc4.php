<?php $__env->startSection('title','Fibra Digi Mobil | La mejor fibra optica del mercado'); ?>

<?php $__env->startSection('meta_description','Ya esta disponible la mejor fibra del mercado en cuanto a
la relacion calidad/precio. Nuestra fibra tiene precio imbatibles y la calidad de la 
infraestructura de Movistar.'); ?>

<?php $__env->startSection('content'); ?>
<section>
	<div class="container-fluid portada">
		<div class="row align-items-center portada-info">
			<div class="col-12">
				<h1 class="text-center extra-big ral w-600 white">FIBRA DIGI MOBIL</h1>
				<h2 class="text-center w-300 white">
					¡Ya esta aqui la mejor fibra del mercado! Internet de verdad, sin trucos.
				</h2>
				<p class="text-center yellow">Disponible solo en la Comunidad de Madrid</p>
			</div>
			<div class="col-12">
				<div class="h-30"></div><!-- separador -->
				<h2 class="text-center big ral w-600 white">
					500Mb <span class="yellow">30€/mes</span>
					<span class="small">IVA incluido / permanencia 12 meses</span>
				</h2>
				<h2 class="text-center big ral w-600 white">
					30Mb - <span class="yellow">25€/mes</span> 
					<span class="small">IVA incluido / permanencia 12 meses</span>
				</h2>
			</div>
			
			<div id="suscribe" class="col-md-8 col-xs-12 offset-md-2">	
				
				<form  action="<?php echo e(url('/fibra/lista-espera')); ?>" method="POST"
						class="needs-validation"  novalidate>
					<?php echo e(csrf_field()); ?>

									
					<!-- vue component -->
					<app-form-lista-espera
						first_name="<?php echo e(old('first_name')); ?>"
						phone = "<?php echo e(old('phone')); ?>"
						post_code = "<?php echo e(old('post_code')); ?>"
						email = "<?php echo e(old('email')); ?>"
						cofirm_email = "<?php echo e(old('confirm_email')); ?>"
						errors = "<?php echo e($errors); ?>">

					</app-form-lista-espera>
				</form>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="h-50"></div>
			<div class="col-12">
				<h1 class="big w-600 text-center blue">
					#LO QUE VES ES LO QUE HAY
				</h1>
				<p class="big ral w-100">No tenemos letra pequeña en nuestros productos. Si 
					te decimos que la Fibra Digi 500Mb cuesta 30€/mes es realmente lo que cuesta: 
					solo 30 € IVA incluido. Tambien te decimos claro que la instalacion es gratuita
					a cambio de 12 meses de permanencia. Sin trucos.
				</p>
				<p class="big ral w-100">Desde el 19 de septiembre hemos lanzado nuestro servicio
					de fibra. De momento la fibra esta disponible solo en la Comunidad de Madrid.
					Poco a poco estara disponible para toda España.
				</p>
			</div>
			<div class="h-50"></div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<h1 class="big w-600 text-center blue">FIBRA DIGIMOBIL - INTERNET DE VERDAD</h1>
			</div>

			<div class="h-30"></div><!--separador-->

			<div class="col-md-6 col-xs-12">
				<div class="card text-white bg-primary w-80 text-center">
					<div class="card-header">
						<h2 class="w-600">FIBRA 500Mb</h2>
					</div>
					<div class="card-body">
						<p class="card-text"><i class="fas fa-euro-sign"></i>
							30 euros al mes, IVA incluido.
						<p class="card-text"><i class="fas fa-rocket"></i> 
							500Mb de subida y bajada.</p>
						<p class="card-text"><i class="fas fa-wifi"></i>
							Router wi-fi incluido</p>
						<p class="card-text"><i class="fas fa-cogs"></i>
							Instalacion gratuita.</p>
						<p class="card-text"><i class="fas fa-info-circle"></i>
							Precio para siempre. Permanencia 12 meses.</p>
					</div>
				</div>
			</div>
			<div class="h-30 d-block d-sm-none"></div> <!-- separador, solo para moviles -->

			<div class="col-md-6 col-xs-12">
				<div class="card text-white bg-primary w-80 text-center">
					<div class="card-header">
						<h2 class="w-600">FIBRA 30Mb</h2>
					</div>
					<div class="card-body">
						<p class="card-text"><i class="fas fa-euro-sign"></i>
							25 euros al mes, IVA incluido.
						<p class="card-text"><i class="fas fa-rocket"></i> 
							30Mb de subida y bajada.</p>
						<p class="card-text"><i class="fas fa-wifi"></i>
							Router wi-fi incluido.</p>
						<p class="card-text"><i class="fas fa-cogs"></i>
							Instalacion gratuita</p>
						<p class="card-text"><i class="fas fa-info-circle"></i>
							Precio para siempre. Permanencia 12 meses.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_js'); ?>
<script>
	var scroll = new SmoothScroll('a[href*="#"]',{
		speed:1000,
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>