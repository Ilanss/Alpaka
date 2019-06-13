export default {
    props: ['home', 'catalogue', 'blog', 'about', 'login','modify','search','cart','baseUrl'],
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
    }
};