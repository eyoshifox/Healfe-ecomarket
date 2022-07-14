
// Свайпер для товаров недели
new Swiper(".swiper-popular", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 0,
      modifier: 1,
      slideShadows: true,
    },
    loop:true,
    autoplay:{
     delay:5000,
     stopOnLastSlide:false,
     disableOnInteraction:false
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
// Свайпер для акциий
  new Swiper(".mySwiper", {
    spaceBetween: 30,
    breakpoints:{
           320: {
               slidesPerView: 1,
          },
    },
    centeredSlides: true,
    autoplay: {
      delay:5000,
      stopOnLastSlide:false,
      disableOnInteraction:false
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });