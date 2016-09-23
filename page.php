<?php get_header(); ?>

<div class="page-content">
<!--    <div class="scroll-to-top">
        <a href="#" class="scrollToTop fa fa-chevron-up"></a>
    </div>-->
    <div id="stage" class="page-background">
        <div id="stage-caption">
            <div class="container">
                <h1 class="display-4"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="scroll-button">
            <a class="fa fa-chevron-down" href="#mainContent"></a>
        </div>
    </div>
    <div id="mainContent">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <?php 
                        if ( have_posts() ) : while ( have_posts() ) : the_post();

                            get_template_part( 'content', get_post_format() );

                        endwhile; endif; 
                    ?>

                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div> <!-- /#mainContent -->
</div> <!-- /.page-content -->

<?php get_footer(); ?>