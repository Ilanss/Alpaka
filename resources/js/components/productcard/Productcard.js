export default {
    props: ['cart','baseUrl','item'],

    mounted() {
        console.log("Productcard componenent mounted "+this.baseUrl)
    },
    data() {
        return {}
    },
    methods: {
        getUrl:function(){

            console.log("Productcard componenent mounted 2 "+this.baseUrl)
        },
        winePreview: function(slug) {
            window.location.href = this.baseUrl+"/product/" + slug;
            console.log("Productcard componenent mounted 2 "+this.baseUrl)
        },
        wineAdd: function(event) {
            console.log("added in cart");
        }
    },
};