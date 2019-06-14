<template>
  <section>
    <div id="createForm">
      <div class="container">
        <h1>Ajouter produit</h1>
        <div>
          <form method="post" @submit.prevent="submit" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Nom du vin:</label>
              <input v-model="fields.name" type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
              <label for="image">Image:</label>
              <input v-on:change="onImageChange" type="file" name="image" id="image">
            </div>
            <div class="form-group">
              <label for="brand">Marque :</label>
              <input v-model="fields.brand" type="text" class="form-control" name="brand">
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="winery">Vigneron :</label>
                <select v-model="fields.winery_id" name="winery_id" id="winery_id">
                  <option
                    v-bind:value="winery.id"
                    v-for="winery in wineries"
                    :key="winery.id"
                    v-bind:item="winery"
                  >{{winery.name}}</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="category">Catégorie :</label>
                <select v-model="fields.category_id" name="category_id" id>
                  <option
                    v-bind:value="category.id"
                    v-for="category in categories"
                    :key="category.id"
                    v-bind:item="category"
                  >{{category.name}}</option>
                </select>
              </div>
              <div class="form-group col-md-4 ">
                <label for="country">Pays :</label>
                <select v-model="fields.country_id" name="country_id" id>
                  <option
                    v-bind:value="country.id"
                    v-for="country in countries"
                    :key="country.id"
                    v-bind:item="country"
                  >{{country.name}}</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="price_wine">Prix du vin :</label>
              <input
                v-model="fields.price_wine"
                type="number"
                class="form-control"
                name="price_wine"
              >
            </div>
            <div class="form-group">
              <label for="origin">Région :</label>
              <input v-model="fields.origin" type="text" class="form-control" name="origin">
            </div>
            <div class="form-group">
              <label for="size">Taille :</label>
              <input v-model="fields.size" type="text" class="form-control" name="size">
            </div>
            <div class="form-group">
              <label for="varietal">Cépage(s):</label>
              <input v-model="fields.varietal" type="text" class="form-control" name="varietal">
            </div>
            <div class="form-row">
            <div class="form-group col-md-2">
              <label for="good_year">Millésime :</label>
              <input
                v-model="fields.good_year"
                type="checkbox"
                class="form-control"
                name="good_year"
                value="1"
              >
            </div>
            <div class="form-group col-md-2">
              <label for="date_production">Date de production :</label>
              <input
                v-model="fields.date_production"
                type="date"
                class="form-control"
                name="date_production"
              >
            </div>
            </div>
            <div class="form-group">
              <label for="serv_temp">Temperature de service :</label>
              <input v-model="fields.serv_temp" type="number" class="form-control" name="serv_temp">
            </div>
            
            <div class="form-group col-md-8">
              <label for="description">Description :</label>
              <textarea class="form-control"
                v-model="fields.description"
                name="description"
                id="description"
                cols="100"
                rows="10"
              ></textarea>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="conditioning">Conditionnement :</label>
                <input
                  v-model="fields.conditioning"
                  type="text"
                  class="form-control"
                  name="conditioning"
                >
              </div>
              <div class="form-group col-md-4">
                <label for="ranking">Notation :</label>
                <input v-model="fields.ranking" type="number" class="form-control" name="ranking">
              </div>
              <div class="form-group col-md-4">
                <label for="alcohol_level">Taux d'alcool :</label>
                <input
                  v-model="fields.alcohol_level"
                  type="number"
                  class="form-control"
                  name="alcohol_level"
                >
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="stock_status">Status du stock :</label>
                <input
                  v-model="fields.stock_status"
                  type="checkbox"
                  class="form-control"
                  name="stock_status"
                  value="1"
                >
              </div>
              <label>Délais de livraison (jours)</label>
              <div class="form-group col-md-3">
                
              
                <label for="delivery_delay_from">à partir de:</label>
                <input
                  v-model="fields.delivery_delay_from"
                  type="number"
                  class="form-control"
                  name="delivery_delay_from"
                >
              </div>
              <div class="form-group col-md-3">
                  <div></div>
                <label for="delivery_delay_to">jusqu'à :</label>
                <input
                  v-model="fields.delivery_delay_to"
                  type="number"
                  class="form-control"
                  name="delivery_delay_to"
                >
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Create Wine</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>
 
<style src="./Create.css" scoped></style> 
<script src="./Create.js"></script>
