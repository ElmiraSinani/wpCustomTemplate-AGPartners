<?php

function altgate_difference_callback( $atts ) {
    $a = shortcode_atts( array(
        'count' => '-1'
    ), $atts );
    
    $count = $a['count']; //post per page
    $content = '';
    
    $query_args = array ( 'post_type' => 'altgate-difference', 'posts_per_page' => $count );            
    $the_query = new WP_Query( $query_args ); 
    
    if ( $the_query->have_posts() ) : 
        
        $content .= '<div class="altgate-difference" >';
        while ( $the_query->have_posts() ) : $the_query->the_post(); 
        
        
        $content .= '<div class="item" >';
        $content .= '<div class="img">'.get_the_post_thumbnail().'</div>';
        $content .= '<h3>'.get_the_title().'</h3>';
        $content .= '<div class="underline-gray"></div>';
        $content .= '<div class="txt">'.wpautop(get_the_content()).'</div>';
        $content .= '</div >';

        endwhile;
                   
        $content .= '</ul>';
        
        wp_reset_postdata();
    else:
        $content .=  _e('Sorry, no posts matched your criteria.'); 
    endif; 
    

    return $content;
}
add_shortcode( 'altgate-difference-grid', 'altgate_difference_callback' );