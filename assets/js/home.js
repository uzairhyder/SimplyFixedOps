var swiper = new Swiper(".banner-slider", {
  effect: "fade",
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".reviews-slider", {
  // slidesPerView: 1,
  spaceBetween: 30,
  speed: 1000,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    1240: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 3,
    },
    991: {
      slidesPerView: 2,
    },
    540: {
      slidesPerView: 1,
    }
  }
});