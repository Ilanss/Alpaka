<template>
  <b-navbar toggleable="lg" type="danger" variant="danger">
    <b-navbar-brand href="#">Gazzar</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item href="#">Accueil</b-nav-item>
        <b-nav-item href="#">Catalogue</b-nav-item>
        <b-nav-item href="#">Blog</b-nav-item>
        <b-nav-item href="#">À propos</b-nav-item>
        <b-nav-item href="#">Contact</b-nav-item>
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-form>
        <b-button size="sm" class="my-2 my-sm-0" type="submit"><i class="fas fa-user"></i></b-button>
        <b-button size="sm" class="my-2 my-sm-0" type="submit"><i class="fas fa-shopping-cart"></i></b-button>
          <b-form-input size="sm" class="mr-sm-2" placeholder="Rechercher"></b-form-input>
          <b-button size="sm" class="my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></b-button>
        </b-nav-form>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>
<script src="./Navbar.js"></script>
<style src="./Navbar.css" scoped></style>