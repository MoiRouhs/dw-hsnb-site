<!-- Slider main container -->
<div class="swiper slider-hero">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide" style="background-image: url('../assets/uno.webp');">
      <div class="container">
        <div class="text">
          <p class="title s-1">Encuentra los mejores productos para construccion, latoneria y ornamentación</p>
        </div>
        <a href="#ps" class="button is-primary">Ver productos destacados</a>
      </div>
    </div>
    <div class="swiper-slide" style="background-image: url('../assets/dos.webp');">
      <div class="container">
        <div class="text">
          <p class="title s-1">tenemos los mejores productos para construccion, latoneria y ornamentacióni de todo el mercado</p>
        </div>
        <a class="button is-primary">Ver todos productos</a>
      </div>
    </div>
    <div class="swiper-slide" style="background-image: url('../assets/uno.webp');">
      <div class="container">
        <div class="text">
          <p class="title s-1">Puedes crear una cuenta para tener super descuentos</p>
        </div>
        <a class="button is-primary">Crear cuenta</a>
      </div>
    
    </div>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
  <script>
    let swiper = new Swiper(".slider-hero", {
      loop: true,
      autoplay: {
        delay: 9500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination:{
        el: ".swiper-pagination",
      },
    });
  </script>
