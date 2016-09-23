<?php get_header(); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div id="content" role="main">
                    <?php 
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                            get_template_part( 'content-single', get_post_format() );

                            if ( comments_open() || get_comments_number() ) :
                              comments_template();
                            endif;

                        endwhile; endif;
                    ?>
                </div>
            </div>
            
            <div class="col-sm-4" id="sidebar" role="navigation">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>