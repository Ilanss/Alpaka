export default {
    props: ['home', 'catalogue', 'blog', 'about', 'login','modify','search'],
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
            
            this.errors = {};
            axios.get('/public/products/search', {
                params : this.fields
            }
            ).then(response => {
                alert('Message sent!');
            }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            });
        },
    },

};