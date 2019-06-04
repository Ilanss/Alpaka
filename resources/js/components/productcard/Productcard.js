export default {
    mounted() {
        console.log("Productcard componenet mounted")
    },
    data() {
        return {
            wineId: "#01",
            wineName: "Test title vin",
            wineImage: "https://picsum.photos/600/300/?image=25",
            winePrix: "15.50"
        }
    },
    methods: {
        winePreview: function(event){
            console.log("winePreveiw");
        },
        wineAdd: function(event){
            console.log("added in car");
        }
    },
  };