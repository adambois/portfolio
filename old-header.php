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

<body <?php body_class(); ?>>
    
    <header id="header-wrap" role="banner">
        <div id="header" <?php if(is_front_page()) : ?>class="home-header"<?php endif; ?>>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="navbar navbar-default navbar-fixed-top col-xs-2 hidden-md-up">
                      <button type="button" class="navbar-toggle fa fa-bars" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
                      </button>
                    </div>
                    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas hidden-md-up" role="navigation">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'	=> 'navbar',
                                    'container'      => false,
                                    'menu_class'		=> 'nav navbar-nav',
                                    'fallback_cb'	=> '__return_false',
                                    'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth'			=> 2,
                                ) );
                            ?>
                    </nav>
                    
                                        
                    <div id="header-logo" class="col-sm-12 col-md-5 col-lg-4">
                        <h1><a href="<?php bloginfo('home'); ?>">Adam <span class="surname">Boissevain</span></a></h1>
                    </div>

                    <nav id="main-navigation" role="navigation" class="navbar col-md-7 col-lg-6 hidden-sm-down">
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
                    
                    

                   <div id="social-menu" class="col-md-4 col-lg-2 hidden-sm-down">
                       <ul class="social-links list-unstyled"> 
                           <li><a href="https://www.linkedin.com/in/adam-boissevain-3280405b?trk=hp-identity-name"><i class="fa fa-linkedin-square"></i></a></li>
                       </ul>
                   </div>
                </div>
           </div>
        </div>
    </header>
    
    