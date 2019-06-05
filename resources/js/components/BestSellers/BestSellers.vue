<template>
  <div class="container">
    <div class="bestSeller">
      <h1>Best sellers</h1>
      <div class="row">
        <b-card-group deck>
          <product-card
            class="col-sm-3"
            v-for="product in bestseller"
            :key="product.wineId"
            v-bind:item="product"
          ></product-card>
        </b-card-group>
      </div>
    </div>
  </div>
</template>
<script src="./BestSellers.js"></script>
<style src="./BestSellers.css"></style>
