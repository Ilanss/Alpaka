<template>
   <section >
        <div class="cover__filter"></div>
        <div class="cover__filter__2"></div>
        <div class="cover__caption">
            <div class="cover__caption__copy">
                <img src="images/logo-vertical-fond-clair.png" alt="HeroSection__Cover" class="animated fadeInUp">
                <h1 class="animated fadeInUp">Gazzar</h1>
                <a href="" class="cover__caption__button animated fadeIn">Decouvrez nos vins</a>
            </div>
        </div> 
        <div class="cover__icon animated fadeIn">

            <i class="fas fa-angle-down fa-3x animated infinite bounce"></i>
        </div>     
   </section>
</template>
 
<script>

    export default {
        name: 'hero-section',
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
