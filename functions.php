<?php
    //register Custom meta boxes
    require_once("templates/inc/metaBoxes.php");
    
    //register Featured Posts Custom Post Type
    //require_once("templates/inc/cpt-front-slider.php");
    require_once("templates/inc/cpt-news.php");
    require_once("templates/inc/cpt-blog.php");  
    require_once("templates/inc/cpt-altgate-difference.php");
    require_once("templates/inc/cpt-testimonial.php"); 
    require_once("templates/inc/cpt-consulting-slider.php"); 
    require_once("templates/inc/cpt-our-clients.php"); 
     
    
     //register Global Shortcodes
    require_once("templates/inc/shortcode-slider-testimonials.php");    
    require_once("templates/inc/shortcode-slider-consulting.php");    
    require_once("templates/inc/shortcode-altgate-difference-grid.php");    
    require_once("templates/inc/shortcode-post-grid.php");    
    require_once("templates/inc/shortcode-clients-list.php");    
    require_once("templates/inc/shortcode-footer-blog-list.php");    
    require_once("templates/inc/shortcode-footer-news-list.php");    
    

    // Add RSS links to <head> section
    automatic_feed_links();	

    // Clean up the <head>
    function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
   
    // thumbnails
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails'); 
    }
    
    
   
    
   /**
    * Proper way to enqueue scripts and styles.
    */
   function altgate_frontend_scripts() {
       
       //load scripts
        if (!is_admin()) {
            wp_deregister_script('jquery');
            wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.1.js', array(), '', false);
        }
//        wp_enqueue_style( 'bx-sl-css', get_template_directory_uri() . '/libs/bx-slider/jquery.bxslider.css', array(), '3.2' );
        wp_enqueue_script( 'bx-sl-scripts', get_template_directory_uri() . '/libs/bx-slider/jquery.bxslider.min.js', array(), '', true );
        
        wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array(), '', true );
        
   }
   add_action( 'wp_enqueue_scripts', 'altgate_frontend_scripts' );  
   
   
   function altgate_admin_scripts($hook) {
        wp_enqueue_script( 'admin-custom-scrip', get_template_directory_uri() . '/js/admin-scripts.js' );
    }
    add_action( 'admin_enqueue_scripts', 'altgate_admin_scripts' );
    
    //adding font sizes to editor
    if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
        function wpex_mce_text_sizes( $initArray ){
            $initArray['fontsize_formats'] = "5px 6px 7px 8px 9px 10px "
                    . "11px 12px 13px 14px 15px 16px 17px 18px 19px 20px "
                    . "21px 22px 23px 24px 25px 26px 27px 28px 29px 30px "
                    . "31px 32px 33px 34px 35px 36px 37px 38px 39px 40px "
                    . "41px 42px 43px 44px 45px 46px 47px 48px 49px 50px "
                    . "51px 52px 53px 54px 55px 56px 57px 58px 59px 60px "
                    . "71px 72px 73px 74px 75px 76px 77px 78px 79px 80px "
                    . "81px 82px 83px 84px 85px 86px 87px 88px 89px 90px "
                    . "91px 92px 93px 94px 95px 96px 97px 98px 99px 100px";
            return $initArray;
        }
    }
    add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes');
    
   
   //Register altgate Menues
   function register_companycom_menus() {
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu','altgate'),
                'footer-menu' => __('Footer Menu','altgate'),
            )
        );
    }
    add_action('init', 'register_companycom_menus');
    
    // Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer Speaking',
    		'id'   => 'footer-speaking',
    		'description'   => 'These are widgets for the footer Speaking Block.',
    		'before_widget' => '<p id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</p>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer Blog',
    		'id'   => 'footer-blog',
    		'description'   => 'These are widgets for the footer Blog list.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer News',
    		'id'   => 'footer-news',
    		'description'   => 'These are widgets for the footer News list.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer Social Block',
    		'id'   => 'footer-social',
    		'description'   => 'These are widgets for the footer social Block.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer Copyrights Block',
    		'id'   => 'footer-copy',
    		'description'   => 'These are widgets for the footer © Copyrights Block.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    //hide Widget titles
    //add_filter('widget_title','my_widget_title'); 
    function my_widget_title($t) {
        return null;
    }
    
    
    /**
    * Filter the except length to 20 characters.
    *
    * @param int $length Excerpt length.
    * @return int (Maybe) modified excerpt length.
    */
   function excerpt($limit) {
       
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        
            if (count($excerpt)>=$limit) {
              array_pop($excerpt);
              $excerpt = implode(" ",$excerpt).'...';
            } else {
              $excerpt = implode(" ",$excerpt);
            } 
            $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
        return $excerpt;
    }
    
    
    function wpse_load_custom_search_template(){
        if( isset($_REQUEST['search']) == 'blog' ) {
            require('blog-search-result.php');
            die();
        }
    }
    add_action('init','wpse_load_custom_search_template');
    
    // Enable shortcodes in text widgets
    add_filter('widget_text','do_shortcode');

?>