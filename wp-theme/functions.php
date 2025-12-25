<?php
/**
 * Rishikesh Vedic Theme Functions
 * 
 * @package Rishikesh_Vedic
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function rishikesh_vedic_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1200, 800, true );

    // Add custom image sizes
    add_image_size( 'rishikesh-vedic-hero', 1920, 1080, true );
    add_image_size( 'rishikesh-vedic-card', 600, 400, true );
    add_image_size( 'rishikesh-vedic-thumbnail', 400, 300, true );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'rishikesh-vedic' ),
        'footer'  => esc_html__( 'Footer Menu', 'rishikesh-vedic' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add support for custom header
    add_theme_support( 'custom-header', array(
        'default-image'      => '',
        'width'              => 1920,
        'height'             => 1080,
        'flex-height'        => true,
        'flex-width'         => true,
        'header-text'        => true,
        'default-text-color' => '2D3748',
    ) );

    // Add support for custom background
    add_theme_support( 'custom-background', array(
        'default-color' => 'FAF8F3',
    ) );

    // Add support for Block Editor styles
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'editor-style.css' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'rishikesh_vedic_setup' );

/**
 * Set the content width in pixels
 */
function rishikesh_vedic_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'rishikesh_vedic_content_width', 1200 );
}
add_action( 'after_setup_theme', 'rishikesh_vedic_content_width', 0 );

/**
 * Enqueue scripts and styles
 */
function rishikesh_vedic_scripts() {
    // Google Fonts
    wp_enqueue_style( 
        'rishikesh-vedic-fonts', 
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Open+Sans:wght@300;400;600&display=swap', 
        array(), 
        null 
    );

    // Main stylesheet
    wp_enqueue_style( 
        'rishikesh-vedic-style', 
        get_stylesheet_uri(), 
        array(), 
        wp_get_theme()->get( 'Version' ) 
    );

    // Custom CSS from Customizer
    wp_add_inline_style( 'rishikesh-vedic-style', rishikesh_vedic_custom_css() );

    // Main JavaScript
    wp_enqueue_script( 
        'rishikesh-vedic-script', 
        get_template_directory_uri() . '/js/main.js', 
        array( 'jquery' ), 
        wp_get_theme()->get( 'Version' ), 
        true 
    );

    // Comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'rishikesh_vedic_scripts' );

/**
 * Register widget areas
 */
function rishikesh_vedic_widgets_init() {
    // Sidebar
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'rishikesh-vedic' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'rishikesh-vedic' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    // Footer Widget Areas
    for ( $i = 1; $i <= 4; $i++ ) {
        register_sidebar( array(
            'name'          => sprintf( esc_html__( 'Footer %d', 'rishikesh-vedic' ), $i ),
            'id'            => 'footer-' . $i,
            'description'   => sprintf( esc_html__( 'Add widgets here to appear in footer column %d.', 'rishikesh-vedic' ), $i ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>',
        ) );
    }
}
add_action( 'widgets_init', 'rishikesh_vedic_widgets_init' );

/**
 * Custom CSS from Customizer
 */
function rishikesh_vedic_custom_css() {
    $primary_color = get_theme_mod( 'primary_color', '#FFB84D' );
    $accent_color  = get_theme_mod( 'accent_color', '#2C7A7B' );
    $text_color    = get_theme_mod( 'text_color', '#2D3748' );
    $bg_color      = get_theme_mod( 'background_color', '#FAF8F3' );

    $css = "
        :root {
            --primary-color: {$primary_color};
            --accent-color: {$accent_color};
            --text-dark: {$text_color};
            --bg-cream: #{$bg_color};
        }
    ";

    return $css;
}

/**
 * Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Elementor Support
 */
function rishikesh_vedic_elementor_support() {
    // Add Elementor support
    add_post_type_support( 'page', 'elementor' );
    add_post_type_support( 'post', 'elementor' );
    add_post_type_support( 'astrologer', 'elementor' );
}
add_action( 'init', 'rishikesh_vedic_elementor_support' );

/**
 * Register Elementor Locations
 */
function rishikesh_vedic_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_location( 'header' );
    $elementor_theme_manager->register_location( 'footer' );
    $elementor_theme_manager->register_location( 'single' );
    $elementor_theme_manager->register_location( 'archive' );
}
add_action( 'elementor/theme/register_locations', 'rishikesh_vedic_register_elementor_locations' );

/**
 * Add custom Elementor widgets
 */
function rishikesh_vedic_register_elementor_widgets() {
    if ( did_action( 'elementor/loaded' ) ) {
        require_once get_template_directory() . '/inc/elementor-widgets.php';
    }
}
add_action( 'init', 'rishikesh_vedic_register_elementor_widgets' );

/**
 * SEO Optimization - Add Schema.org markup
 */
function rishikesh_vedic_schema_markup() {
    if ( is_front_page() ) {
        $schema = array(
            '@context'  => 'https://schema.org',
            '@type'     => 'Organization',
            'name'      => get_bloginfo( 'name' ),
            'url'       => home_url(),
            'logo'      => get_theme_mod( 'custom_logo' ) ? wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) : '',
            'description' => get_bloginfo( 'description' ),
            'sameAs'    => array(
                get_theme_mod( 'social_facebook', '' ),
                get_theme_mod( 'social_instagram', '' ),
                get_theme_mod( 'social_youtube', '' ),
            ),
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>';
    }
}
add_action( 'wp_head', 'rishikesh_vedic_schema_markup' );

/**
 * Add Open Graph meta tags for social sharing
 */
function rishikesh_vedic_og_tags() {
    if ( is_singular() ) {
        global $post;
        $og_title = get_the_title();
        $og_description = get_the_excerpt();
        $og_image = get_the_post_thumbnail_url( $post->ID, 'full' );
        $og_url = get_permalink();

        echo '<meta property="og:title" content="' . esc_attr( $og_title ) . '" />';
        echo '<meta property="og:description" content="' . esc_attr( $og_description ) . '" />';
        echo '<meta property="og:image" content="' . esc_url( $og_image ) . '" />';
        echo '<meta property="og:url" content="' . esc_url( $og_url ) . '" />';
        echo '<meta property="og:type" content="article" />';
    }
}
add_action( 'wp_head', 'rishikesh_vedic_og_tags' );

/**
 * Optimize images for performance
 */
add_filter( 'wp_lazy_loading_enabled', '__return_true' );

/**
 * Add async/defer to scripts for better performance
 */
function rishikesh_vedic_async_scripts( $tag, $handle ) {
    $async_scripts = array( 'rishikesh-vedic-script' );
    
    if ( in_array( $handle, $async_scripts ) ) {
        return str_replace( ' src', ' async src', $tag );
    }
    
    return $tag;
}
add_filter( 'script_loader_tag', 'rishikesh_vedic_async_scripts', 10, 2 );

/**
 * Add preconnect for Google Fonts
 */
function rishikesh_vedic_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'rishikesh_vedic_resource_hints', 10, 2 );

