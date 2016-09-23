
<?php
// check if the flexible content field has rows of data
if( have_rows('case_studies_archive') ): ?>

     <!-- loop through the rows of data -->
    <?php while ( have_rows('case_studies_archive') ) : the_row(); ?>

        <?php if( get_row_layout() == 'post_archive_layout' ):

            $background = get_sub_field('background');
            $image = get_sub_field('image');
            $dataCat = get_sub_field('category');
            $involvement = get_sub_field('involvement'); ?>

            <div class="portfolio-posts <?php echo $dataCat ?> col-xs-6 col-md-6 col-lg-4" data-cat="<?php echo $dataCat ?>">
                <figure>
                    <?php echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />'; ?>
                    <figcaption>
                        <div class="caption-container">
                            <h2><?php the_title(); ?></h2>
                            <?php echo get_excerpt(125); ?>
                            <a href="<?php the_permalink(); ?>" role='button' class="btn btn-md">View Case Study</a>
                        </div>
                    </figcaption>
                </figure>
           </div>

        <?php endif; ?>

    <?php endwhile; ?>

    <?php else : ?>

        // No posts found

<?php endif; ?>