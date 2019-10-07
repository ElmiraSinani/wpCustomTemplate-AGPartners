<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="container">

            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>


            <div class="entry">
                <?php the_content(); ?>
            </div>


        </div>

    <?php endwhile; ?>



<?php else : ?>

    <h2>Not Found</h2>

<?php endif; ?>

<?php get_footer(); ?>