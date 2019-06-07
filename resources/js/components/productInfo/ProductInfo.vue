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
            <h3>{{brand}}</h3>
          </div>
          <div class="productInfo__price">
            <h2>CHF {{price_wine}}</h2>
            <p>Livraison dans les {{delivery_delay}} jours</p>
            <p>CHF 12 offerts dès CHF 250</p>
          </div>
          <div class="productInfo__review">
            <p>Reviews d'autres utilisateurs</p>
            <div class="review__0" v-if="user_ranking == 0">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__2" v-if="user_ranking == 1">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__2" v-if="user_ranking == 2">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__3" v-if="user_ranking == 3">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__4" v-if="user_ranking == 4">
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star fa-star-active"></i>
              <i class="fas fa-star"></i>
            </div>
            <div class="review__5" v-if="user_ranking == 5">
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
              v-model="form.quantity"
              :state="validation_quantity"
              required
            ></b-form-input>
            <b-form-invalid-feedback
              :state="validation_quantity"
            >La quantité doit être positive et differente de 0</b-form-invalid-feedback>
            <b-form-valid-feedback :state="validation_quantity">C'est bien!</b-form-valid-feedback>
            <p>{{conditioning}}</p>
          </div>
          <b-button class="producInfo__submit" type="submit">Ajouter au Panier</b-button>
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
              <b-list-group-item>Pays d'origine: {{origin}}</b-list-group-item>
              <b-list-group-item>Millesimé: {{good_year}} - {{date_production}}</b-list-group-item>
              <b-list-group-item>Note: {{ranking}}</b-list-group-item>
              <b-list-group-item>Degré d'alcool: {{alcohl_level}}</b-list-group-item>
            </b-list-group>
          </b-collapse>
          <!-- Commentaires -->
          <b-button v-b-toggle.collapse-2>Commentaires</b-button>
          <b-collapse id="collapse-2" class="mt-2">
            <b-card v-for="comment in comments" v-bind:key="comment.post_id">
              <b-card-text class="comment__text">{{comment.message}}</b-card-text>
              <hr>
              <b-card-text
                class="comment__date"
              >Ècrit le: {{comment.created_at}} par: {{comment.username}}</b-card-text>
            </b-card>
          </b-collapse>
        </div>
      </div>
    </div>
  </div>
</template>
<script src="./ProductInfo.js"></script>
<style lang="scss" src="./ProductInfo.scss" scoped></style>
