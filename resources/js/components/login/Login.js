export default {
    mounted() {
        console.log("login mounted");
    },
    data() {
        return {
            form: {
                email: '',
                password: '',
                checked: []
            },
            show: true
        }
    },
    computed: {
        validation_password() {
            return this.form.password.length > 6
        }
    },
    methods: {
        onSubmit(evt) {
            evt.preventDefault()
            alert(JSON.stringify(this.form))
        },
        onReset(evt) {
            evt.preventDefault()
                // Reset our form values
            this.form.email = ''
            this.form.password = ''
            this.form.checked = []
                // Trick to reset/clear native browser form validation state
            this.show = false
            this.$nextTick(() => {
                this.show = true
            })
        }
    }
}