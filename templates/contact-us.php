<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>
    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
   
    <?php the_content(); ?>
    
<?php endwhile; endif; ?>


<!--<div class="container">
    
    <div class="contact-us-form">
        <div class="left">
            <div class="text-group">
                <label for="name" class="no-padd-top"> YOUR NAME <span>first / last</span></label>
                <input type="text" id="name" />
            </div>
            <div class="text-group">
                <label for="email">YOUR EMAIL</label>
                <input type="email" id="email" />
            </div>
            <div class="text-group">
                <label for="organization">Organization</label>
                <input type="text" id="organization" />
            </div>
            <div class="text-group">
                <label for="title">Title</label>
                <input type="text" id="title" />
            </div>
            <div class="text-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" />
            </div>
        </div> 
        <div class="right">
            <div class="textarea-group first">
                <label for="describe">Please briefly describe your reason for contacting Altgate Partners</label>
                <textarea id="describe"></textarea>
            </div>
            <div class="textarea-group second">
                <label for="source">How did you hear about Altgate Partners?</label>
                <textarea id="source"></textarea>
            </div>
        </div>
        <div class="seperator"></div> 
        <div class="submit-group">
            
            <input type="submit" value="CLICK HERE TO SUBMIT" />
        </div>
        
    </div>
</div>-->

<?php get_footer(); ?>