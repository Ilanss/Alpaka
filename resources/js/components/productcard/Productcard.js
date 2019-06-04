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
            console.log("winePreveiw"+ id);
        },
        wineAdd: function(event){
            console.log("added in car");
        }
    },
    props: [ 'item']
  };