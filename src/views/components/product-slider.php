<div id="ps" class="product-slider">
  <div class="container">
    <div class="text">
      <h2 class="title s-2">Productos Destacados</h2>
      <p class="subtitle s-5">Los mejores productos del mercado</p>
    </div>
    <div class="swiper products">
      <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<script>
  let swiper2 = new Swiper(".products", {
    loop:true,
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

