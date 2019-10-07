<?php
/*
Template Name: Executive Coaching
*/
?>

<?php get_header(); ?>
    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	

<div class="about-us">
    
    <div class="slider-section">
        <div class="container" >
            <?php if ( has_post_thumbnail() ) : ?>            
                 <?php the_post_thumbnail(); ?>
            <?php endif; ?>
            <h2 class="page-title text-center">
                Coaching Executive Leaders in-Person <br/>
                and Virtually via Telepresence
            </h2>
        </div>
    </div> <!-- /slider-section -->
    
    <div class="container" >
        
        <h2 class="content-title">WHAT WE DO</h2>
        <div class="underline-blue"></div>
        <p class="fs16 mB40 text-center">
            Altgate Partners is a strategic leadership development consultancy dedicated to increasing effectiveness and impact of leaders and their teams to achieve extraordinary results and business growth.
        </p>
        <p class="fs24 mB50 text-center">
            With our expertise in executive coaching and a suite of strategic leadership 
            development solutions, we partner with our clients to:
        </p>
        
        <ul class="list-blue-arrows mB100">
            <li class="item">Build robust leadership pipelines</li>
            <li class="item">Accelerate breakthrough team performance</li>
            <li class="item">Prepare leaders and executives to meet tomorrow’s business challenges</li>
        </ul>
        
        <div class="altgate-difference mB60">
            <h2>The Altgate Difference</h2>
            <div class="underline-blue"></div>
            
            <div class="item">
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/Human-Centric.png" />
                </div>
                <h3><span>Human-Centric</span></h3>
                <div class="underline-gray"></div>
                <div class="txt">
                    <p>The client is central to everything we do. Your success and growth are our primary focus.</p>
                    <p>We are passionate about improving lives and seeing people grow and lead with purpose.</p>
                </div>
            </div>
            
            <div class="item">
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/Future-Trends.png" />
                </div>
                <h3><span>Innovation and Future Trends</span></h3>
                <div class="underline-gray"></div>
                <div class="txt">
                    <p>Our approaches are fueled by a fusion of multidisciplinary knowledge and experience.</p>
                    <p>Innovative and targeted, our solutions are personalized to each organization’s DNA to produce maximum impact.</p>
                </div>
            </div>
            
            <div class="item">
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/Leading-Practices.png" />
                </div>
                <h3><span>Leading Practices</span></h3>
                <div class="underline-gray"></div>
                <div class="txt">
                    <p>Traditional leadership and talent approaches do not work in today’s VUCA (Volatile, Uncertain, Changing, and Ambiguous) world. </p>
                    <p>Altgate Partners offer targeted modern solutions to today’s complex leadership challenges.</p>
                </div>
            </div>
            
            <div class="item">
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/Evidence-Based.png" />
                </div>
                <h3><span>Evidence-Based</span></h3>
                <div class="underline-gray"></div>
                <div class="txt">
                    We believe in blending measurement and research with strategic knowledge of the business to go deeper and address the root causes to deliver lasting results that matter.
                </div>
            </div>
            
            <div class="item">
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/Cultural-Intelligence.png" />
                </div>
                <h3><span>Cultural Intelligence</span></h3>
                <div class="underline-gray"></div>
                <div class="txt">
                    We are global citizens with international experiences across cultures and continents and we use our cultural intelligence to offer meaningful leadership solutions to global and multi-cultural leaders and their teams.
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/Enhanced-by-Technology.png" />
                </div>
                <h3><span>Enhanced by Technology</span></h3>
                <div class="underline-gray"></div>
                <div class="txt">
                    We use state-of-the-art telepresence and mobile technologies to offer our clients a quality executive coaching and leadership development experience.
                </div>
            </div>
            
            
        </div><!-- /altgate-difference -->
        
        <div class="our-team mB60">
            
            <div class="item">
                <h4>OuR TEAM</h4>
                <div class="underline-blue"></div>
                
                <div class="name">Dr. Nataliya Adelson</div>
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/Nataliya-Adelson.png" />
                </div>
                <div class="txt">
                    <p>
                        Dr. Nataliya Adelson delivers unparalleled coaching and consulting for her clients by combining practical business expertise with a background in psychology and neuroscience. For over 15 years, Dr. Adelson has leveraged her cross-disciplinary knowledge, global perspective, and corporate experience within Fortune 100 companies to provide transformative results as a leadership consultant, executive coach and trusted advisor.
                    </p>
                    <p>
                        Her ability to understand the nuances of human psychology and integrate those insights with the complexities of strategic planning allows her clients to improve their performance at personal, professional, team and corporate levels. Dr. Adelson works with existing leaders to sharpen their skillset, and also guides high potential leaders to emerge and succeed in a dynamic business environment.
                    </p>
