<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<div id="homepage" class="page-content">
    
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-sm-12">

                <div id="stage">
                    <div id="stage-caption">
                        <div class="container">
                            <h1 class="display-4">Responsive Frontend Developer</h1>
                            <div class="split"></div>
                            <ul class="skillset-list list-unstyled">
                                <li>HTML</li>
                                <li><i class="fa fa-circle"></i>CSS</li> 
                                <li><i class="fa fa-circle"></i>JavaScript</li>
                                <li><i class="fa fa-circle"></i>Bootstrap</li>
                                <li><i class="fa fa-circle"></i>Magento</li>
                                <li><i class="fa fa-circle"></i>WordPress</li>
                            </ul>
                            <a href="portfolio" role='button' class="btn btn-md">View my work</a>
                            <a href="contact" role='button' class="btn btn-md">Get in touch</a>
                        </div>
                    </div>
                    <div class="scroll-button">
                        <a class="fa fa-chevron-down" href="#hello"></a>
                    </div>
                </div>

                <div class="message-block">
                    <h3 id="hello">Hi, I'm Adam and I am a freelance frontend developer based in Surrey</h3> 
                </div>

                <section id="feature-one">
                    <div class="container-fluid">
                        <div class="row no-gutter">
                            <div class="feature-content">
                                <h2 class="section-title display-4">Latest Work</h2>
                                
                                <?php query_posts('posts_per_page=4&post_type=portfolio'); 
                                    while ( have_posts() ) : the_post();

                                        get_template_part( 'content-portfolio-front', get_post_format() );

                                    endwhile; 
                                
                                    wp_reset_query(); 
                                ?>
                               
                               
                            </div>
                        </div>
                    </div>
                </section>
                
                <div class="message-block">
                     <div class="container">
                        <div class="row">
                            <div class="contact-message">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <h3>Let's work together</h3>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <a href="contact" role='button' class="btn btn-md">Get in touch</a>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>                           
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div> <!-- /.page-content -->

<?php get_footer(); ?>