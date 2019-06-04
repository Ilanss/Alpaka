<template>
  <div>
    <div>
      <b-card
        v-on:click="winePreview(item.wineId)"
        v-bind:title="item.wineName"
        v-bind:img-src="item.wineImage"
        img-alt="Cover"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2 text-center"
        v-bind:id="item.wineId"
      >
        <b-card-text class="text-left"> CHF:{{ item.winePrix }}</b-card-text>

        <b-button v-on:click="wineAdd" v-bind:href="item.wineId" variant="" class="product__add">Ajouter au panier</b-button>
      </b-card>
    </div>
  </div>
</template>
<script src="./Productcard.js"></script>
<style src="./Productcard.css" scoped></style>