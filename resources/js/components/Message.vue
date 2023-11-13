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
                <div class="form">
                    <label for="name">Seu nome (requerido) </label>
                    <input type="text" name="name" id="name" v-model="name" required autocomplete="name">
                    <label for="email">Seu E-mail (requerido) </label>
                    <input type="email" name="email" id="email" v-model="email" required autocomplete="email">
                    <label for="subject">Assunto </label>
                    <input type="text" name="subject" id="subject">
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message"></textarea>
                    <label for="file">Anexe um documento explicando seu projeto</label>
                    <input type="file" name="file" id="file">
                    <button @click="save()" class="header-button">{{ submitLabel }}</button>
                </div>
            </div>
        </div>
    </section>  
</template>

<script>
    export default {
        name: "Message",
        data() {
            return {
                submitLabel: 'Enviar',
                name: '',
                email: ''
            }            
        },
        methods: {
            save() {
                this.submitLabel = 'Enviando ...';                
                               
                axios.post('/send-email', {
                    name: this.name,
                    email: this.email
                })
                .then((response) => {                    
                    response.data === 1 ? this.submitLabel = 'E-mail salvo com sucesso!' :
                        this.submitLabel = 'Este E-mail já está cadastrado';
                })
                .catch((error) => {
                    this.submitLabel = 'Houve uma falha no casdastro\n tente novamente';
                });
            }
        }
    }
</script>