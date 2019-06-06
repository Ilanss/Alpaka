<template>
  <div class="container">
    <div class="productInfo">
      <b-row>
        <b-col cols="4">
          <img v-bind:src="image" alt="productImage" class="productInfo__image">
        </b-col>
        <b-col cols="8">
          <div class="productInfo__title">
            <h1>{{name}}</h1>
            <h3>{{winary_name}}</h3>
          </div>
          <div class="productInfo__price">
            <h2>CHF {{price_wine}}</h2>
            <p>Livraison dans les 3 à 4 jours</p>
            <p>CHF 12 offerts dès CHF 250</p>
          </div>
          <div class="productInfo__review">
            <p>Reviews d'autres utilisateurs</p>
            <div class="review__0" v-if="ranking == 0">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__2" v-if="ranking == 1">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__2" v-if="ranking == 2">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__3" v-if="ranking == 3">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__4" v-if="ranking == 4">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__5" v-if="ranking == 5">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
            </div>
          </div>
          <div class="productInfo__quantity">
            <b-form-input
              type="number"
              step="1"
              min="1"
              max="1000000"
              placeholder="Choisir la quantité"
            ></b-form-input>
            <p>{{conditioning}}</p>
          </div>
          <b-button class="producInfo__submit">Ajouter au Panier</b-button>
          <div class="productInfo__stockYes" v-if="stock_status == 1">
            <i class="fas fa-check"></i>
            <p>Disponible</p>
          </div>
          <div class="productInfo__stockNo" v-if="stock_status == 0">
            <i class="fas fa-times"></i>
            <p>Pas Disponible</p>
          </div>
        </b-col>
      </b-row>
      <div class="productInfo__technicData">
        <div>
          <b-button v-b-toggle.collapse-1>Fiche Technique</b-button>
          <b-collapse id="collapse-1" class="mt-2">
            <!-- Fiche Technique -->
            <b-list-group>
              <b-list-group-item>Couleur: {{category_name}}</b-list-group-item>
              <b-list-group-item>Temperature de service: {{serv_temp}}</b-list-group-item>
              <b-list-group-item>Cépage(s): {{}}</b-list-group-item>
              <b-list-group-item>Pays d'origine: {{origin}}</b-list-group-item>
              <b-list-group-item>Région: {{}}</b-list-group-item>
              <b-list-group-item>Appellation: {{}}</b-list-group-item>
              <b-list-group-item>Millesimé: {{good_year}} - {{date_production}}</b-list-group-item>
              <b-list-group-item>Note: {{}}</b-list-group-item>
              <b-list-group-item>Degré d'alcool: {{alcohl_level}}</b-list-group-item>
              <b-list-group-item>Parker: {{}}</b-list-group-item>
            </b-list-group>
          </b-collapse>
          <!-- Commentaires -->
          <b-button v-b-toggle.collapse-2>Commentaires</b-button>
          <b-collapse id="collapse-2" class="mt-2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni pariatur libero consequuntur reprehenderit impedit reiciendis aperiam eum odit quidem? Nulla voluptates harum ducimus iste obcaecati quos hic quam est deserunt iusto perferendis, amet facere quo ea praesentium veniam excepturi quas molestias fugit aliquam. Vitae architecto fugiat consequatur perspiciatis, sed assumenda?</p>
          </b-collapse>
        </div>
      </div>
    </div>
  </div>
</template>
<script src="./ProductInfo.js"></script>
<style src="./ProductInfo.css" scoped></style>
