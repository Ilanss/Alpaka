<template>
  <div class="cart">
    <div class="cart__userInfo">
      <h3 >Votre panier d'achats</h3>
      <p class="cart__info">{{date}} - {{hour}}</p>
      <hr>
    </div>

    <div class="cart__table">
      <div>
        <b-table
          small
          :fields="fields"
          :per-page="perPage"
          :current-page="currentPage"
          :items="items"
          responsive
          flex
          striped
          hover
        >
          <!-- INDEX -->
          <template slot="index" slot-scope="data">{{ data.index + 1 }}</template>
          <!-- IMAGE doesn't works -->
          <template slot="image" slot-scope="props">
            <img
              alt
              width="50"
              height="50"
              :src= "image"
            >
          </template> 

          <template slot="delete" slot-scope="data">
            <!-- delete BUTTON doesn't works-->
            <b-button class="item__delete" @click="delateEvent(id)">delete</b-button>
          </template>
        </b-table>

        
      </div>
    </div>
    <div class="cart__promo">
      <div class="row">
        <b-form inline class="form__content" @submit="onSubmit">
          <div class="col-sm-12">
            <b-form-group id="Cart__promo__input" label-for="input-1">
              <b-form-input id="input-1" v-model="promo" type placeholder="Enter promo code"></b-form-input>
              <b-button class="form__submit" type="submit" variant>Validate</b-button>
            </b-form-group>
          </div>
        </b-form>
      </div>
    </div>
    <div class="cart__sum col-sm-6 offset-6">
      <h2>Sous-total hors TVA CHF: {{totalHorsTVA.toFixed(2)}}</h2>
      <h2>TVA - 7.7%: {{tvaTotal.toFixed(2)}}</h2>
      <hr>
      <h3>TOTAL: {{totalSum.toFixed(2)}}</h3>
    </div>
    <b-button class="cart__submit" type="submit" variant>Order Validate</b-button>
  </div>
</template>
<script src="./Cart.js"></script>
<style src="./Cart.css" scoped></style>

