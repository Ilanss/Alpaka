import JsonStorage from "../../LocalStorage.js"; //import localstorage 4 cart

export default {
    props: ['product', 'country', 'winery', 'category', 'promotions', 'ratings'],

    mounted() {
        console.log("ProductInfo mounted");
    },
    data() {
        return {
            form: {
                quantity: "1",
            },
        }
    },
    computed: {
        validation_quantity() {
            if (this.form.quantity === "undefined") {
                return false;
            } else if (this.form.quantity === "0") {
                return false;
            } else {
                return this.form.quantity > "0";
            }

        },

    },
    methods: {
        onSubmit(evt) {
            evt.preventDefault()
            var data = {
                id: this.product.id,
                name: this.product.name,
                prix: this.product.price_wine,
                quantity: this.form.quantity,
                product_image: this.product_image
            }
            alert(JSON.stringify(data))
                //add in localstorage -- doesn't work
            const cart = new JsonStorage({
                name: "cart",
                eventName: "cart-change"
            });
            //cart.addItem({ data });
            localStorage.setItem(data.id, JSON.stringify(data));
        },
    },
}