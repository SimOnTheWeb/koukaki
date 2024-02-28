// SWIPER

const swiper = new Swiper(".swiper", {
  effect: "coverflow",
  coverflowEffect: {
    rotate: 60,
    depth: 100,
    slideShadows: false,
    modifier: 1,
  },
  slidesPerView: 3,
  spaceBetween: 40,
  direction: "horizontal",
  centeredSlides: true,
  loop: true,
  speed: 1000,
  grabCursor: true,
  autoplay: {
    delay: 1000,
  },
});
