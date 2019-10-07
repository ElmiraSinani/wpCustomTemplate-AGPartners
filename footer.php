		

            <div class="footer-section">
                <div class="container">
                    <div class="speaking">
                        <?php if ( is_active_sidebar( 'footer-speaking' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-speaking' ); ?>
                        <?php endif; ?>
                    </div>
                    <!-- <div class="blog">
                        <?php if ( is_active_sidebar( 'footer-blog' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-blog' ); ?>
                        <?php endif; ?>                  
                    </div>
                    
                    <div class="news">
                        <?php if ( is_active_sidebar( 'footer-news' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-news' ); ?>
                        <?php endif; ?>
                    </div> -->
                    
                    <div class="social">
                        <?php if ( is_active_sidebar( 'footer-social' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-social' ); ?>
                        <?php endif; ?>
                    </div>
                    
                    
                </div>
            </div>
            
            <div class="footer-copy-section">
                <div class="container text-center">
                    <?php if ( is_active_sidebar( 'footer-copy' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-copy' ); ?>
                    <?php endif; ?> 
                </div>                    
            </div>



	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
        
        <!-- Modal Box for Newsletter -->
	
        <div class="newsletter-modal">
            
            <div class="modal-content">
                <div class="close-modal">
                    <a>CLOSE WINDOW  |  X</a>
                </div>
                <div class="title1">Subscribe to our newsletter</div>
                <div class="title2">High Impact Ideas. Expert Advice.</div>
                <div class="title3">Covering leadership and talent solutions that produce business results. </div>
                
                <?php echo do_shortcode('[contact-form-7 id="241" title="Newsletter Form"]'); ?>
				
                <div class="modal-footer">
                    Your Information will never be shared with any third party.
                </div>
                
            </div>
            
        </div>
        
        
        
        
</body>

</html>
