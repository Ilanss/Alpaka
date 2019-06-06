<template>
  <div class="cart">
    <div class="cart__userInfo">
      <h3 class="cart__username">{{username}}</h3>
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
          <template slot="image" slot-scope="props">
            <img
              alt
              width="50"
              height="50"
              src="https://images.unsplash.com/photo-1474722883778-792e7990302f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=337&q=80"
            >
          </template>

 
        </b-table>

        <b-pagination
          v-model="currentPage"
          :total-rows="rows"
          :per-page="perPage"
          aria-controls="my-table"
        ></b-pagination>
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
      <h2>Sous-total hors TVA CHF {{totalHorsTVA}}</h2>
      <h2>TVA - 7.7% {{tva}}</h2>
      <hr>
      <h3>TOTAL {{total}}</h3>
    </div>
    <b-button class="cart__submit" type="submit" variant>Order Validate</b-button>
  </div>
</template>
<script src="./Cart.js"></script>
<style src="./Cart.css" scoped></style>

