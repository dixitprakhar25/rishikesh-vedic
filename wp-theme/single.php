<?php
/**
 * The template for displaying all single posts
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
                        
                        <div class="entry-meta">
                            <?php
                            rishikesh_vedic_posted_on();
                            rishikesh_vedic_posted_by();
                            ?>
                        </div>
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

                    <footer class="entry-footer">
                        <?php rishikesh_vedic_entry_footer(); ?>
                    </footer>
                </article>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

                // Previous/next post navigation.
                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'rishikesh-vedic' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'rishikesh-vedic' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );

            endwhile;
            ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</main>

<?php
get_footer();
?>