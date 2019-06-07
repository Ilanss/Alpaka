export default {
    mounted() {
        console.log("bestseller mounted");
    },
    data() {
        return {
            bestseller: [
                {
                    wineId: "#01",
                    wineName: "Best seller 1",
                    wineImage: "https://picsum.photos/600/300/?image=25",
                    winePrix: "15.50"
            },
                {
                    wineId: "#02",
                    wineName: "Best seller 2",
                    wineImage: "https://picsum.photos/600/300/?image=25",
                    winePrix: "20.50"
            },
                {
                    wineId: "#03",
                    wineName: "Best seller 3",
                    wineImage: "https://picsum.photos/600/300/?image=25",
                    winePrix: "15.50"
            },
                {
                    wineId: "#04",
                    wineName: "Best seller 4",
                    wineImage: "https://picsum.photos/600/300/?image=25",
                    winePrix: "20.50"
            }]
        }
    }
};
