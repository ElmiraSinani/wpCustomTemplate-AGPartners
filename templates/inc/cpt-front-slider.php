<?php

// function: post_type BEGIN
function home_slider_post_type(){
    
    $labels = array(
                    'name' => __( 'Home Slider'), 
                    'singular_name' => __('Home Slider'),
                    'rewrite' => array(
                        'slug' => __( 'home_slider' ) 
                    ),
                    'add_new' => _x('Add Item', 'home_slider'), 
                    'edit_item' => __('Edit Slide Post Item'),
                    'new_item' => __('New Slide Post Item'), 
                    'view_item' => __('View Slide Post'),
                    'search_items' => __('Search Home Sliders'), 
                    'not_found' =>  __('No Home Sliders Items Found'),
                    'not_found_in_trash' => __('No Home Sliders Items Found In Trash'),
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
                    'menu_position' => 27,
                    'supports' => array(
                            'title',
                            'editor',
                            'thumbnail'
                    )
             );
    
    register_post_type(__( 'home_slider' ), $args);        
} 

// function: home_slidermessages BEGIN
function home_slider_messages($messages)
{
    $messages[__( 'home_slider' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('Slide Post Updated. <a href="%s">View Slide Post</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Custom Field Updated.'),
                    3 => __('Custom Field Deleted.'),
                    4 => __('Slide Post Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('Home Sliders Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('Slide Post Published. <a href="%s">View Home Sliders</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('Home Sliders Saved.'),
                    8 => sprintf(__('Slide Post Submitted. <a target="_blank" href="%s">Preview Slide Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('Slide Post Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Slide Post</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('Slide Post Draft Updated. <a target="_blank" href="%s">Preview Slide Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: home_slider_messages END

// function: fetured_posts_filter BEGIN
function home_slider_categories()
{
    register_taxonomy(
            __( "home_slider_categories" ),
            array(__( "home_slider" )),
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
                            'slug' => 'home_slider_category',
                            'hierarchical' => true
                    )
            )
    );
} 


add_action( 'init', 'home_slider_post_type' );
add_filter( 'post_updated_messages', 'home_slider_messages' );
//add_action( 'init', 'home_slider_categories', 0 );