<?php

// function: post_type BEGIN
function blog_post_type() {

    $labels = array(
        'name' => __('Blog Posts'),
        'singular_name' => __('Blog Post'),
        'rewrite' => array(
            'slug' => __('blog')
        ),
        'add_new' => _x('Add Item', 'blog'),
        'edit_item' => __('Edit Blog Post Item'),
        'new_item' => __('New Blog Post Item'),
        'view_item' => __('View Blog Post'),
        'search_items' => __('Search Blog Posts'),
        'not_found' => __('No Blog Posts Items Found'),
        'not_found_in_trash' => __('No Blog Posts Items Found In Trash'),
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
        'menu_position' => 31,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author'
        )
    );

    register_post_type(__('blog'), $args);
}

// function: blogmessages BEGIN
function blog_messages($messages) {
    $messages[__('blog')] = array(
                0 => '',
                1 => sprintf(('Blog Post Updated. <a href="%s">View Blog Post</a>'), esc_url(get_permalink($post_ID))),
                2 => __('Custom Field Updated.'),
                3 => __('Custom Field Deleted.'),
                4 => __('Blog Post Updated.'),
                5 => isset($_GET['revision']) ? sprintf(__('Blog Posts Restored To Revision From %s'), wp_post_revision_title((int) $_GET['revision'], false)) : false,
                6 => sprintf(__('Blog Post Published. <a href="%s">View Blog Posts</a>'), esc_url(get_permalink($post_ID))),
                7 => __('Blog Posts Saved.'),
                8 => sprintf(__('Blog Post Submitted. <a target="_blank" href="%s">Preview Blog Post</a>'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
                9 => sprintf(__('Blog Post Scheduled For: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Blog Post</a>'), date_i18n(__('M j, Y @ G:i'), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
                10 => sprintf(__('Blog Post Draft Updated. <a target="_blank" href="%s">Preview Blog Post</a>'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
    );
    return $messages;
}

// function: blog_messages END
// function: fetured_posts_filter BEGIN
function blog_categories() {
    register_taxonomy(
            __("blog-category"), 
            array(__("blog")),
            array(
                "hierarchical" => true,
                "label" => __("Categories"),
                "singular_label" => __("Category"),
                "show_ui" => true,
                "show_in_menu" => true,
                "show_in_quick_edit" => true,
                "public" => true,
                "show_admin_column" => true,
                "rewrite" => array(
                    'slug' => 'blog_category',
                    'hierarchical' => true
                )
            )
    );
}

add_action('init', 'blog_post_type');
add_filter('post_updated_messages', 'blog_messages');
add_action('init', 'blog_categories', 0);
