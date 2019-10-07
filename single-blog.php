<?php get_header(); ?>

<div class="container">
    
    <div class="blog-row">
        
        <div class="content">
            <?php $relatedPosts = ''; ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $relatedPosts = rwmb_meta( '_related_blog_posts', 'type=select' ) ? rwmb_meta( '_related_blog_posts', 'type=select' ) : ''; ?>

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
                    <?php the_content(); ?>
                </div>
            </div>

            <?php endwhile; endif; ?>
            
            
           
            
            <?php if ($relatedPosts != '' ): ?>
               <h1 class="related-articles">RELATED ARTICLES</h1>
                    
            <?php    
                foreach ($relatedPosts as $postId):  
                $blogPost = get_post($postId);
            ?>
            <div class="item">
                <?php echo  get_the_post_thumbnail ( $postId,  'full' ); ?>
                <h2 class="title"><?php echo $blogPost->post_title; ?></h2>
                <div class="date">
                    <?php echo get_the_date( 'F d, Y', $postId); ?>
                    <div class="line"></div>
                </div>
                <div class="text">
                    <?php echo excerpt(22); ?>
                </div>
                
                <div class="read-more">
                    <div class="line-right"></div>
                    <div class="line-left"></div>
                    <a href="<?php echo get_permalink( $postId ); ?>" >Read More</a>                    
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            
        </div>
        
        
        
        <div class="sidebar">
            <?php get_sidebar('blog'); ?>
        </div> <!-- /.blog-sidebar -->
        
    </div>
</div>

<?php get_footer(); ?>