export default {
    mounted() {
        console.log("cart mounted");
    },
    data() {
        return {
            username: 'Elia Gazzard',
            date: '05.06.2019',
            hour: '15.56',
            perPage: 3,
            currentPage: 1,
            promo: "",
            fields: [
                // A virtual column that doesn't exist in items
                'image',
                // A column that needs custom formatting
                { key: 'Name', label: 'Item name' },
                // A regular column
                'Quantity',
                // A regular column
                'Desription',
                // A virtual column made up from two fields
                { key: 'ItemTotal', label: 'Item total' }
            ],
            items: [
                { name: { first: 'John', last: 'Doe' }, sex: 'Male', age: 42 },
                { name: { first: 'Jane', last: 'Doe' }, sex: 'Female', age: 36 },
                { name: { first: 'Rubin', last: 'Kincade' }, sex: 'Male', age: 73 },
                { name: { first: 'Shirley', last: 'Partridge' }, sex: 'Female', age: 62 }
            ],
        }
    },
    computed: {
        rows() {
            return this.items.length
        }
    },
    methods: {
        onSubmit(evt) {
            evt.preventDefault()
            alert(JSON.stringify(this.form))
        },
    }

}