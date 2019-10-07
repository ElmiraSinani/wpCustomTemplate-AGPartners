<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>
    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
   
    <?php the_content(); ?>
    
<?php endwhile; endif; ?>

<div class="container">
    
    <div class="blog-row">
        
        <div class="content">
        <?php
            $query_args = array ( 'post_type' => 'blog', 'posts_per_page' => '-1' );            
            $the_query = new WP_Query( $query_args );
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <div class="item">
                <div class="image">
                    <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>
                </div>   
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="author">
                    <?php echo get_the_author_meta('first_name') .' ' .get_the_author_meta('last_name');; ?>
                </div>
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
                _e('Sorry, no posts matched your criteria.'); 
            endif; 
        ?>
        </div> <!-- /.blog-content -->
        
        <div class="sidebar">
            <?php get_sidebar('blog'); ?>
        </div> <!-- /.blog-sidebar -->
            
    </div>

</div>

<?php get_footer(); ?>