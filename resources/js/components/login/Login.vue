<template>
  <div class="form">
    <b-form class="form__content" @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group
        id="Email__form"
        label-for="input-1"
        description="We'll never share your email with anyone else."
      >
        <b-form-input
          id="input-1"
          v-model="form.email"
          type="email"
          required
          placeholder="Enter email"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="Password__form" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.password"
          :state="validation_password"
          type="password"
          required
          placeholder="Enter password"
        ></b-form-input>
        <b-form-invalid-feedback
          :state="validation_password"
        >Your password must be >4 characters long.</b-form-invalid-feedback>
        <b-form-valid-feedback :state="validation_password">Looks Good.</b-form-valid-feedback>
      </b-form-group>

      <b-form-group id="Remember__form">
        <b-form-checkbox-group v-model="form.checked" id="checkboxes-4">
          <b-form-checkbox value="true">Remember me</b-form-checkbox>
        </b-form-checkbox-group>
      </b-form-group>

      <b-button class="form__submit" type="submit" variant>Login</b-button>
      <b-button v-on:click="registration" v-bind:href="'/registration'" >S'inscrire</b-button>

      <p>
        Login with
        <a href="#loginFacebook">
          <i class="fab fa-facebook-f fa-2x"></i>
        </a>
        <a href="#loginGoogle">
          <i class="fab fa-google fa-2x"></i>
        </a>
      </p>
    </b-form>
    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card>
  </div>
</template>
<script src="./Login.js"></script>
<style src="./Login.css" scoped></style>
