<template>
    <section id="message" class="lqdi-section">
        <div class="lqdi-content lqdi-grid">
            <figure class="lqdi-grid__item lqdi-width--half">
                <h2 class="h2">Viva uma nova experiência
                    de comunicação integrada
                    com foco nos resultados.</h2>
                <h3>Escreva-nos sobre o seu projeto.</h3>								
            </figure>
            <div class="lqdi-grid__item lqdi-width--half">
                <form class="form">
                    <label for="name">Seu nome (requerido) </label>
                    <input type="text" name="name">
                    <label for="email">Seu E-mail (requerido) </label>
                    <input type="text" name="email">
                    <label for="subject">Assunto </label>
                    <input type="text" name="subject">
                    <label for="message">Mensagem</label>
                    <textarea name="message"></textarea>
                    <label for="file">Anexe um documento explicando seu projeto</label>
                    <input type="file" name="file">
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </section>  
</template>

<script>
    export default {
        name: "Message"
    }
</script>