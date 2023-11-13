/* __placeholder__ */
export default (await import('vue')).defineComponent({
name: "Message",
data() {
return {
submitLabel: 'Enviar',
};
},
methods: {
save() {
const form = this.$refs.form.elements;
this.submitLabel = 'Enviando ...';

axios.post('/save', {
name: form.name.value,
email: form.email.value
})
.then((response) => {
this.submitLabel = 'Dados enviados com sucesso!';
})
.catch((error) => {
this.submitLabel = 'Houve uma falha no envio';
});
}
}
});
