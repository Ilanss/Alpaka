export default {
    mounted() {
        console.log("cart mounted");
    },
    data() {
        return {
            username: 'Elia Gazzard',
            date: new Date().getFullYear() + '-' + new Date().getMonth() + '-' + new Date().getDay(),
            hour: new Date().getHours() + ':' + new Date().getMinutes(),
            perPage: 3,
            currentPage: 1,
            promo: "",
            tva: "7.7",
            image: "https://images.unsplash.com/photo-1474722883778-792e7990302f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=337&q=80",
            fields: [
                'id',
                //A regular column
                'image',
                // A column that needs custom formatting
                { key: 'name', label: 'Item name' },
                // A regular column
                'quantity',
                // A regular column
                'prix',
                // A regular column
                'description',
                //Item total prix method
                {
                    key: 'itemTotal',
                    label: 'Item total',
                    formatter: (value, key, item) => {
                        var number = item.quantity * item.prix;
                        return number.toFixed(2);
                    }
                },
                //delate button
                'delate me'
            ],
            //Wine structure --> put here Wine data .json
            items: [
                { id: "1", name: "Wine 1", quantity: "1", prix: "10.00", description: "Wine description", image: "" },
                { id: "2", name: "Wine 2", quantity: "2", prix: "10.00", description: "Wine description", image: "" },
                { id: "3", name: "Wine 3", quantity: "1", prix: "20.00", description: "Wine description", image: "" },
                { id: "4", name: "Wine 4", quantity: "2", prix: "20.00", description: "Wine description", image: "" }
            ],
        }
    },
    computed: {
        rows() {
            return this.items.length
        },
        totalHorsTVA: function() {
            var total = this.items.reduce(function(a, c) { return a + Number((c.quantity * c.prix) || 0) }, 0)
            return total;
        },
        tvaTotal: function() {
            var total = this.totalHorsTVA / this.tva;
            return total;
        },
        totalSum: function() {
            var total = this.totalHorsTVA + this.tvaTotal;
            return total;
        }
    },
    methods: {
        onSubmit(evt) {
            evt.preventDefault()
            alert(JSON.stringify(this.form))
        },
        delateEvent(item) {},
    }

}