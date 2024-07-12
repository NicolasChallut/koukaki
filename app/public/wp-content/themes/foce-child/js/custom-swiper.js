document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      effect: 'coverflow',
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: true,
      grabCursor: true,
    });
  });
  