export default {
    mounted() {
        console.log("Productcard componenet mounted")
    },
    data() {
        return {
        }
    },
    methods: {
        winePreview: function(id){
            console.log("winePreview"+ id);
        },
        wineAdd: function(event){
            console.log("added in cart");
        }
    },
    props: [ 'item']
  };