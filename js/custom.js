// Scroll to Content button //

$ = jQuery.noConflict();

$(document).ready(function(){

$(function() {
    $('a[href="#hello"]:not([href="#"])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 62
            }, 800);
            return false;
        }
    });
});

$(function() {
    $('a[href="#mainContent"]:not([href="#"])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 49
            }, 800);
            return false;
        }
    });
});
	
//Check to see if the window is top if not then display button
$(window).scroll(function(){
        if ($(this).scrollTop() > 150) {
                $('.scrollToTop').fadeIn();
        } else {
                $('.scrollToTop').fadeOut();
        }
        
        if ($(this).height() + $(this).scrollTop() >= $(document).height() - 230) {
            $('.scroll-to-top').addClass('absolute');
        } else {
            $('.scroll-to-top').removeClass('absolute');
        }
});

//Click event to scroll to top
$('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
});   

//Header will chage class and shrink when scrolled down the page
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 95,
            header = document.querySelector("#header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();

}); // DOC Ready


// Categories Post Annimation

$(function () {
		
    var filterList = {

        init: function () {

            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixItUp({
                selectors: {
                    target: '.portfolio-posts',
                    filter: '.filter'	
                },
                
                load: {
                    filter: '.mage' // show app tab on first load
                }
                
            });								

        }

    };

    // Run the show!
    filterList.init();
	
});


// PORTFOLIO SLIDESHOW

jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth});
	
	$('#slider ul').css({ width: sliderUlWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('button.control_prev').click(function () {
        moveLeft();
    });

    $('button.control_next').click(function () {
        moveRight();
    });

});

// ====== Mobile Hamburger Animation

$(function() {

    "use strict";

    var toggles = document.querySelectorAll(".c-hamburger");

    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };

    function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
        (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
        
          $('.mobile-menu-wrapper').slideToggle("show");

         
      });
    }

});

// ====== Mobile Hamburger Animation End

$(window).on('resize', function() {
    if  ($(window).width()>768) {
        $(function menuHeight() {
            var windowHeight = jQuery(window).height();
            $('.mobile-menu-wrapper').css("height", windowHeight);
        });
    }
});