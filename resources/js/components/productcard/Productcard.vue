<template>
  <div class="test2">
    <div class="test">
      <!-- replace item.image to img-src -->
      <b-card
        v-on:click="winePreview(item.slug)"
        v-bind:title="item.name"
        v-bind:img-src="'images/products/' + item.image"
        img-alt="Cover"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2 text-center"
        v-bind:id="item.id"
      >
        <b-card-text class="text-center">{{ item.price_wine }} CHF</b-card-text>
        <b-button v-on:click="winePreview(item.slug)"  variant="" class="product__add">Voir les info</b-button>
      </b-card>
    </div>
  </div>
</template>
<script src="./Productcard.js"></script>
<style src="./Productcard.css" scoped></style>