<?php

function footer_news_callback( $atts ) {
    $a = shortcode_atts( array(
        'count' => '-1'
    ), $atts );
    
    $count = $a['count']; //post per page
    
    $query_args = array ( 'post_type' => 'news', 'posts_per_page' => $count );            
    $the_query = new WP_Query( $query_args ); 
    
    if ( $the_query->have_posts() ) :         
        $content .= '<ul>';
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
                $content .= '<li>';
                $content .= '<a href="'.get_permalink().'">'.get_the_title().'</a>';
                $content .= '</li>';
            endwhile;                   
        $content .= '</ul>';
        wp_reset_postdata();
    else:
        $content .=  _e('Sorry, no posts matched your criteria.'); 
    endif; 
    

    return $content;
}
add_shortcode( 'footer-news', 'footer_news_callback' );