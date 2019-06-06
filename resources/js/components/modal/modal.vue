<template>
  <div>
    <b-modal ref="my-modal" hide-footer title="Using Component Methods">
      <div class="d-block text-center">
        <h3>MODAL TITLE</h3>
      </div>
      <b-button class="mt-3" variant="outline-danger" block @click="hideModal">Close Me</b-button>
    </b-modal>

    <b-button id="show-btn" @click="showModal">Open Modal</b-button>
    <b-button id="toggle-btn" @click="toggleModal">Toggle Modal</b-button>
  </div>
</template>
<script src="./Modal.js">
/* ADD IN VUE (ex--> home.blade.php)
<button id="show-modal" @click="showModal = 'test_1'">Show Modal</button>
  <!-- use the modal component, pass in the prop -->
  <modal v-if="showModal === 'test_1'" @close="showModal = false">
    <!--
      you can use custom content here to overwrite
      default content
    -->
    <p slot="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, quas qui. Veritatis consequuntur soluta sed accusamus laudantium id culpa, incidunt, velit dolores quam nam! Accusamus deleniti error beatae voluptatem facere.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur culpa facere obcaecati! Veniam earum ex, cumque maiores ad corrupti voluptas adipisci commodi. Quas quo consequuntur officia nobis cum reprehenderit tenetur?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque recusandae sunt numquam odit saepe omnis doloremque doloribus ex commodi voluptatibus quod cupiditate magni error temporibus sequi necessitatibus aliquid, nemo architecto.
    </p>
    <h3 slot="header">Login ? Cart ? It's your choiche Adri</h3>
  </modal>
*/
</script>
<style src="./Modal.css"></style>

