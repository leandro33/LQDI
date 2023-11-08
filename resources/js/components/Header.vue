<template>
    <header class="lqdi-header">
        <div class="lqdi-content lqdi-grid lqdi-grid--spread header-padd">
            <div class="lqdi-logo">
                <img src="img/logo-lqdi-positivo-header.png" alt="LQDI">
            </div>
            <nav class="lqdi-nav">
                <span>Agende uma reunião conosco</span>
                <a href="#" class="header-button">Começar</a>
            </nav>
        </div>
    </header>   
</template>

<script>
    export default {
        name: "Header",
        mounted() {
            window.onscroll = function () {                
                if ( this.scrollY > 50 ) {
                    document.querySelector( '.lqdi-header' ).classList.add( 'scrolling' );
                } else {
                    document.querySelector( '.lqdi-header' ).classList.remove( 'scrolling' );
                }
            }                        
        }
    }
</script>