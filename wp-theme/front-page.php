<?php
/**
 * The template for displaying the front page
 * 
 * This is the template that displays the homepage with customizable hero section
 * 
 * @package Rishikesh_Vedic
 * @since 1.0.0
 */

get_header();

// Get hero section settings from Customizer
$hero_bg_image = get_theme_mod( 'hero_background_image', '' );
$hero_opacity  = get_theme_mod( 'hero_overlay_opacity', '0.15' );
$hero_title    = get_theme_mod( 'hero_title', 'Ancient Himalayan Wisdom, Modern Clarity' );
$hero_subtitle = get_theme_mod( 'hero_subtitle', 'Connect with authentic Vedic astrologers from Rishikesh for personalized birth chart readings' );
$hero_btn_text = get_theme_mod( 'hero_button_text', 'Book Your Reading' );
$hero_btn_url  = get_theme_mod( 'hero_button_url', '/booking' );
?>

<!-- Hero Section -->
<section class="hero-section">
    <?php if ( $hero_bg_image ) : ?>
        <div class="hero-overlay" style="background-image: url(<?php echo esc_url( $hero_bg_image ); ?>); opacity: <?php echo esc_attr( $hero_opacity ); ?>;"></div>
    <?php endif; ?>
    
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="hero-title"><?php echo esc_html( $hero_title ); ?></h1>
            <p class="hero-subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url( $hero_btn_url ); ?>" class="btn btn-primary btn-lg">
                    <?php echo esc_html( $hero_btn_text ); ?>
                </a>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-outline btn-lg">
                    <?php esc_html_e( 'Learn More', 'rishikesh-vedic' ); ?>
                </a>
            </div>

            <!-- Trust Badges -->
            <div class="trust-badges">
                <div class="row">
                    <div class="col-md-4">
                        <div class="trust-badge">
                            <h4>35+ Years</h4>
                            <p><?php esc_html_e( 'Combined Experience', 'rishikesh-vedic' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="trust-badge">
                            <h4>1000+</h4>
                            <p><?php esc_html_e( 'Readings Completed', 'rishikesh-vedic' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="trust-badge">
                            <h4>4.9/5</h4>
                            <p><?php esc_html_e( 'Client Rating', 'rishikesh-vedic' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<main id="primary" class="site-main">
    
    <?php
    // Check if page is built with Elementor
    if ( class_exists( '\Elementor\Plugin' ) && \Elementor\Plugin::$instance->db->is_built_with_elementor( get_the_ID() ) ) {
        // Display Elementor content
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
    } else {
        // Display default homepage content
        ?>
        
        <!-- Features Section -->
        <section class="section section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title"><?php esc_html_e( 'Why Choose Rishikesh Vedic?', 'rishikesh-vedic' ); ?></h2>
                    <p class="section-subtitle"><?php esc_html_e( 'Authentic Himalayan wisdom with modern convenience', 'rishikesh-vedic' ); ?></p>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="feature-icon">🏔️</div>
                            <h3><?php esc_html_e( 'Authentic Masters', 'rishikesh-vedic' ); ?></h3>
                            <p><?php esc_html_e( 'Traditional astrologers from Rishikesh with decades of experience in guru-shishya lineages.', 'rishikesh-vedic' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="feature-icon">🌐</div>
                            <h3><?php esc_html_e( 'Professional Translation', 'rishikesh-vedic' ); ?></h3>
                            <p><?php esc_html_e( 'Every session includes expert translation so you receive full depth of insight with complete clarity.', 'rishikesh-vedic' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="feature-icon">⭐</div>
                            <h3><?php esc_html_e( 'Proven Accuracy', 'rishikesh-vedic' ); ?></h3>
                            <p><?php esc_html_e( 'Our astrologers are known for remarkably accurate predictions and life-changing guidance.', 'rishikesh-vedic' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Astrologers Section -->
        <?php
        $astrologers = new WP_Query( array(
            'post_type'      => 'astrologer',
            'posts_per_page' => 3,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ) );

        if ( $astrologers->have_posts() ) :
            ?>
            <section class="section section-cream">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="section-title"><?php esc_html_e( 'Meet Our Astrologers', 'rishikesh-vedic' ); ?></h2>
                        <p class="section-subtitle"><?php esc_html_e( 'Traditional masters carrying forward centuries of sacred knowledge', 'rishikesh-vedic' ); ?></p>
                    </div>

                    <div class="row g-4">
                        <?php
                        while ( $astrologers->have_posts() ) :
                            $astrologers->the_post();
                            $experience = get_post_meta( get_the_ID(), '_astrologer_experience', true );
                            $rating = get_post_meta( get_the_ID(), '_astrologer_rating', true );
                            ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="card-image">
                                            <?php the_post_thumbnail( 'medium' ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <?php if ( $experience ) : ?>
                                        <p><strong><?php echo esc_html( $experience ); ?>+ <?php esc_html_e( 'Years Experience', 'rishikesh-vedic' ); ?></strong></p>
                                    <?php endif; ?>
                                    <?php if ( $rating ) : ?>
                                        <p>⭐ <?php echo esc_html( $rating ); ?>/5</p>
                                    <?php endif; ?>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'View Profile', 'rishikesh-vedic' ); ?></a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="text-center mt-5">
                        <a href="<?php echo esc_url( home_url( '/astrologers' ) ); ?>" class="btn btn-outline-primary btn-lg">
                            <?php esc_html_e( 'View All Astrologers', 'rishikesh-vedic' ); ?>
                        </a>
                    </div>
                </div>
            </section>
            <?php
            wp_reset_postdata();
        endif;
        ?>

        <!-- CTA Section -->
        <section class="final-cta section">
            <div class="container text-center">
                <h2 class="section-title text-white"><?php esc_html_e( 'Ready to Discover Your Path?', 'rishikesh-vedic' ); ?></h2>
                <p class="section-subtitle text-white mb-4"><?php esc_html_e( 'Book your personalized Vedic astrology reading today', 'rishikesh-vedic' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/booking' ) ); ?>" class="btn btn-light btn-lg">
                    <?php esc_html_e( 'Book Your Reading', 'rishikesh-vedic' ); ?>
                </a>
            </div>
        </section>

    <?php } ?>

</main>

<?php
get_footer();
?>