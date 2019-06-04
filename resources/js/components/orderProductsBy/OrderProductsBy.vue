<template>
    <div class="row order__by">
      <div class="order__by__icons col-sm-8">
        <b-link href="#square">
          <i class="fas fa-th fa-2x"></i>
        </b-link>
        <b-link href="#list">
          <i class="fas fa-list fa-2x"></i>
        </b-link>
        <b-link href="#bigList">
          <i class="fas fa-th-list fa-2x"></i>
        </b-link>
      </div>

      <div class="col-sm-4">
        <b-form-select v-model="selected" :options="options"></b-form-select>
      </div>
    </div>
</template>
<script src="./OrderProductsBy.js"></script>
<style src="./OrderProductsBy.css" scoped></style>
