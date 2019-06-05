export default {
    props : ['products'],
    
    mounted() {
        console.log("hello"+this.products)
        console.log("productlist mounted");
    }
  };