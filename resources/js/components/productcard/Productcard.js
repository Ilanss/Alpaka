export default {
    props: ['cart'],
    mounted() {
        console.log("Productcard componenet mounted")
    },
    data() {
        return {
            Cart: new JsonStorage({
                name: "cart",
                eventName: "cart-change"
            }),
        }
    },
    methods: {
        winePreview: function(slug) {
            window.location.href = "product/" + slug;
        },
        wineAdd: function(event) {
            console.log("added in cart");
            Cart.addItem(event);
        }
    },
    props: ['item']
};