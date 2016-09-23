<!DOCTYPE html>

<html class="no-js" lang="en">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="author" content="">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<header id="header-wrap" role="banner">
        <div id="header" <?php if(is_front_page()) : ?>class="home-header"<?php endif; ?>>
            <div class="container-fluid">
                <div class="row">
                    
                    <div id="header-logo" class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/main-logo.png" alt="Adam Boissevain" /></a>
                    </div>
                    
                    <div class="menu-button col-xs-6 col-sm-6 hidden-md-up">
                        <button class="c-hamburger c-hamburger--htx">
                            <span>toggle menu</span>
                        </button>
                    </div>
                    
                    <div class="mobile-menu-wrapper">
                        <nav id="main-navigation" role="navigation" class="navbar col-md-6 col-lg-6">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location'	=> 'navbar',
                                        'container'         => false,
                                        'menu_class'		=> 'nav navbar-nav',
                                        'fallback_cb'	    => '__return_false',
                                        'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth'			    => 2,
                                        'walker'            => new ads_walker_nav_menu()
                                    ) );
                                ?>
                        </nav>

                        <div id="social-menu" class="col-md-3 col-lg-3">
                            <ul class="list-unstyled"> 
                                <li>
                                    <a href="https://www.linkedin.com/in/adam-boissevain-3280405b?trk=hp-identity-name"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/adam-boissevain-3280405b?trk=hp-identity-name"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/adam-boissevain-3280405b?trk=hp-identity-name"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>                
        </div>
</header>