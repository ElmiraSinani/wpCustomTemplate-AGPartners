<?php

get_header();

// Get data from URL into variables
$_name = $_GET['s'] != '' ? $_GET['s'] : '';

// Start the Query
$args = array(
        'post_type'     =>  'blog', // your CPT
        's'             =>  $_name, // looks into everything with the keyword from your 'name field'
    );
$query = new WP_Query( $args );

// Open this line to Debug what's query WP has just run
// var_dump($vehicleSearchQuery->request);
?>


<div class="container">
    
    <div class="blog-row">
        
        <div class="content">
            
        <?php if ( $query->have_posts() ) : ?>
        <div class="keword-block">
            <h1><?php echo $_GET['s']; ?></h1>
            <p>Here are more articles about <?php echo $_GET['s']; ?>. Enjoy!</p>
        </div>    
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            
            <div class="item">
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
                <?php endif; ?>
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="date">
                    <?php the_date('F d, Y', '<span>', '</span>'); ?>
                    <div class="line"></div>
                </div>
                <div class="text">
                    <?php echo excerpt(22); ?>
                </div>
                
                <div class="read-more">
                    <div class="line-right"></div>
                    <div class="line-left"></div>
                    <a href="<?php the_permalink(); ?>" >Read More</a>                    
                </div>
            </div>

        <?php
            endwhile;

                wp_reset_postdata();
            else:
                _e('Sorry, no posts matched your search text.'); 
            endif; 
        ?>
        </div> <!-- /.blog-content -->
        
        <div class="sidebar">
            <?php get_sidebar('blog'); ?>
        </div> <!-- /.blog-sidebar -->
            
    </div>

</div>



<?php get_footer(); ?>