/**
 * Custom excerpt length
 */
function rishikesh_vedic_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'rishikesh_vedic_excerpt_length' );

/**
 * Custom excerpt more
 */
function rishikesh_vedic_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'rishikesh_vedic_excerpt_more' );

/**
 * Add body classes for better styling control
 */
function rishikesh_vedic_body_classes( $classes ) {
    // Add class if sidebar is active
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'has-sidebar';
    }

    // Add class for Elementor pages
    if ( class_exists( '\Elementor\Plugin' ) && \Elementor\Plugin::$instance->db->is_built_with_elementor( get_the_ID() ) ) {
        $classes[] = 'elementor-page';
    }

    return $classes;
}
add_filter( 'body_class', 'rishikesh_vedic_body_classes' );

/**
 * Add theme support for WooCommerce (if needed for selling services)
 */
function rishikesh_vedic_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'rishikesh_vedic_woocommerce_support' );

/**
 * Disable Gutenberg for specific post types (optional)
 */
function rishikesh_vedic_disable_gutenberg( $use_block_editor, $post_type ) {
    // Disable for astrologer post type if using Elementor
    if ( 'astrologer' === $post_type ) {
        return false;
    }
    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'rishikesh_vedic_disable_gutenberg', 10, 2 );

/**
 * Add custom admin CSS
 */
function rishikesh_vedic_admin_styles() {
    wp_enqueue_style( 
        'rishikesh-vedic-admin', 
        get_template_directory_uri() . '/css/admin.css', 
        array(), 
        wp_get_theme()->get( 'Version' ) 
    );
}
add_action( 'admin_enqueue_scripts', 'rishikesh_vedic_admin_styles' );

/**
 * Security: Remove WordPress version from head
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 * Security: Disable XML-RPC
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Performance: Remove emoji scripts
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Add custom dashboard widget
 */
function rishikesh_vedic_dashboard_widget() {
    wp_add_dashboard_widget(
        'rishikesh_vedic_help',
        'Rishikesh Vedic Theme Help',
        'rishikesh_vedic_dashboard_widget_content'
    );
}
add_action( 'wp_dashboard_setup', 'rishikesh_vedic_dashboard_widget' );

function rishikesh_vedic_dashboard_widget_content() {
    echo '<p><strong>Welcome to Rishikesh Vedic Theme!</strong></p>';
    echo '<p>Quick Links:</p>';
    echo '<ul>';
    echo '<li><a href="' . admin_url( 'customize.php' ) . '">Customize Theme</a></li>';
    echo '<li><a href="' . admin_url( 'edit.php?post_type=astrologer' ) . '">Manage Astrologers</a></li>';
    echo '<li><a href="' . admin_url( 'edit.php' ) . '">Manage Blog Posts</a></li>';
    echo '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Manage Menus</a></li>';
    echo '</ul>';
    echo '<p><a href="https://docs.rishikeshvedic.com" target="_blank">View Documentation</a></p>';
}
?>