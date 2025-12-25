<?php
/**
 * The main template file
 * 
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * 
 * @package Rishikesh_Vedic
 * @since 1.0.0
 */

get_header(); ?>

<main id="primary" class="site-main">

    <?php if ( is_home() && ! is_front_page() ) : ?>
        <header class="page-header">
            <div class="container">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </div>
        </header>
    <?php endif; ?>

    <div class="container">
        <div class="content-area">
            
            <?php
            if ( have_posts() ) :

                // Start the Loop
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile;

                // Previous/next page navigation
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&laquo; Previous', 'rishikesh-vedic' ),
                    'next_text' => __( 'Next &raquo;', 'rishikesh-vedic' ),
                ) );

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </div><!-- .content-area -->

        <?php get_sidebar(); ?>

    </div><!-- .container -->

</main><!-- #primary -->

<?php
get_footer();
?>