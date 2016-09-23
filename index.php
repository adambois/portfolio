<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div id="content" role="main">
                <div class="scroll-to-top">
                    <a href="#" class="scrollToTop fa fa-chevron-up"></a>
                </div> 
                <?php 
                if ( have_posts() ) :
                // Start the Loop.
                while ( have_posts() ) : the_post(); ?>

                <article role="article" id="post_<?php the_ID(); ?>">
                            <header class="entry-header">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
                            </header>
                            <section>
                                <?php the_excerpt(); ?>
                            </section>
                            <footer class="entry-footer">
                                <div class="entry-meta">
                                    <span class="entry-terms author">Written by <a href=""><?php the_author(); ?></a></span>
                                    <span class="entry-terms category">Posted in <a href="">Books</a></span>
                                    <span class="entry-terms commets"><a href="">2 Comments</a></span>
                                </div>
                            </footer>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </div>
        
        <div class="col-sm-4" id="sidebar" role="navigation">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer();
