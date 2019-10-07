<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="container">
            <div class="single-page">

            <h2><?php the_title(); ?></h2>
            
            <div class="img ">
                <?php if(has_post_thumbnail() ): ?>
                <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>


            <div class="entry">

                <?php the_content(); ?>

            </div>

            </div>
    </div>

    <?php endwhile;
endif; ?>

<?php get_footer(); ?>