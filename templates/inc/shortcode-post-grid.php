<?php

function post_grid_callback( $atts ) {
    $a = shortcode_atts( array(
        'count' => '-1',
        'category-slug' => '',
		'heading' => '',
		'style' => ''
    ), $atts );
    
    $count = $a['count']; //post per page
    $categorySlug = $a['category-slug']; //post per page
	$heading = $a['heading'];
	$style = $a['style'];
   
    $content = '';
    
    $query_args = array ( 'posts_per_page' => $count, 'category_name'=>$categorySlug );            
    $the_query = new WP_Query( $query_args ); 
    
    if ( $the_query->have_posts() ) : 
        
		if($heading !='' ){
			$content .= '<h4 class="our-team-heading">'.$heading.'</h4>';
			$content .= '<div class="underline-blue"></div>';
		}
        $content .= '<div class="our-team '.$style.'" >';
		
        while ( $the_query->have_posts() ) : $the_query->the_post(); 
        
        $subTitle = rwmb_meta( 'custom_name', 'type=text' ) ? rwmb_meta( 'custom_name', 'type=text' ) : '';
        $shortTxt = rwmb_meta( 'short_text', 'type=wysiwyg' ) ? rwmb_meta( 'short_text', 'type=wysiwyg' ) : '';
        
        $content .= '<div class="item" >'; 
		if($heading==''){
        $content .= '<h4>'.get_the_title().'</h4>';
		$content .= '<div class="underline-blue"></div>';
		}
        if($subTitle!=''){
        $content .= '<div class="name">'.$subTitle.'</div>';
		}
        $content .= '<div class="img">'.get_the_post_thumbnail().'</div>'; 
		if($style==''){		
        $content .= '<div class="txt">'.wpautop( $shortTxt ).'</div>';        
        $content .= '<div class="learn-more"><a href="'.get_permalink().'">Learn More</a></div>';
		} else {
			$content .= '<div class="txt">'.wpautop(get_the_content()).'</div>';
		}
        $content .= '</div >';

        endwhile;
                   
        $content .= '</ul>';
        
        wp_reset_postdata();
    else:
        $content .=  _e('Sorry, no posts matched your criteria.'); 
    endif; 
    

    return $content;
}
add_shortcode( 'post-grid', 'post_grid_callback' );