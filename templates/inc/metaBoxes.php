<?php

add_filter( 'rwmb_meta_boxes', 'ccode_meta_boxes' );
function ccode_meta_boxes( $meta_boxes ) {
        
    $meta_boxes[] = array(       
           'title'      => 'Banner Settings',
           'post_types' => array( 'home_slider' ),
           'context'    => 'normal',
           'priority'   => 'high',
           'fields' => array(           
               array(
                   'id'  => 'read_more_link',
                   'name' => __( 'Read More Link', 'altgate-text' ),
                   'type' => 'text'
               )                              
           )
    );  
    
    $meta_boxes[] = array(       
           'title'      => 'Testimonial Options',
           'post_types' => array( 'testimonial' ),
           'context'    => 'normal',
           'priority'   => 'high',
           'fields' => array(           
               array(
                   'id'  => 'sub_title',
                   'name' => __( 'Country / Subtitle', 'altgate-text' ),
                   'type' => 'text'
               )                              
           )
    );  
    
    $meta_boxes[] = array(       
           'title'      => 'Post Options',
           'post_types' => array( 'post' ),
           'context'    => 'normal',
           'priority'   => 'high',
           'fields' => array(   
               array(
                   'id'  => 'custom_name',
                   'name' => __( 'Sub Title', 'altgate-text' ),
                   'type' => 'text'
               ),
               array(
                   'id'  => 'short_text',
                   'name' => __( 'Short Description', 'altgate-text' ),
                   'type' => 'wysiwyg'
               ),                              
               array(
                   'id'  => 'custom_link',
                   'name' => __( 'Custom More Link', 'altgate-text' ),
                   'type' => 'text'
               )               
           )
    );    
    
    $meta_boxes[] = array(
        'title'      => 'Select Related Articles',
        
        'post_types' => array( 'blog' ),
        'context'    => 'normal',
        'priority'   => 'high',
            'fields' => array(
			
                array(
                    //'name' => __( 'Related Posts', 'altgate-text' ),
                    'id'         => '_related_blog_posts',
                    'type' => 'post',
                    'post_type'   => array( 'blog' ),
                    'multiple'    => true,
                    'field_type'  => 'select_advanced',
                ),
			
            ),
	);
    
    return $meta_boxes;
}
