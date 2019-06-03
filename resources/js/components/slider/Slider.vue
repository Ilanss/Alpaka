<template>
  <div class="container-fluid p-0">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div id="slider" class="carousel slide " data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner h-50">
            <div class="carousel-item active ">
              <img
                src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                alt="Promo 1"
                style="width:100%;"
              >
            </div>
            <div class="carousel-item">
              <img
                src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                alt="Chicago"
                style="width:100%;"
              >
            </div>

            <div class="carousel-item">
              <img
                src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                alt="Promo 3"
                style="width:100%;"
              >
            </div>
          </div>
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#slider" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#slider" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "slider-section",
  mounted() {
    console.log("slider-section Component mounted.");
  }
};
</script>