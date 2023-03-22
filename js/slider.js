var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  freeMode: false,
  simulateTouch: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "progressbar",
  },
  breakpoints: {
    400: {
      slidesPerView: 1,
      spaceBetween: 5,
      simulateTouch: true,
    },
    500: {
      slidesPerView: 2,
      spaceBetween: 5,
      simulateTouch: true,
    },
    800: {
      slidesPerView: 2,
      spaceBetween: 5,
      simulateTouch: true,
    },

    1000: {
      slidesPerView: 3,
      spaceBetween: 5,
      simulateTouch: true,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 0,
      freeMode: false,
    },
  },
});

// Initial render of the pagination
if (window.innerWidth > 1199.98) {
  swiper.pagination.destroy();
}

window.addEventListener("resize", function () {
  // If screen size is below 1200, remove pagination
  if (window.innerWidth > 1199.98) {
    swiper.pagination.destroy();

    // Get the swiper id element
    var swiperId = document.getElementById("swiperId");

    // Add the flex-xl-wrap class form swiperID
    swiperId.classList.add("flex-xl-wrap");
  }
  // If screen size is above 1200, add pagination
  if (window.innerWidth < 1200) {
    swiper.pagination.init();
    swiper.pagination.update();

    // Get the swiper id element
    var swiperId = document.getElementById("swiperId");

    // Remove the flex-xl-wrap class form swiperID
    swiperId.classList.remove("flex-xl-wrap");
  }
});
