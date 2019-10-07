<?php

function slider_consulting_callback( $atts ) {
    $a = shortcode_atts( array(
        'count' => '-1'
    ), $atts );
    
    $count = $a['count']; //post per page
    $content = '';
    
    $query_args = array ( 'post_type' => 'sl-consulting', 'posts_per_page' => $count );            
    $the_query = new WP_Query( $query_args ); 
    
    if ( $the_query->have_posts() ) : 
        
        $content .= '<ul class="slider-testimonial" >';
        while ( $the_query->have_posts() ) : $the_query->the_post(); 
        
        //$subTitle = rwmb_meta( 'sub_title', 'type=text' ) ? rwmb_meta( 'sub_title', 'type=text' ) : '';
       
        $content .= '<li>';
        $content .= '<div class="content">'.get_the_content().'</div>';
        $content .= '<div class="name">'.get_the_title().'</div>';
        //$content .= '<div class="country">'.$subTitle.'</div>';
        $content .= '</li>';

        endwhile;
                   
        $content .= '</ul>';
        
        wp_reset_postdata();
    else:
        $content .=  _e('Sorry, no posts matched your criteria.'); 
    endif; 
    

    return $content;
}
add_shortcode( 'slider-consulting', 'slider_consulting_callback' );