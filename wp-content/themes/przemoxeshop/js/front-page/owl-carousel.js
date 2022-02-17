

window.addEventListener('DOMContentLoaded', () => {

    jQuery(document).ready(function(){
        jQuery(".owl-carousel").owlCarousel({
            nav: true,
            loop: true,
            dots: false,
            
            responsive:{
                0:{
                    items:1
                },
                1200:{
                    items:2
                }
            }
        });
      });

    
});