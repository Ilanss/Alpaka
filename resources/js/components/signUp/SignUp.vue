<template>
  <div class="form">
    <b-form class="form__content" @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="Username__form" label-for="input-1" description>
        <b-form-input
          id="input-1"
          v-model="form.username"
          type="username"
          :state="validation_username"
          required
          placeholder="Enter username"
        ></b-form-input>
        <b-form-invalid-feedback :state="validation_username">Your username must be max 20 characters</b-form-invalid-feedback>
        <b-form-valid-feedback :state="validation_username">Looks Good.</b-form-valid-feedback>
      </b-form-group>

      <b-form-group id="first__form" label-for="input-2">
        <b-form-input
          id="input-2"
          v-model="form.first"
          :state="validation_first"
          type
          required
          placeholder="Enter first name"
        ></b-form-input>
        <b-form-invalid-feedback :state="validation_first">Your firstname must be max 20 characters</b-form-invalid-feedback>
        <b-form-valid-feedback :state="validation_first">Looks Good.</b-form-valid-feedback>
      </b-form-group>

      <b-form-group id="last__form" label-for="input-3" description>
        <b-form-input
          id="input-3"
          v-model="form.last"
          type
          :state="validation_last"
          required
          placeholder="Enter last name"
        ></b-form-input>
        <b-form-invalid-feedback :state="validation_last">Your lastname must be max 20 characters</b-form-invalid-feedback>
        <b-form-valid-feedback :state="validation_last">Looks Good.</b-form-valid-feedback>
      </b-form-group>

      <b-form-group id="form__genre" label-for="input-4" label="Enter genre">
        <b-form-radio-group
          id="input-4"
          v-model="form.genre"
          :options="options"
          type
          buttons
          name="radios-btn-default"
        ></b-form-radio-group>
      </b-form-group>

      <b-form-group id="form__date" label-for="input-5" label="Enter date">
        <b-form-input
          id="input-5"
          v-model="form.date"
          :state="validation_date"
          type="date"
          required
        ></b-form-input>
        <b-form-invalid-feedback :state="validation_date">Your password must be >4 characters long.</b-form-invalid-feedback>
        <b-form-valid-feedback :state="validation_date">Looks Good.</b-form-valid-feedback>
      </b-form-group>

      <b-form-group id="Username__email" label-for="input-6" description>
        <b-form-input
          id="input-6"
          v-model="form.email"
          type="email"
          required
          placeholder="Enter email"
        ></b-form-input>
      </b-form-group>

      <b-form-group id="last__password" label-for="input-7" description>
        <b-form-input
          id="input-7"
          v-model="form.password"
          type="password"
          :state="validation_password"
          required
          placeholder="Enter password"
        ></b-form-input>
        <b-form-invalid-feedback
          :state="validation_password"
        >Your password must be >4 characters long.</b-form-invalid-feedback>
        <b-form-valid-feedback :state="validation_password">Looks Good.</b-form-valid-feedback>
      </b-form-group>

      <b-form-group id="last__password2" label-for="input-8" description>
        <b-form-input
          id="input-8"
          v-model="form.passwordConfirm"
          type="password"
          :state="validation_password2"
          required
          placeholder="Confirm password"
        ></b-form-input>
        <b-form-invalid-feedback
          :state="validation_password2"
        >the password does not match</b-form-invalid-feedback>
        <b-form-valid-feedback :state="validation_password2">Looks Good.</b-form-valid-feedback>
      </b-form-group>

      <b-form-checkbox
        id="checkbox-1"
        v-model="form.term_status"
        name="checkbox-1"
        value="accepted"
        unchecked-value="not_accepted"
      >I accept the terms and use</b-form-checkbox>

      <div class="row">
        <div class="col-sm-6">
          <b-button class="form__submit" type="submit" variant>SignUp</b-button>
        </div>
        <div class="col-sm-6">
          <p>
            or signUp with
            <a href="#loginFacebook">
              <i class="fab fa-facebook-f fa-2x"></i>
            </a>
            <a href="#loginGoogle">
              <i class="fab fa-google fa-2x"></i>
            </a>
          </p>
        </div>
      </div>

      <p>
        alredy have an account? Login
        <a href="#login">here</a>.
      </p>
    </b-form>
    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card>
  </div>
</template>
<script src="./SignUp.js"></script>
<style  src="./SignUp.css"scoped></style>

