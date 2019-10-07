jQuery(document).ready(function(){ 
    
    //front page slider 
    jQuery('.front-slider').bxSlider({
        controls: false,
        speed: 1000,
        auto: true
    });
    
    //testimonials slider
    jQuery('.slider-testimonial').bxSlider({
        controls: false,
        speed: 1000,
        adaptiveHeight: true,
        auto: true,
        responsive: true
    });
    
    jQuery('.open-newsletter-popup').on( 'click', function(){
        window.scrollTo(0, 0);
        jQuery('.newsletter-modal').show();
    });
   
    jQuery('.close-modal').on( 'click', function(){        
        jQuery('.newsletter-modal').hide();
    });
    
    //Coaching page acardion
    jQuery('.acardion-list-items li:first-child').addClass('active');
    jQuery('.acardion-list-items li').on( 'click', function(){
        jQuery('.acardion-list-items li').removeClass('active');
        jQuery(this).addClass('active');        
        var id = jQuery(this).index();        
        jQuery('.acardion-content-items li').hide();  
        jQuery('.acardion-content-items li').eq(id).show();
    });
    
    //clients-industry modal
   
    var width = jQuery(window).width();
    if ( width <= 900 ) {
        jQuery( '.clients-industry.show .industry-img' ).on('click', function(){
            jQuery('.modal').hide();
            jQuery(this).parent().find('.modal').show();
        });
        jQuery( '.clients-industry.show .close' ).on('click', function(){            
            jQuery(this).closest( ".modal" ).hide();
        });
    } else {
        jQuery( '.clients-industry.show .industry-img' ).hover(
            function() {
                jQuery('.clients-industry .industry-img').css({'z-index':'20'});
                jQuery(this).css({'z-index':'70'});
                jQuery(this).parent().css({'z-index':'50'});
                jQuery(this).parent().find('.modal').css({'z-index':'60'}).show();
            }, function() {
                jQuery('.clients-industry .industry-img').css({'z-index':'10'});
                jQuery(this).css({'z-index':'10'});
                jQuery(this).parent().css({'z-index':'10'});
                jQuery(this).parent().find('.modal').hide();
            }
        );
    }
   
    
    
    jQuery('.close-mobile-menu').on('click', function(){
        jQuery(this).parent().hide();
    });
    jQuery('.show-mobile-menu').on('click', function(){        
        jQuery(this).parent().find('div.main-menu').show();
    });
    

});