<?php

// function: post_type BEGIN
function sl_consulting_post_type(){
    
    $labels = array(
                    'name' => __( 'Consulting Slider'), 
                    'singular_name' => __('Success Story'),
                    'rewrite' => array(
                        'slug' => __( 'sl-consulting' ) 
                    ),
                    'add_new' => _x('Add Item', 'sl-consulting'), 
                    'edit_item' => __('Edit Consulting Slider Post Item'),
                    'new_item' => __('New Consulting Slider Post Item'), 
                    'view_item' => __('View Consulting Slider Post'),
                    'search_items' => __('Search Consulting Slider'), 
                    'not_found' =>  __('No Consulting Slider Items Found'),
                    'not_found_in_trash' => __('No Consulting Slider Items Found In Trash'),
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
                    'menu_position' => 28,
                    'supports' => array(
                            'title',
                            'editor'
                    )
             );
    
    register_post_type(__( 'sl-consulting' ), $args);        
} 

// function: sl-consultingmessages BEGIN
function sl_consulting_messages($messages)
{
    $messages[__( 'sl-consulting' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('Consulting Slider Post Updated. <a href="%s">View Consulting Slider Post</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Custom Field Updated.'),
                    3 => __('Custom Field Deleted.'),
                    4 => __('Consulting Slider Post Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('Consulting Slider Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('Consulting Slider Post Published. <a href="%s">View Consulting Slider</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('Consulting Slider Saved.'),
                    8 => sprintf(__('Consulting Slider Post Submitted. <a target="_blank" href="%s">Preview Consulting Slider Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('Consulting Slider Post Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Consulting Slider Post</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('Consulting Slider Post Draft Updated. <a target="_blank" href="%s">Preview Consulting Slider Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: sl-consulting_messages END

// function: fetured_posts_filter BEGIN
function sl_consulting_categories()
{
    register_taxonomy(
            __( "sl-consulting_categories" ),
            array(__( "sl-consulting" )),
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
                            'slug' => 'sl-consulting_category',
                            'hierarchical' => true
                    )
            )
    );
} 


add_action( 'init', 'sl_consulting_post_type' );
add_filter( 'post_updated_messages', 'sl_consulting_messages' );
//add_action( 'init', 'sl_consulting_categories', 0 );