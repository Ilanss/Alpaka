<template>
  <div>
    <div>
      <b-card
        v-on:click="winePreview"
        v-bind:title="wineName"
        v-bind:img-src="wineImage"
        img-alt="Cover"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2 text-center"
        v-bind:id="wineId"
      >
        <b-card-text class="text-left"> CHF:{{ winePrix }}</b-card-text>

        <b-button v-on:click="wineAdd" v-bind:href="wineId" variant="" class="product__add">Ajouter au panier</b-button>
      </b-card>
    </div>
  </div>
</template>
<script src="./Productcard.js"></script>
<style src="./Productcard.css" scoped></style>