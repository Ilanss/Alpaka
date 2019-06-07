export default {
    mounted() {
        console.log("ProductInfo mounted");
    },
    data() {
        return {
            image: "https://images.unsplash.com/photo-1549873916-b1bb7dc758c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80",
            name: "Vin de test",
            delivery_delay: "3 à 4",
            brand: "Brand de test",
            price_wine: "10.00",
            user_ranking: "3",
            ranking: "4",
            stock_status: "1",
            conditioning: "Carton(s) de 12 bouteilles",
            category_name: "Rouge",
            serv_temp: "12.5",
            origin: "Suisse",
            good_year: "true",
            date_production: "2019",
            alcohl_level: "13",
            comments: [
                { post_id: "1", username: "John Doe", created_at: "2019-05-12", message: "Cool, j'aime bien ce vin!1" },
                { post_id: "2", username: "John Doe", created_at: "2019-04-12", message: "Cool, j'aime bien ce vin!2" },
                { post_id: "3", username: "John Doe", created_at: "2019-03-12", message: "Cool, j'aime bien ce vin!3" },
                { post_id: "4", username: "John Doe", created_at: "2019-02-12", message: "Cool, j'aime bien ce vin!4" },
            ],
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
}