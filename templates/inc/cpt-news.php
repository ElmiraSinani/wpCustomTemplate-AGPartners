<?php

// function: post_type BEGIN
function news_post_type(){
    
    $labels = array(
                    'name' => __( 'News'), 
                    'singular_name' => __('Success Story'),
                    'rewrite' => array(
                        'slug' => __( 'news' ) 
                    ),
                    'add_new' => _x('Add Item', 'news'), 
                    'edit_item' => __('Edit News Post Item'),
                    'new_item' => __('New News Post Item'), 
                    'view_item' => __('View News Post'),
                    'search_items' => __('Search News'), 
                    'not_found' =>  __('No News Items Found'),
                    'not_found_in_trash' => __('No News Items Found In Trash'),
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
                    'menu_position' => 32,
                    'supports' => array(
                            'title',
                            'editor'
                    )
             );
    
    register_post_type(__( 'news' ), $args);        
} 

// function: newsmessages BEGIN
function news_messages($messages)
{
    $messages[__( 'news' )] = 
            array(
                    0 => '', 
                    1 => sprintf(('News Post Updated. <a href="%s">View News Post</a>'), esc_url(get_permalink($post_ID))),
                    2 => __('Custom Field Updated.'),
                    3 => __('Custom Field Deleted.'),
                    4 => __('News Post Updated.'),
                    5 => isset($_GET['revision']) ? sprintf( __('News Restored To Revision From %s'), wp_post_revision_title((int)$_GET['revision'], false)) : false,
                    6 => sprintf(__('News Post Published. <a href="%s">View News</a>'), esc_url(get_permalink($post_ID))),
                    7 => __('News Saved.'),
                    8 => sprintf(__('News Post Submitted. <a target="_blank" href="%s">Preview News Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
                    9 => sprintf(__('News Post Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview News Post</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                    10 => sprintf(__('News Post Draft Updated. <a target="_blank" href="%s">Preview News Post</a>'), esc_url( add_query_arg('preview', 'true', get_permalink($post_ID)))),
            );
    return $messages;

} // function: news_messages END

// function: fetured_posts_filter BEGIN
function news_categories()
{
    register_taxonomy(
            __( "news_categories" ),
            array(__( "news" )),
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
                            'slug' => 'news_category',
                            'hierarchical' => true
                    )
            )
    );
} 


add_action( 'init', 'news_post_type' );
add_filter( 'post_updated_messages', 'news_messages' );
add_action( 'init', 'news_categories', 0 );