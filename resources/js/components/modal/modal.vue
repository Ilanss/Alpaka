<template>
  <div>
    <script type="text/x-template" id="modal-template">
    <transition name="modal">
      <div class="modal-mask">
        <div class="modal-wrapper">
          <div class="modal-container">
            <button class="btn modal-default-button" @click="$emit('close')">
              <i class="fas fa-angle-right fa-2x"></i>
            </button>
            <div class="modal-header">
              <slot name="header">
                default header
              </slot>
            </div>

            <div class="modal-body">
              <slot name="body">
                default body
              </slot>
            </div>

            <div class="modal-footer">
              <slot name="footer">
                default footer
              </slot>
            </div>
          </div>
        </div>
      </div>
    </transition>
    </script>
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

