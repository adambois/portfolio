<?php get_header(); ?>

<div class="page-content">
    <div class="scroll-to-top">
        <a href="#" class="scrollToTop fa fa-chevron-up"></a>
    </div> 
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
</div> <!-- /.page-content -->

<?php get_footer(); ?>