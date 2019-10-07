<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

    <?php /* If this is a tag archive */
    } elseif (is_tag()) { ?>
        <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

    <?php /* If this is a daily archive */
    } elseif (is_day()) { ?>
        <h2>Archive for <?php the_time('F jS, Y'); ?></h2>

    <?php /* If this is a monthly archive */
    } elseif (is_month()) { ?>
        <h2>Archive for <?php the_time('F, Y'); ?></h2>

    <?php /* If this is a yearly archive */
    } elseif (is_year()) { ?>
        <h2>Archive for <?php the_time('Y'); ?></h2>

    <?php /* If this is an author archive */
    } elseif (is_author()) { ?>
        <h2>Author Archive</h2>

    <?php /* If this is a paged archive */
    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Blog Archives</h2>

    <?php } ?>

        <div class="container">
    
            <div class="blog-row">
        
                <div class="content">

                    <?php while (have_posts()) : the_post(); ?>

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

                    <?php endwhile; ?>
                    <?php else : ?>
                        <h2>Nothing found</h2>
                    <?php endif; ?>                

                </div> <!-- /.blog-content -->

                   <div class="sidebar">
                       <?php get_sidebar('blog'); ?>
                   </div> <!-- /.blog-sidebar -->

               </div>

           </div>

<?php get_footer(); ?>