<template>
  <div class="test">
    <!-- replace item.image to img-src -->
    <b-card
      v-on:click="winePreview(item.slug)"
      v-bind:title="item.name"
      v-bind:img-src="this.baseUrl+'/images/products/' + item.image"
      img-alt="Cover"
      img-top
      tag="article"
      style="max-width: 20rem;"
      class="mb-2 text-center"
      v-bind:id="item.id"
    >
      <b-card-text class="text-center">{{ item.price_wine }} CHF</b-card-text>
      <b-alert
        :show="dismissCountDown"
        variant="success"
        @dismissed="dismissCountDown=0"
        @dismiss-count-down="countDownChanged"
        v-if="item.stock_status == 1"
      >Vin ajouté au panier</b-alert>
      <b-alert
        :show="dismissCountDown"
        variant="warning"
        @dismissed="dismissCountDown=0"
        @dismiss-count-down="countDownChanged"
        v-if="item.stock_status == 0"
      >Ce vin est pas disponible, désolé</b-alert>
    </b-card>
    <b-row>
      <b-col cols="8">
        <b-button
          v-on:click="wineAdd()"
          variant
          class="product__add"
          @click="showAlert"
        >Ajouter au panier</b-button>
      </b-col>
      <b-col cols="4">
        <b-form-input v-model="quantity" value="1" type="number" min="1" max="99" step="1"></b-form-input>
      </b-col>
    </b-row>
  </div>
</template>
<script src="./Productcard.js"></script>
<style src="./Productcard.css" scoped></style>