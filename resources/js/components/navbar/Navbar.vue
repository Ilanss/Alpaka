<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="info" class="navbar" fixed>
      <b-navbar-brand href>Gazzard</b-navbar-brand>
      <!-- Center aligned nav items -->
      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav class="ml-auto">
          <b-nav-item href="home">Accueil</b-nav-item>
          <b-nav-item href="products">Catalogue</b-nav-item>
          <b-nav-item href="blog">Blog</b-nav-item>
          <b-nav-item href="about">À propos</b-nav-item>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item href="#Cart">
            <i class="fas fa-shopping-cart nav-icon" @click="toggleModalCart"></i>
          </b-nav-item>
          <b-nav-item href="#Find">
            <i class="fas fa-search nav-icon"></i>
          </b-nav-item>
          <b-nav-item href="#User">
            <i class="fas fa-user nav-icon" @click="toggleModalLogin"></i>
          </b-nav-item>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    <!-- LOGIN MODAL -->
    <b-modal ref="login-modal" hide-footer title="Login Modal">
      <div class="modal__body">
        <login-form></login-form>
      </div>
      <b-button class="mt-3" variant="outline-default" block @click="hideModal">Close Me</b-button>
    </b-modal>
    <!-- CART MODAL -->
    <b-modal ref="cart-modal" hide-footer title="Cart Modal">
      <div class="modal__body">
        <h2>HERE CART</h2>
      </div>
      <b-button class="mt-3" variant="outline-default" block @click="hideModal">Close Me</b-button>
    </b-modal>
  </div>
</template>
<script src="./Navbar.js"></script>
<style src="./Navbar.css" scoped></style>

