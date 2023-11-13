<template>
    <div class="container">
        <div class="content">        
            <div id="auth"> 
                <div class="card lqdi-content lqdi-grid">                
                    <div class="card-header lqdi-grid__item">
                        <img src="img/logo-lqdi-positivo-header.png" alt="LQDI">
                        <h3>Lista de E-mail's cadastrados através da Landpage</h3>
                        <h5>Clique em enviar para receber o email teste</h5>
                    </div>
                    <div class="card-body lqdi-grid__item">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th v-for="(column, index) in columns" :key="index"> {{ column }}</th>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in collection" :key="index">
                                    <td v-for="(column, indexColumn) in columns" :key="indexColumn">{{ item[column] }}</td>
                                    <td><button class="send-buttons" @click="send(item.id)" :ref=item.id>Enviar</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</template>

<script>    
    export default {
        props: {
            collection: Array
        },
        data() {
            return {
                columns: [
                    'id',
                    'name',
                    'email',
                    ' ' 
                ],
                submitLabel: 'Enviar',
            }
        },       
        methods: {
            send(id) {
                const buttons = document.querySelectorAll('.send-buttons');
                buttons.forEach((button) => {
                    button.innerHTML = 'Enviar';
                });
                
                this.$refs[ id ][ 0 ].innerHTML = 'Enviando E-mail ...';               
                               
                axios.post('/send-email', { userId: id })
                .then(() => {
                    this.$refs[ id ][ 0 ].innerHTML = 'E-mail enviado com sucesso';
                })
                .catch((error) => {
                    this.$refs[ id ][ 0 ].innerHTML = 'Houve uma falha no\n envio para este E-mail';
                });
            }
        }
    }
</script>