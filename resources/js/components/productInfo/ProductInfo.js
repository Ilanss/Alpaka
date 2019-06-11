export default {
    props: ['product','country', 'winery', 'category', 'promotions'],

    mounted() {
        console.log("ProductInfo mounted");
    },
    data() {
        return {
            form: {
                quantity: "1",
            }

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
                    wineId: this.wineId,
                    userId: this.userId,
                    quantity: this.form.quantity,
                }
                /*data.push(this.wineId);
                data.push(this.userId);
                data.push(this.form.quantity); */
                //alert(console.log(data))
            alert(JSON.stringify(data))
                /*---
                    mettre ici le return pour envoyer les données au DB
                ---*/
        },
    },
}