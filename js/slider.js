document.addEventListener('DOMContentLoaded', function() {
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true, // Cambiado a true para efecto infinito
    slidesPerView: "4", // Cambiado a "4" para mostrar 4 slides
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
  });
});
