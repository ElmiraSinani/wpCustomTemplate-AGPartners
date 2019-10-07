<?php

// function: post_type BEGIN
function testimonial_post_type(){
    
    $labels = array(
                    'name' => __( 'Testimonials'), 
                    'singular_name' => __('Success Story'),
                    'rewrite' => array(
                        'slug' => __( 'testimonial' ) 
                    ),
                    'add_new' => _x('Add Item', 'testimonial'), 
                    'edit_item' => __('Edit Testimonials Post Item'),
                    'new_item' => __('New Testimonials Post Item'), 
                    'view_item' => __('View Testimonials Post'),
                    'search_items' => __('Search Testimonials'), 
                    'not_found' =>  __('No Testimonials Items Found'),
                    'not_found_in_trash' => __('No Testimonials Items Found In Trash'),
                    'parent_item_colon' => ''
                );
    $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => true,
                    'capability_type' => 'post',
                    'hierarchical' => false,
                    'menu_position' => 29,
                    'supports' => array(
                            'title',
                            'editor'
                    )
             );
    
    register_post_type(__( 'testimonial' ), $args);        
} 

// function: testimonialmessages BEGIN
function testimonial_messages($messages)
{
    $messages[__( 'testimonial' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('Testimonials Post Updated. <a href="%s">View Testimonials Post</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Custom Field Updated.'),
                    3 => __('Custom Field Deleted.'),
                    4 => __('Testimonials Post Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('Testimonials Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('Testimonials Post Published. <a href="%s">View Testimonials</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('Testimonials Saved.'),
                    8 => sprintf(__('Testimonials Post Submitted. <a target="_blank" href="%s">Preview Testimonials Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('Testimonials Post Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Testimonials Post</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('Testimonials Post Draft Updated. <a target="_blank" href="%s">Preview Testimonials Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: testimonial_messages END

// function: fetured_posts_filter BEGIN
function testimonial_categories()
{
    register_taxonomy(
            __( "testimonial_category" ),
            array(__( "testimonial" )),
            array(
                    "hierarchical" => true,
                    "label" => __( "Categories" ),
                    "singular_label" => __( "Category" ),
                    "show_ui" => true,
                    "show_in_menu" => true,
                    "show_in_quick_edit" => true,
                    "public" => true,
                    "show_admin_column" => true,
                
                    "rewrite" => array(
                            'slug' => 'testimonial_category',
                            'hierarchical' => true
                    )
            )
    );
} 


add_action( 'init', 'testimonial_post_type' );
add_filter( 'post_updated_messages', 'testimonial_messages' );
add_action( 'init', 'testimonial_categories', 0 );