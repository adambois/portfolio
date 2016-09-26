<?php /* Template Name: Homepage */ ?>
    
<?php get_header(); ?>

<div id="stage">
    <div id="stage-caption">
        <h1 class="display-4">Responsive Front-end Developer</h1>
        <ul class="skillset-list list-unstyled">
            <li>Responsive Web Development</li>
            <li><i class="fa fa-circle"></i>Magento</li>
            <li><i class="fa fa-circle"></i>WordPress</li>
            <li><i class="fa fa-circle"></i>Bootstrap</li>
        </ul>
        <a href="portfolio" role='button' class="btn btn-md">View my work</a>
        <a href="contact" role='button' class="btn btn-md">Get in touch</a>
    </div>
    <div class="scroll-button">
        <a class="fa fa-angle-down" href="#about"></a>
    </div>
</div>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="section-content">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1 class="display-4">Hi there! I'm <a href="about-me" class="name">Adam Boissevain</a>, a Magento Certified front-end developer located in Surrey.</h1>
                    <p class="lead">With over four years commercial experince providing responsive front-end development for Magento eCommerce & Wordpress CMS.</p>
                    <a href="about" class="btn btn-md">About me</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="section-content">
                <h2 class="display-4 section-title">Services</h2>
                <div class="col-sm-12 col-lg-4">
                    <figure>
                        <img src="" />
                    </figure>
                    <h5>Magento</h5>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <figure>
                        <img src="" />
                    </figure>
                    <h5>Wordpress</h5>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <figure>
                        <img src="" />
                    </figure>
                    <h5>PSD to HTML</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-content">
                <h2 class="display-4 section-title">Recent Work</h2>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="section-content">
                <h2 class="display-4">Let's Work Together</h2>
                <p class="lead"></p>
                <a href="about" class="btn btn-md">Contact</a>
                <a href="about" class="btn btn-md">Enquire</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>