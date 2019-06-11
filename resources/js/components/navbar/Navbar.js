export default {
    props: ['home', 'catalogue', 'blog', 'about', 'login','modify'],
    mounted() {
        console.log("Navbar-vue Component mounted.");
    },
    mounted() {
        this.commit('setAuthUser', window.auth_user);
    }
};
