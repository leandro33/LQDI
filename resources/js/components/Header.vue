<template>
    <header class="lqdi-header" ref="header">
        <div class="lqdi-content lqdi-grid lqdi-grid--spread header-padd">
            <div class="lqdi-logo">
                <img src="img/logo-lqdi-positivo-header.png" alt="LQDI">
            </div>
            <nav class="lqdi-nav">
                <span>Agende uma reunião conosco</span>
                <a href="#" v-on:click="listUsers()" class="header-button">Começar</a>
            </nav>
        </div>
    </header>   
</template>

<script>
    export default {
        name: "Header",
        mounted() {            
            const self = this;
            window.onscroll = function () {                
                this.scrollY > 50 ? self.$refs.header.classList.add( 'scrolling' ) :
                    self.$refs.header.classList.remove( 'scrolling' );                
            }                        
        },
        methods: {
            listUsers() {
                axios.get('/list')
                .then(function (response) {
                    console.log('Users:\n', response);
                })
                .catch(function (error) {
                    console.log('Users:\n', error);
                });
            }
        }
    }
</script>