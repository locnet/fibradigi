<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel  nav-pils nav-fill">
        <div class="container">
            <a class="navbar-brand" v-bind:href="mainUrl">
                <img src="http://www.romfly.com/images/romfly_logo.png" alt="bilete ieftine de avion">
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
        /* cada seccion tiene el menu superior de un color diferente, 
        * esta funcion se encarga de cambiar el color del menu.
        * El parametro menuColor lleva la informacion del color que deseamos.
        * Como es dificil entender de donde viene el parametro, aqui esta la explicacion:
        * Cada metodo de un controlador que carga una vista pasa un parametro con el color que 
        * queremos para el menu. El parametro se recupera en master.blade.php y se pasa
        * al componente app-menu-component.
        */
        setMenuBackgroundColor() {
            return {
                'blue-menu': this.menuColor=='blue',
                'purple-menu': this.menuColor=='purple',
                'green-menu': this.menuColor=='green',
                'grey-menu': this.menuColor=='grey',
                'red-menu': this.menuColor=='red'
            }
        }
    },
    beforeMount() {
        this.setMenuBackgroundColor();
    },
    mounted() {
        console.log(this.setMenuBackgroundColor());
        console.log('active link: ' + this.menuColor);
    }
}
</script>