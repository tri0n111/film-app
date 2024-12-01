const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    speed: 300,
    slidesPerView: 4,
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: 'true',
    },

    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
      },
  });

