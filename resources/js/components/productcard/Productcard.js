export default {
    props: ['cart'],
    mounted() {
        console.log("Productcard componenet mounted")
    },
    data() {
        return {}
    },
    methods: {
        winePreview: function(slug) {
            window.location.href = "product/" + slug;
        },
        wineAdd: function(event) {
            console.log("added in cart");
        }
    },
    props: ['item']
};