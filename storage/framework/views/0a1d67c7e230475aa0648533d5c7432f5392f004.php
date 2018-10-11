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
        <footer style="background-color: #009df9;">
            <div class="h-30"></div>
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel  nav-pils nav-fill">
                <div class="container">
                    
                    <a class="navbar-brand white" href="https://www.admadesign.com">
                        <small>Diseño web by <b>ADMA DESIGN</b></small>
                    </a>
                    
                    <ul class="col-xs-12 navbar-nav footer-nav">
                        <li class="nav-item">                            
                            <a href="<?php echo e(url('/')); ?>" class="nav-link"><i class="fas fa-home mr-15"></i>FIBRA</a>
                        </li>
                        <li class="nav-item">                            
                            <a  href="<?php echo e(url('/digi-mobil-tarifas')); ?>" class="nav-link">
                                <i class="fas fa-mobile-alt mr-15"></i>MOVIL
                            </a>
                        </li>
                        <li class="nav-item">                            
                            <a  href="<?php echo e(route('digipack')); ?>" class="nav-link">
                                <i class="fas fa-home"></i> 
                                <small><i class="fas fa-plus"></i></small>
                                <i class="fas fa-mobile-alt mr-15"></i>FIBRA + MOVIL
                            </a>
                        </li>
                        <li class="nav-item">                            
                            <a href="<?php echo e(route('ajustes')); ?>" class="nav-link">
                                <i class="fas fa-wrench mr-15"></i>AJUSTES
                            </a>
                        </li>
                        <li class="nav-item">                            
                            <a href="<?php echo e(url('contacto')); ?>" class="nav-link">
                                    <i class="fas fa-phone mr-15"></i>CONTACTO
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
            <div class="h-30"></div>
        </footer>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109879058-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-109879058-3');
        </script>
        <!-- SEARCH CONSOLE CODE -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-109879058-4', 'auto');
            ga('send', 'pageview');
        </script>

        <!-- Smooth Scroll Efect -->
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14.0.0/dist/smooth-scroll.polyfills.min.js"></script>
        <?php echo $__env->yieldContent('custom_js'); ?>

    </body>
</html>
