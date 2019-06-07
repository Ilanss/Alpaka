<template>
  <div class="test2">
    <div class="test">
      <!-- replace item.image to img-src -->
      <b-card
        v-on:click="winePreview(item.wineId)"
        v-bind:title="item.wineName"
        v-bind:img-src="item.wineImage"
        img-alt="Cover"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2 text-center"
        v-bind:id="item.id"
      >
        <b-card-text class="text-center">{{ item.winePrix }} CHF</b-card-text>

        <b-button v-on:click="wineAdd" v-bind:href="''+item.id" variant="" class="product__add">Ajouter au panier</b-button>
      </b-card>
    </div>
  </div>
</template>
<script src="./Productcard.js"></script>
<style src="./Productcard.css" scoped></style>