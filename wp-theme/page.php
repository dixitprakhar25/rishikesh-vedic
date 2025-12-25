<?php
/**
 * The template for displaying all pages
 * 
 * @package Rishikesh_Vedic
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="content-area">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>

                    <?php rishikesh_vedic_post_thumbnail(); ?>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rishikesh-vedic' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>
                </article>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
        </div>

        <?php
        // Show sidebar only if not using Elementor
        if ( ! class_exists( '\Elementor\Plugin' ) || ! \Elementor\Plugin::$instance->db->is_built_with_elementor( get_the_ID() ) ) {
            get_sidebar();
        }
        ?>
    </div>
</main>

<?php
get_footer();
?>