<!--                    <p>
                        She has practically applied leadership development solutions across a wide-range of industries including technology, healthcare, life-sciences, and financial services. From individual and team coaching to designing and implementing corporate leadership development programs, Dr. Adelson takes an in-depth, focused approach, creating tailored solutions which provide long-term sustainable improvements for her clients.
                    </p>
                    <p>
                        Recognizing accountability as a key asset of leadership success, she promotes a healthy corporate culture, and coaches her clients to effectively manage relationships between C-level executives, board members, shareholders, and community stakeholders. Her global experience provides additional benefits for multinational executives shaping corporate culture across disparate geographies and time zones.
                    </p>
                    <p>
                        Dr. Adelson holds a doctorate in Organizational Psychology from Walden University and a Master’s degree in Clinical Psychology from Columbia University. She’s completed a number of post-graduate courses and certifications, including training at the College of Executive Coaching. Her clients value her ability to relate the latest marketplace insights, talent management strategies, and workforce development trends in a plain spoken and pragmatic style that is uniquely her own.
                    </p>
                    <p>
                        She’s a member of the Greater Philadelphia Senior Executive Group, the Society for Consulting Psychology, the New Jersey Organizational Development Network, and the Financial Women’s Association, as well as an active speaker and presenter in academic and professional forums. Dr. Adelson currently resides in Princeton, New Jersey, with her family and enjoys hiking in the Pine Barrens, traveling to discover new cities and cultures, and capturing the best moments with her camera along the way.
                    </p>-->
                    
                    
                </div>
                <div class="learn-more">
                    <a href="#">Learn More</a>
                </div>
            </div>
            
            <div class="item">
                <h4>OuR PARTNERS</h4>
                <div class="underline-blue"></div>
                <div class="name">Lorraine Moore</div>
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/Lorraine-Moore.png" />
                </div>
                <div class="txt">
                    <p>                        
                        Lorraine Moore is a strategically focused talent management and leadership specialist. She has a passion for placing the ‘right people in the right jobs’ and for setting them and the organization up for success. She has extensive experience in the domain of assessment and development specializing in Assessment/Development Centers, Potential and Readiness Assessment, Candidate Coaching and Competency Based Interviewing.
                    </p>
                    <p>
                        Talent challenges can be complex and Lorraine addresses them from the vantage point of her broad and deep experience in the following talent areas: Talent Strategy, Workforce Planning, Competency Frameworks, Performance Management Systems, High Potential Identification and Development, and Employee Engagement and Retention. At an organizational level, Lorraine’s strategic focus working at C- level is cascaded through the organization in the form of customized Performance Management and innovative training at all levels. 
                    </p>
                </div>
                <div class="learn-more">
                    <a href="#">Learn More</a>
                </div>
            </div>
            
            <div class="item">
                <h4>OuR CLIENTS</h4>
                <div class="underline-blue"></div>
                <div class="name"> </div>
                <div class="img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/upload/our-clients.png" />
                </div>
                <div class="txt">
                    <p>
                        Our Clients value Altgate Partners’ high-touch approach and range of solutions and capabilities that can be configured and scaled to meet their business’ unique needs and requirements.
                    </p>
                    <p>
                        From technology startups to Fortune 500 organizations, we support businesses at various stages of maturity to help achieve their strategic objectives.
                    </p>
                    <p class="fs24-blue">
                        We are a trusted resource for companies who seek to develop and retain talent at all levels.
                    </p>
                </div>
                <div class="learn-more">
                    <a href="#">Learn More</a>
                </div>
            </div>
            
        </div><!-- /our-team -->
        
        
        <?php //the_content(); ?>
    </div>	
    
    <div class="content-footer">
        <span class="blue">IMPACTFUL.</span> 
        <span class="green">experienced.</span>
        <span class="gray"> RESULTS.</span>
    </div> <!-- /content-footer -->
    
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>