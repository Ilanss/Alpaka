export default {
    props: ['home', 'catalogue', 'blog', 'about', 'login','modify'],
    mounted() {
        console.log("Navbar-vue Component mounted.");
    },
    data() {
        return {
            fields: {
            },
            errors: {},
            success: false,
            loaded: true,
        }
    },methods: {
             
        submit() {
            console.log("hello", this.fields)
            const formData = new FormData();

            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }
            console.log("hello", this.fields)
            this.errors = {};
            axios.post('/public/products', formData, config).then(response => {
                alert('Message sent!');
            }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            });
        },
    },

};