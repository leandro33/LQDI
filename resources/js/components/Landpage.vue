<template>
    <div class="container">			
        <div class="content">            
            <Header></Header>    
            <Banner></Banner>          
            <Articles></Articles>
            <Message></Message>
            <Footer></Footer>
        </div>
    </div>
</template>

<script>
    import Header from './Header.vue';    
    import Banner from './Banner.vue';
    import Articles from './Articles.vue';
    import Message from './Message.vue';
    import Footer from './Footer.vue';
    export default {
        components: {
            Header: Header,            
            Banner: Banner,
            Articles: Articles,
            Message: Message,
            Footer: Footer
        }        
    }
</script>
