export default {
    mounted() {
        console.log("productlist mounted");
    },
    data() {
        return {
            products: [
            {
                wineId: "#01",
                wineName: "Test title vin 1",
                wineImage: "https://picsum.photos/600/300/?image=25",
                winePrix: "15.50"
            },
            {
                wineId: "#02",
                wineName: "Test title vin 2",
                wineImage: "https://picsum.photos/600/300/?image=25",
                winePrix: "20.50"
            },
            {
                wineId: "#03",
                wineName: "Test title vin 3",
                wineImage: "https://picsum.photos/600/300/?image=25",
                winePrix: "15.50"
            },
            {
                wineId: "#04",
                wineName: "Test title vin 4",
                wineImage: "https://picsum.photos/600/300/?image=25",
                winePrix: "20.50"
            }]
        }
    }
  };