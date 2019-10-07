<?php

// function: post_type BEGIN
function altgate_difference_post_type(){
    
    $labels = array(
                    'name' => __( 'Altgate Difference'), 
                    'singular_name' => __('Success Story'),
                    'rewrite' => array(
                        'slug' => __( 'altgate-difference' ) 
                    ),
                    'add_new' => _x('Add Item', 'altgate-difference'), 
                    'edit_item' => __('Edit Altgate Difference Post Item'),
                    'new_item' => __('New Altgate Difference Post Item'), 
                    'view_item' => __('View Altgate Difference Post'),
                    'search_items' => __('Search Altgate Difference'), 
                    'not_found' =>  __('No Altgate Difference Items Found'),
                    'not_found_in_trash' => __('No Altgate Difference Items Found In Trash'),
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
                    'menu_position' => 30,
                    'supports' => array(
                            'title',
                            'editor',
                            'thumbnail'
                    )
             );
    
    register_post_type(__( 'altgate-difference' ), $args);        
} 

// function: altgate-differencemessages BEGIN
function altgate_difference_messages($messages)
{
    $messages[__( 'altgate-difference' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('Altgate Difference Post Updated. <a href="%s">View Altgate Difference Post</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Custom Field Updated.'),
                    3 => __('Custom Field Deleted.'),
                    4 => __('Altgate Difference Post Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('Altgate Difference Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('Altgate Difference Post Published. <a href="%s">View Altgate Difference</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('Altgate Difference Saved.'),
                    8 => sprintf(__('Altgate Difference Post Submitted. <a target="_blank" href="%s">Preview Altgate Difference Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('Altgate Difference Post Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Altgate Difference Post</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('Altgate Difference Post Draft Updated. <a target="_blank" href="%s">Preview Altgate Difference Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: altgate-difference_messages END

// function: fetured_posts_filter BEGIN
function altgate_difference_categories()
{
    register_taxonomy(
            __( "altgate-difference_categories" ),
            array(__( "altgate-difference" )),
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
                            'slug' => 'altgate-difference_category',
                            'hierarchical' => true
                    )
            )
    );
} 


add_action( 'init', 'altgate_difference_post_type' );
add_filter( 'post_updated_messages', 'altgate_difference_messages' );
//add_action( 'init', 'altgate_difference_categories', 0 );