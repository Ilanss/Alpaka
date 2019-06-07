<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="info" class="navbar navbar-fixed-top" fixed="">
      <b-navbar-brand href>Gazzard</b-navbar-brand>
      <!-- Center aligned nav items -->
      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="ml-auto">
          <b-nav-item v-bind:href="this.home">Accueil </b-nav-item>
          <b-nav-item v-bind:href="this.catalogue">Catalogue</b-nav-item>
          <b-nav-item v-bind:href="this.blog">Blog</b-nav-item>
          <b-nav-item v-bind:href="this.about">À propos</b-nav-item>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item href="#Cart">
            <i class="fas fa-shopping-cart nav-icon"></i>
          </b-nav-item>
          <b-nav-item href="#Find">
            <i class="fas fa-search nav-icon"></i>
          </b-nav-item>
          <b-nav-item href="#User">
            <i class="fas fa-user nav-icon"></i>
          </b-nav-item>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>
<script src="./Navbar.js"></script>
<style src="./Navbar.css" scoped></style>

