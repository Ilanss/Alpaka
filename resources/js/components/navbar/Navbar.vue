<template>
  <b-navbar toggleable="lg" type="danger" variant="danger" class="navbar sticky-top">
    <b-navbar-brand v-bind:href="this.home" class="navbar-brand">Gazzar</b-navbar-brand>
      <!-- Center aligned nav items -->
    <b-navbar-toggle target="nav-collapse" class="navbar-toggle">
        <span class="navbar-toggler-icon"></span>
    </b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav class="navbar-nav">
          <b-nav-item v-bind:href="this.home +'#nav-collapse'">Accueil </b-nav-item>
          <b-nav-item v-bind:href="this.catalogue">Catalogue</b-nav-item>
          <b-nav-item v-bind:href="this.blog">Blog</b-nav-item>
          <b-nav-item v-bind:href="this.about">À propos</b-nav-item>
          <b-nav-item v-bind:href="this.about+'#contactUs'">Contact</b-nav-item>
      </b-navbar-nav>

      <!-- Right aligned nav items  @submit.prevent="submit"-->
      <b-navbar-nav class="ml-auto">
        <form v-bind:action="this.login">
                <b-button size="sm" class="my-2 my-sm-0 btn user" type="submit"><i class="fas fa-user"></i></b-button>
            </form>
            <form v-bind:action="this.cart">
            <b-button size="sm" class="my-2 my-sm-0 btn cart" type="submit"><i data-count="3" class="fas fa-shopping-cart"></i></b-button>
            </form>
        <b-nav-form method="get" v-bind:action="this.search">
            
            <b-form-input v-model="fields.search" type="text" name="search"    size="sm" class="mr-sm-2 form-input" placeholder="Rechercher"></b-form-input>
            <b-button size="sm" class="my-2 my-sm-0 btn" type="submit"><i class="fas fa-search"></i></b-button>
        </b-nav-form>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>
<script src="./Navbar.js"></script>
<style lang="scss" src="./Navbar.scss"></style>