<div class="widget-list">
    <?php get_template_part( 'blog', 'searchform' ); ?>
</div>
<div class="widget-list">
    <h2>Recent Posts</h2>    
    <ul class="recent-posts">
        <?php
            $query_args = array ( 'post_type' => 'blog', 'posts_per_page' => '3' );            
            $the_query = new WP_Query( $query_args );
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <li>
                 <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>  
            </li>
        <?php
            endwhile;
                wp_reset_postdata();
            else:
                echo '<li>' . _e('Sorry, no posts matched your criteria.') . '</li>'; 
            endif; 
        ?>
    </ul> <!-- /.blog-content -->    
</div>

<div class="widget-list">
    <h2>Categories</h2>
    <?php 
        $args = array(
            'taxonomy'  => 'blog-category',
            'title_li' => ''
        );
    ?>
    <ul class="blog-cats">
        <?php  wp_list_categories( $args );  ?>
    </ul>
    
</div>

<div class="widget-list">
    <div class="newsletter-title">Subscribe to our newsletter </div>
    <div class="newsletter-subtitle">High Impact Ideas. Expert Advice</div>  
    <div class="newsletter-widget">
        <!--<div class="form-content">                    
            <div class="form-input-item">
                <label for="name">YOUR NAME</label>
                <input id="name" type="text">
            </div>
            <div class="form-input-item">
                <label for="mail">YOUR EMAIL</label>
                <input id="mail" type="text">
            </div>                    
        </div>
        <div class="form-submit">
            <input type="submit" value="CLICK HERE TO SUBMIT">
        </div> -->
		<?php echo do_shortcode('[contact-form-7 id="241" title="Newsletter Form"]'); ?>
    </div> 
    <div class="newsletter-footer">* Your Information will never be shared with any third party.</div>
</div>