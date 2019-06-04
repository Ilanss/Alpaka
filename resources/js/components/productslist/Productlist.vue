<template>
  <div>
    <h2>Nos Vins</h2>

    <div>
      <product-card v-for="product in products" :key="product.wineId" v-bind:item="product"></product-card>
    </div>
  </div>
</template>
<script src="./Productlist.js"></script>
<style src="./Productlist.css" scoped></style>
