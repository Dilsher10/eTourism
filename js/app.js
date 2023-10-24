// Populor Tours

$('.team-slider').owlCarousel({
    loop: true,            
    nav: false,
    autoplay: true,
    autoplayTimeout: 5000,
    smartSpeed: 450,
    margin: 20,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        991: {
            items: 3
        },
        1200: {
            items: 3
        },
        1920: {
            items: 3
        }
    }
});



// Header Categories

$('.brand-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:false,
    responsive:{
      0:{
        items:4
      },
      600:{
        items:4
      },
      1000:{
        items:5
      }
    }
  }) 



  // Filter

        (function ($) {
            $('#price-range-submit').hide();
            $("#min_price,#max_price").on('change', function () {
                $('#price-range-submit').show();
                var min_price_range = parseInt($("#min_price").val());
                var max_price_range = parseInt($("#max_price").val());
                if (min_price_range > max_price_range) {
                    $('#max_price').val(min_price_range);
                    }
                    $("#slider-range").slider({
                        values: [min_price_range, max_price_range]
                        });
                        });
                        
                        $("#min_price,#max_price").on("paste keyup", function () {                                        
                            $('#price-range-submit').show();
                            var min_price_range = parseInt($("#min_price").val());
                            var max_price_range = parseInt($("#max_price").val());
                            if(min_price_range == max_price_range){
                                max_price_range = min_price_range + 100;
                                $("#min_price").val(min_price_range);		
                                $("#max_price").val(max_price_range);
                                }
                                $("#slider-range").slider({
                                    values: [min_price_range, max_price_range]
                                    });
                                    });
                                                        })(jQuery);
                                                       


// Logo Slider

$(document).ready(function(){

    if($('.brands_slider').length)
         {
             var brandsSlider = $('.brands_slider');
 
             brandsSlider.owlCarousel(
             {
                 loop:true,
                 autoplay:false,
                 autoplayTimeout:5000,
                 nav:false,
                 dots:false,
                 autoWidth:true,
                 items:8,
                 margin:42
             });
 
             if($('.brands_prev').length)
             {
                 var prev = $('.brands_prev');
                 prev.on('click', function()
                 {
                     brandsSlider.trigger('prev.owl.carousel');
                 });
             }
 
             if($('.brands_next').length)
             {
                 var next = $('.brands_next');
                 next.on('click', function()
                 {
                     brandsSlider.trigger('next.owl.carousel');
                 });
             }
         }
 
 
     });
