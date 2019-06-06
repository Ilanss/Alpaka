export default {
    mounted() {
        console.log("navbar mounted + modals")
    },
    methods: {
        showModal() {
            this.$refs['login-modal'].show()
        },
        hideModal() {
            this.$refs['login-modal'].hide()
        },
        toggleModalLogin() {
            // We pass the ID of the button that we want to return focus to
            // when the modal has hidden
            this.$refs['login-modal'].toggle('#toggle-btn')
        },
        toggleModalCart() {
            // We pass the ID of the button that we want to return focus to
            // when the modal has hidden
            this.$refs['cart-modal'].toggle('#toggle-btn')
        }
    }
};