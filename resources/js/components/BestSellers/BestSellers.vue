<template>
<section id="bestseller">
  <div  class="container">
    <div class="bestSeller">
      <h1>Meilleures ventes</h1>
      <div class="row no-gutters">
          <product-card v-bind:base-url='baseUrl' class="col-sm-3" v-for="product in bestseller"
            :key="product.wineId" v-bind:item="product"></product-card>
      </div>
      <hr class="end">
    </div>
  </div>
  </section>
</template>
<script src="./BestSellers.js"></script>
<style src="./BestSellers.css" scoped></style>
