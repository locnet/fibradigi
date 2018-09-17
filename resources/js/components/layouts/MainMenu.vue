<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel  nav-pils nav-fill">
        <div class="container">
            <a class="navbar-brand" v-bind:href="mainUrl">
                FIBRA DIGI MOBIL
            </a>
            <button class="navbar-toggler align-items-center" type="button" 
            data-toggle="collapse" data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" 
            aria-label="' ${ __('Toggle navigation') } '">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <i class="fas fa-globe"></i>
                        <a v-bind:href="homeUrl" class="nav-link">FIBRA</a>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-mobile-alt"></i>
                        <a v-bind:href="hotelUrl" class="nav-link">MOVIL</a>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-wrench"></i>
                        <a v-bind:href="bookingUrl" class="nav-link">AJUSTES</a>
                    </li>
                    <li class="nav-item">
                        <i class="fas fa-phone"></i>
                        <a v-bind:href="contactUrl" class="nav-link">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    props: ['mainUrl','homeUrl','hotelUrl','bookingUrl','checkingUrl','contactUrl'],
    data() {
        return {            
            
        }
    },
    methods: {
        
    },
    beforeMount() {
       
    },
    mounted() {
    }
}
</script>