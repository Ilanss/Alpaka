<template>
  <div>

    <div class="container">
      <div class="row">
        <product-card class="col-sm-4" v-for="product in products" :key="product.id" v-bind:item="product"></product-card>
      </div>
    </div>
  </div>
</template>
<script src="./Productlist.js"></script>
<style src="./Productlist.css" scoped></style>
