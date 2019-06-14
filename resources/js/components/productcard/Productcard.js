export default {
    props: ['cart', 'baseUrl', 'item'],

    mounted() {
        console.log("Productcard componenent mounted " + this.baseUrl)
    },
    data() {
        return {
            dismissSecs: 3,
            dismissCountDown: 0,
            quantity: 1,
        }
    },
    methods: {
        getUrl: function() {

            console.log("Productcard componenent mounted 2 " + this.baseUrl)
        },
        winePreview: function(slug) {
            window.location.href = this.baseUrl + "/product/" + slug;
            console.log("Productcard componenent mounted 2 " + this.baseUrl);
        },
        wineAdd: function() {
            //evt.preventDefault()
            var data = {
                wine_id: this.item.id,
                name: this.item.name,
                prix: this.item.price_wine,
                quantity: this.quantity,
                description: this.item.description.slice(0, 150),
                image: this.item.image
            }

            if (this.item.stock_status == 1) {
                var cart = [];
                cart = JSON.parse(localStorage.getItem("cart") || "[]");
                cart.push(data);
                localStorage["cart"] = (JSON.stringify(cart));
            } else {}
            this.notshow = 0;
        },
        countDownChanged(dismissCountDown) {
            this.dismissCountDown = dismissCountDown
        },
        showAlert() {
            this.dismissCountDown = this.dismissSecs

        },
    },
};