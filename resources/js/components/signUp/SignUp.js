export default {
    mounted() {
        console.log("signUp mounted");
    },
    data() {
        return {
            selected: 'male',
            options: [
                { text: 'Male', value: 'male' },
                { text: 'Female', value: 'female' },
                { text: 'Others', value: 'others' }
            ],
            form: {
                username: '',
                first: '',
                last: '',
                genre: '',
                date: '',
                password: '',
                passwordConfirm: '',
                email: '',
                term_status: 'not_accepted',
            },
            show: true
        }
    },
    computed: {
        validation_password() {
            return this.form.password.length > 6
        },
        validation_password2() {
            return this.form.passwordConfirm == this.form.password
        },
        validation_username() {
            return this.form.username.length < 20
        },
        validation_first() {
            return this.form.first.length < 20
        },
        validation_last() {
            return this.form.last.length < 20
        },
        validation_date() {},

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