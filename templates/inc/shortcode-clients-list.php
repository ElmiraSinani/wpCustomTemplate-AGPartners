<?php

function clients_list_callback( $atts ) {
   
    $a = shortcode_atts( array(
        'count' => '-1',
        'popup' => 'show'
    ), $atts );
    
    $popup = $a['popup'];
    
    $content = '';
    $row1Start = ''; $row1End = '';
    $row2Start = ''; $row2End = '';
    $row3Start = ''; $row3End = '';
    $contentRow1 = ''; $contentRow2 = ''; $contentRow3 = '';
    
    $query_args = array ( 'post_type' => 'industries', 'posts_per_page' => '10' );            
    $the_query = new WP_Query( $query_args ); 
    $i = 1;
    if ( $the_query->have_posts() ) : 
        
        $content = '<div class="clients-industry right '.$popup.'"><img class="industry-bg" src="'.get_bloginfo('template_url').'/images/upload/our-clients-across-industries.png" />';
        while ( $the_query->have_posts() ) : $the_query->the_post(); 
            
            if( $i <= 4 ){
                $row1Start = '<div class="industry-row top">'; 
                $row1End = '</div>';
                $contentRow1 .= '<div class="img item">';
                $contentRow1 .= get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' => 'industry-img' ));
                $contentRow1 .= '<div class="modal"><div class="content"><span class="close">x</span>';
                $contentRow1 .= get_the_content();
                $contentRow1 .= '</div></div>';
                $contentRow1 .= '</div>';
            }
            elseif ( $i >= 4 && $i <= 6 ) {
                $row2Start = '<div class="industry-row midd">'; 
                $row2End = '<div class="line-left"></div><div class="line-right"></div></div>';
                $contentRow2 .= '<div class="img item">';
                $contentRow2 .= get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' => 'industry-img' ));
                $contentRow2 .= '<div class="modal"><div class="content">';
                $contentRow2 .= get_the_content();
                $contentRow2 .= '</div></div>';
                $contentRow2 .= '</div>';
            }
            else{
                $row3Start = '<div class="industry-row bottom">'; 
                $row3End = '</div>';
                $contentRow3 .= '<div class="img item">';
                $contentRow3 .= get_the_post_thumbnail(get_the_ID(), 'thumbnail', array( 'class' => 'industry-img' ));
                $contentRow3 .= '<div class="modal"><div class="content">';
                $contentRow3 .= get_the_content();
                $contentRow3 .= '</div></div>';
                $contentRow3 .= '</div>';
            }

        $i++;
        endwhile;
               
        $content .= $row1Start . $contentRow1 .$row1End;
        $content .= $row2Start . $contentRow2 .$row2End;
        $content .= $row3Start . $contentRow3 .$row3End;
        
        $content .= '</div>';
        
        wp_reset_postdata();
    else:
        $content .=  _e('Sorry, no posts matched your criteria.'); 
    endif; 
    
    

    return $content;
}
add_shortcode( 'altgate-industry-list', 'clients_list_callback' );