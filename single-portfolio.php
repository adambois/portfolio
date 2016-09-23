<?php get_header(); ?>

<div class="page-content">
<!--    <div class="scroll-to-top">
        <a href="#" class="scrollToTop fa fa-chevron-up"></a>
    </div> -->
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-sm-12">

                <div id="stage" class="page-background <?php the_field('background_position') ?>" style="background-image: url('<?php the_field('portfolio_stage_background'); ?>');">
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
                    <section id="case-studies-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="overview">
                                        <h2>Overview</h2>
                                        <?php 
                                            if ( have_posts() ) : while ( have_posts() ) : the_post();

                                                get_template_part( 'content', get_post_format() );

                                            endwhile; endif; 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="services">
                                        <?php
                                            // check if the flexible content field has rows of data
                                            if( have_rows('service_section') ): ?>

                                                <!-- loop through the rows of data -->
                                               <?php while ( have_rows('service_section') ) : the_row(); ?>

                                                   <?php if( get_row_layout() == 'services_block' ):
                                                        $client = get_sub_field('client');
                                                        $sector = get_sub_field('sector'); 
                                                        $service = implode(', ', get_sub_field('service')); ?>
                                                
                                                        <p>Client: <span><?php echo $client ?></span></p>
                                                        <p>Sector: <span><?php echo $sector ?></span></p>
                                                        
                                                        <h4>Services</h4>
                                                        
                                                        <?php
                                                            $labels = array();
                                                            $field = get_sub_field_object('service');
                                                            $values = get_sub_field('service');

                                                            foreach ($values as $value) {
                                                                $labels[] = $field['choices'][ $value ];
                                                            }

                                                            echo '<ul>';

                                                                foreach ($labels as $label){
                                                                    echo '<li>'.$label.'</li>';
                                                                }

                                                            echo '</ul>';
                                                        ?>
               
                                                    <?php endif; ?>

                                                <?php endwhile; ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                
                <?php
                    // check if the flexible content field has rows of data
                    if( have_rows('case_studies_sections') ): ?>
                        
                         <!-- loop through the rows of data -->
                        <?php while ( have_rows('case_studies_sections') ) : the_row(); ?>

                            <?php if( get_row_layout() == 'left_image_right_text' ):
                                
                                $image = get_sub_field('image');
                                $mainTitle = get_sub_field('main_title');
                                $secondaryTitle = get_sub_field('secondary_title');
                                $paragraph = get_sub_field('paragraph'); 
                                $sectionStyle = get_sub_field('section_style');
                            ?>

                                <section id="case-studies-1" class="<?php echo $sectionStyle ?>">
                                    <div class="container">
                                        <div class="row">
                                            <div class="case-studies-content">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6">
                                                        <h6><?php echo $secondaryTitle; ?></h6>
                                                        <h2><?php echo $mainTitle; ?></h4>
                                                        <p class="lead"><?php echo $paragraph; ?></p>
                                                    </div>
                                                    <div class="col-lg-6 left-layout-image">
                                                        <div class="section-image-container" style="background-image:url('<?php echo $image ?>');">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </section>
                         
                            <?php endif; ?>


                            <?php if( get_row_layout() == 'right_image_left_text' ):
                                
                                $image = get_sub_field('image');
                                $mainTitle = get_sub_field('main_title');
                                $secondaryTitle = get_sub_field('secondary_title');
                                $paragraph = get_sub_field('paragraph');
                                $sectionStyle = get_sub_field('section_style');
                            ?>
                         
                                <section id="case-studies-1" class="<?php echo $sectionStyle ?>">
                                    <div class="container">
                                        <div class="row">
                                            <div class="case-studies-content">
                                                <div class="col-lg-12">
                                                    <div class="col-lg-6 left-layout-image">
                                                        <div class="section-image-container" style="background-image:url('<?php echo $image ?>');">
                                                        </div>
                                                    </div>
                                                     <div class="col-lg-6">
                                                        <h6><?php echo $secondaryTitle; ?></h6>
                                                        <h2><?php echo $mainTitle; ?></h4>
                                                        <p class="lead"><?php echo $paragraph; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                         
                            <?php endif; ?>
                         
                            <?php if( get_row_layout() == 'portfoilo_slider' ):
                                
                                $desktopImage = get_sub_field('desktop_image');
                                $laptopImage = get_sub_field('laptop_image');
                                $tabletImage = get_sub_field('tablet_image');
                                $mobileImage = get_sub_field('mobile_image');
                                $sectionStyle = get_sub_field('section_style');
                            ?>
                         
                                <section id="case-studies-1" class="<?php echo $sectionStyle ?>">
                                    <div class="container-fluid">
                                        <div class="row no-gutter">
                                            <div class="case-studies-content">
                                                <div class="col-lg-12">
                                                    <div id="slider">
                                                        <button class="control_next fa fa-chevron-right"></button>
                                                        <button class="control_prev fa fa-chevron-left"></button>
                                                        <ul class="flex-container">
                                                            <?php while ( have_rows('sider_images') ) : the_row(); 
                                                                $image = get_sub_field('image'); ?>

                                                                <li><?php echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />'; ?></li>

                                                            <?php endwhile; ?>
                                                        </ul>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                         
                            <?php endif; ?>

                        <?php endwhile; ?>
                         
                    <?php endif; ?>
                        
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div><!-- /.container-fluid -->
    </div> <!--#mainContent -->
</div> <!-- /.page-content -->

<?php get_footer(); ?>