        <footer class="container-fluid">
            <div class="row">
                <?php dynamic_sidebar('footer-widget-area'); ?>
            </div>
            <p class="text-center">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
        </footer>

        <?php wp_footer(); ?>
<div class="mobile-nav-overlay mobile-nav-hidden"></div>
    </body>
</html>