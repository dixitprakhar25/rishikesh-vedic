/**
 * Main JavaScript File
 * 
 * @package Rishikesh_Vedic
 * @since 1.0.0
 */

(function($) {
    'use strict';

    // Mobile Menu Toggle
    $('.menu-toggle').on('click', function() {
        $(this).toggleClass('active');
        $('.primary-menu-container ul').toggleClass('active');
        $(this).attr('aria-expanded', function(i, attr) {
            return attr === 'true' ? 'false' : 'true';
        });
    });

    // Smooth Scroll for Anchor Links
    $('a[href*="#"]:not([href="#"])').on('click', function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
                return false;
            }
        }
    });

    // Sticky Header on Scroll
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 100) {
            $('.site-header').addClass('scrolled');
        } else {
            $('.site-header').removeClass('scrolled');
        }
    });

    // Back to Top Button
    var backToTop = $('<button class="back-to-top" aria-label="Back to top">↑</button>');
    $('body').append(backToTop);

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 300) {
            backToTop.fadeIn();
        } else {
            backToTop.fadeOut();
        }
    });

    backToTop.on('click', function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    // Form Validation
    $('form').on('submit', function(e) {
        var isValid = true;
        $(this).find('[required]').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });

        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields.');
        }
    });

    // Image Lazy Loading Fallback
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    }

    // Accessibility: Skip to Content
    $('.skip-link').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $(target).attr('tabindex', '-1').focus();
    });

})(jQuery);