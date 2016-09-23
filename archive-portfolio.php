<?php get_header(); ?>

<div class="page-content">
<!--    <div class="scroll-to-top">
        <a href="#" class="scrollToTop fa fa-chevron-up"></a>
    </div>-->
    <div id="stage" class="page-background portfolio-backgound">
        <div id="stage-caption">
            <div class="container">
                <h1 class="display-4">Portfolio</h1>
            </div>
        </div>
        <div class="scroll-button">
            <a class="fa fa-chevron-down" href="#mainContent"></a>
        </div>
    </div>
    <div id="mainContent">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-sm-12">
                    
                    <ul id="filters" class="clearfix">
                        <li><span class="filter active" data-filter=".mage, .wp">All</span></li>
                        <li><span class="filter" data-filter=".mage">Magento</span></li>
                        <li><span class="filter" data-filter=".wp">Wordpress</span></li>
                    </ul>
                    <section id="portfoliolist">
                        <div class="container-fluid">
                            <div class="row no-gutter">

                                <?php 
                                    if ( have_posts() ) : while ( have_posts() ) : the_post();

                                        get_template_part( 'content-portfolio', get_post_format() );

                                    endwhile; endif; 
                                ?>
                            </div>
                        </div>
                    </section>

            </div> <!-- /.col -->
        </div> <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div> <!-- /#mainContent -->
</div> <!-- /.page-content -->

<?php get_footer(); ?>