jQuery(document).ready(function($){
    $('#cart-punkt').hover(function () {
        $('.widget_shopping_cart').addClass('widget_shopping_cart-open'); 
    }, function () {
        $('#cart-punkt').data('timer', setTimeout(function () {
            $('.widget_shopping_cart').removeClass('widget_shopping_cart-open'); 
        }, 200));
    });
  });

