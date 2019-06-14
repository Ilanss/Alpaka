export default {
    props : ['products','baseUrl'],
    
    mounted() {
        //console.log(this.products)
        console.log("productlist mounted", this.baseUrl);
    }

  };