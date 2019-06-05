<template>
  <div class="container">
    <div class="bestSeller">
      <h1>Best sellers</h1>
      <div class="row no-gutters">
          <product-card
            class="col-sm-3"
            v-for="product in bestseller"
            :key="product.wineId"
            v-bind:item="product"
          ></product-card>
      </div>
    </div>
  </div>
</template>
<script src="./BestSellers.js"></script>
<style src="./BestSellers.css" scoped></style>
