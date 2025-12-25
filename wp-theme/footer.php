<?php
/**
 * The template for displaying the footer
 * 
 * Contains the closing of the #content div and all content after.
 * 
 * @package Rishikesh_Vedic
 * @since 1.0.0
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <?php if ( get_theme_mod( 'show_footer_widgets', true ) && ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) ) : ?>
            <div class="footer-widgets">
                <div class="container">
                    <div class="footer-widget-row">
                        <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
                            <?php if ( is_active_sidebar( 'footer-' . $i ) ) : ?>
                                <div class="footer-widget-column">
                                    <?php dynamic_sidebar( 'footer-' . $i ); ?>
                                </div>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                </div>
            </div><!-- .footer-widgets -->
        <?php endif; ?>

        <div class="site-info">
            <div class="container">
                <div class="footer-bottom">
                    <div class="copyright">
                        <?php
                        $copyright = get_theme_mod( 'footer_copyright', '© 2024 Rishikesh Vedic. All rights reserved.' );
                        echo wp_kses_post( $copyright );
                        ?>
                    </div>

                    <?php if ( has_nav_menu( 'footer' ) ) : ?>
                        <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'rishikesh-vedic' ); ?>">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer',
                                    'menu_id'        => 'footer-menu',
                                    'depth'          => 1,
                                    'fallback_cb'    => false,
                                )
                            );
                            ?>
                        </nav>
                    <?php endif; ?>

                    <?php
                    $facebook  = get_theme_mod( 'social_facebook', '' );
                    $instagram = get_theme_mod( 'social_instagram', '' );
                    $youtube   = get_theme_mod( 'social_youtube', '' );
                    $whatsapp  = get_theme_mod( 'social_whatsapp', '' );

                    if ( $facebook || $instagram || $youtube || $whatsapp ) :
                        ?>
                        <div class="social-links">
                            <?php if ( $facebook ) : ?>
                                <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Facebook', 'rishikesh-vedic' ); ?>">
                                    <span class="social-icon">Facebook</span>
                                </a>
                            <?php endif; ?>

                            <?php if ( $instagram ) : ?>
                                <a href="<?php echo esc_url( $instagram ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Instagram', 'rishikesh-vedic' ); ?>">
                                    <span class="social-icon">Instagram</span>
                                </a>
                            <?php endif; ?>

                            <?php if ( $youtube ) : ?>
                                <a href="<?php echo esc_url( $youtube ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'YouTube', 'rishikesh-vedic' ); ?>">
                                    <span class="social-icon">YouTube</span>
                                </a>
                            <?php endif; ?>

                            <?php if ( $whatsapp ) : ?>
                                <a href="https://wa.me/<?php echo esc_attr( str_replace( array( '+', ' ', '-' ), '', $whatsapp ) ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'WhatsApp', 'rishikesh-vedic' ); ?>">
                                    <span class="social-icon">WhatsApp</span>
                                </a>
                            <?php endif; ?>
                        </div><!-- .social-links -->
                    <?php endif; ?>
                </div><!-- .footer-bottom -->
            </div><!-- .container -->
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>