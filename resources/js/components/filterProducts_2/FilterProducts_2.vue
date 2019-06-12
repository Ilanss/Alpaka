<template>
  <div>
    <h1>FILTRER PAR</h1>
    <div class="filter__2">
      <b-list-group class="filter__2__couleur">
        <h2>Couleur</h2>
        <b-form-checkbox
          id="checkbox-1"
          name="Mousseux"
          value="accepted"
          unchecked-value="not_accepted"
        >Mousseux</b-form-checkbox>
        
        <b-form-checkbox
          id="checkbox-2"
          name="Rouge"
          value="accepted"
          unchecked-value="not_accepted"
        >Rouge</b-form-checkbox>
        
        <b-form-checkbox
          id="checkbox-3"
          name="Blanc"
          value="accepted"
          unchecked-value="not_accepted"
        >Blanc</b-form-checkbox>
        
        <b-form-checkbox
          id="checkbox-4"
          name="Rosé"
          value="accepted"
          unchecked-value="not_accepted"
        >Rosé</b-form-checkbox>
      </b-list-group>

      <div role="tablist">
        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-0" role="tab">
            <b-button block href="#" v-b-toggle.accordion-1 variant="">Région</b-button>
          </b-card-header>
          <b-collapse id="accordion-1" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text>{{ text }}</b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>

        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-0" role="tab">
            <b-button block href="#" v-b-toggle.accordion-2 variant="">Appellation</b-button>
          </b-card-header>
          <b-collapse id="accordion-2" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text>{{ text }}</b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>

        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-0" role="tab">
            <b-button block href="#" v-b-toggle.accordion-3 variant="">Format</b-button>
          </b-card-header>
          <b-collapse id="accordion-3" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text>{{ text }}</b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>

        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-0" role="tab">
            <b-button block href="#" v-b-toggle.accordion-3 variant="">Millesime</b-button>
          </b-card-header>
          <b-collapse id="accordion-4" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text>{{ text }}</b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>

        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-0" role="tab">
            <b-button block href="#" v-b-toggle.accordion-3 variant="">Dégré d'alcool</b-button>
          </b-card-header>
          <b-collapse id="accordion-5" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text>{{ text }}</b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>

        <b-card no-body class="mb-1">
          <b-card-header header-tag="header" class="p-0" role="tab">
            <b-button block href="#" v-b-toggle.accordion-3 variant="">Actuellement</b-button>
          </b-card-header>
          <b-collapse id="accordion-6" accordion="my-accordion" role="tabpanel">
            <b-card-body>
              <b-card-text>{{ text }}</b-card-text>
            </b-card-body>
          </b-collapse>
        </b-card>
      </div>
    </div>
    
  </div>
</template>
<script src="./FilterProducts_2.js"></script>
<style src="./FilterProducts_2.css" scoped></style>
