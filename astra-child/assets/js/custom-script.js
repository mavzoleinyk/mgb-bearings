jQuery(function() {

    jQuery('#cart-punkt').hover(function () {
        jQuery('.widget_shopping_cart').addClass('widget_shopping_cart-open'); 
    }, function () {
        jQuery('#cart-punkt').data('timer', setTimeout(function () {
            jQuery('.widget_shopping_cart').removeClass('widget_shopping_cart-open'); 
        }, 200));
    });

});


jQuery(function() {

    const mainSlider = new Swiper('.main__slider', {
      slidesPerView: 1,
      spaceBetween: 0,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.main__arrow_next',
        prevEl: '.main__arrow_prev',
      },
    });

    const catalogSlider = new Swiper('.catalog__slider', {
      slidesPerView: "auto",
      spaceBetween: 8,
      scrollbar: {
        el: '.catalog__scrollbar',
        draggable: true
      }
    });

    const manufacturersSlider = new Swiper('.manufacturers__slider', {
      slidesPerView: "auto",
      spaceBetween: 8,
      scrollbar: {
        el: '.manufacturers__scrollbar',
        draggable: true
      }
    });

    const testimonialsSlider = new Swiper('.testimonials__slider', {
      slidesPerView: "auto",
      spaceBetween: 8,
      scrollbar: {
        el: '.testimonials__scrollbar',
        draggable: true
      }
    });

    const categoriesSlider = new Swiper('.categories__slider', {
      slidesPerView: "auto",
      spaceBetween: 8,
      scrollbar: {
        el: '.categories__scrollbar',
        draggable: true
      }
    });

    jQuery('.catalog__title').matchHeight();
    jQuery('.about__item .section__title').matchHeight();
    jQuery('.about__description').matchHeight();
    jQuery('.testimonial__name').matchHeight();
    jQuery('.category__title').matchHeight();
    
})