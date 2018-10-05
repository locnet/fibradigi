<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content=" <?php echo $__env->yieldContent('meta_description'); ?> ">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Styles / Bootstrap import-->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet">
   
</head>
<body>
    <div id="app">
        <!-- Vue component MainMenu -->
        <app-main-menu
            main-url="<?php echo e(url('/')); ?>"
            home-url="<?php echo e(url('/')); ?>"
            digipack-url="<?php echo e(route('digipack')); ?>"
            movil-url="<?php echo e(url('/digi-mobil-tarifas')); ?>"
            settings-url="<?php echo e(route('ajustes')); ?>"
            contact-url="<?php echo e(url('/contacto')); ?>">              
        </app-main-menu>      

        <?php echo $__env->yieldContent('content'); ?>

    </div>
    <footer style="background-color: #009df9; height: 300px">

    </footer>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109879058-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-109879058-3');
    </script>

     <!-- Smooth Scroll Efect -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.0.0/dist/smooth-scroll.polyfills.min.js"></script>
     <?php echo $__env->yieldContent('custom_js'); ?>

</body>
</html>
