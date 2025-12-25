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

    // Main JavaScript - only if file exists
    $js_file = get_template_directory() . '/js/main.js';
    if ( file_exists( $js_file ) ) {
        wp_enqueue_script( 
            'rishikesh-vedic-script', 
            get_template_directory_uri() . '/js/main.js', 
            array( 'jquery' ), 
            wp_get_theme()->get( 'Version' ), 
            true 
        );
    }

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
    $bg_color      = get_theme_mod( 'background_color', 'FAF8F3' );

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
 * Customizer additions - Load only if file exists
 */
$customizer_file = get_template_directory() . '/inc/customizer.php';
if ( file_exists( $customizer_file ) ) {
    require $customizer_file;
}

/**
 * Custom Post Types - Load only if file exists
 */
$cpt_file = get_template_directory() . '/inc/custom-post-types.php';
if ( file_exists( $cpt_file ) ) {
    require $cpt_file;
}

/**
 * Custom template tags - Load only if file exists
 */
$template_tags_file = get_template_directory() . '/inc/template-tags.php';
if ( file_exists( $template_tags_file ) ) {
    require $template_tags_file;
}

/**
 * Elementor Support - Only if Elementor is active
 */
function rishikesh_vedic_elementor_support() {
    // Check if Elementor is active
    if ( ! did_action( 'elementor/loaded' ) ) {
        return;
    }
    
    // Add Elementor support
    add_post_type_support( 'page', 'elementor' );
    add_post_type_support( 'post', 'elementor' );
    
    // Add support for custom post types if they exist
    if ( post_type_exists( 'astrologer' ) ) {
        add_post_type_support( 'astrologer', 'elementor' );
    }
}
add_action( 'init', 'rishikesh_vedic_elementor_support', 20 );

/**
 * Register Elementor Locations - Only if Elementor is active
 */
function rishikesh_vedic_register_elementor_locations( $elementor_theme_manager ) {
    if ( ! did_action( 'elementor/loaded' ) ) {
        return;
    }
    
    $elementor_theme_manager->register_location( 'header' );
    $elementor_theme_manager->register_location( 'footer' );
    $elementor_theme_manager->register_location( 'single' );
    $elementor_theme_manager->register_location( 'archive' );
}
add_action( 'elementor/theme/register_locations', 'rishikesh_vedic_register_elementor_locations' );

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
            'description' => get_bloginfo( 'description' ),
        );
        
        $logo = get_theme_mod( 'custom_logo' );
        if ( $logo ) {
            $schema['logo'] = wp_get_attachment_url( $logo );
        }
        
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
        $og_description = has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 20 );
        $og_url = get_permalink();
        
        echo '<meta property="og:title" content="' . esc_attr( $og_title ) . '" />' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( $og_description ) . '" />' . "\n";
        echo '<meta property="og:url" content="' . esc_url( $og_url ) . '" />' . "\n";
        echo '<meta property="og:type" content="article" />' . "\n";
        
        if ( has_post_thumbnail() ) {
            $og_image = get_the_post_thumbnail_url( $post->ID, 'full' );
            echo '<meta property="og:image" content="' . esc_url( $og_image ) . '" />' . "\n";
        }
    }
}
add_action( 'wp_head', 'rishikesh_vedic_og_tags' );

/**
 * Optimize images for performance
 */
add_filter( 'wp_lazy_loading_enabled', '__return_true' );

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
    if ( did_action( 'elementor/loaded' ) ) {
        if ( class_exists( '\Elementor\Plugin' ) && \Elementor\Plugin::$instance->db->is_built_with_elementor( get_the_ID() ) ) {
            $classes[] = 'elementor-page';
        }
    }

    return $classes;
}
add_filter( 'body_class', 'rishikesh_vedic_body_classes' );

/**
 * Add theme support for WooCommerce (if needed for selling services)
 */
function rishikesh_vedic_woocommerce_support() {
    if ( class_exists( 'WooCommerce' ) ) {
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }
}
add_action( 'after_setup_theme', 'rishikesh_vedic_woocommerce_support' );

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
 * Increase memory limit for Elementor
 */
@ini_set( 'memory_limit', '256M' );

/**
 * Fix Elementor compatibility issues
 */
function rishikesh_vedic_elementor_compatibility() {
    // Remove conflicting actions
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
    
    // Ensure jQuery is loaded
    if ( ! wp_script_is( 'jquery', 'enqueued' ) ) {
        wp_enqueue_script( 'jquery' );
    }
}
add_action( 'wp_enqueue_scripts', 'rishikesh_vedic_elementor_compatibility', 1 );

/**
 * Create default pages on theme activation
 */
function rishikesh_vedic_create_default_pages() {
    // Check if pages already exist
    $pages_created = get_option( 'rishikesh_vedic_pages_created' );
    
    if ( $pages_created ) {
        return;
    }
    
    // Default pages to create
    $default_pages = array(
        'Home' => array(
            'post_title'   => 'Home',
            'post_content' => '<!-- wp:paragraph --><p>Welcome to Rishikesh Vedic. Edit this page with Elementor to create your custom homepage.</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'home',
        ),
        'About Us' => array(
            'post_title'   => 'About Us',
            'post_content' => '<!-- wp:paragraph --><p>Learn about our authentic Vedic astrology services.</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'about',
        ),
        'Services' => array(
            'post_title'   => 'Services',
            'post_content' => '<!-- wp:paragraph --><p>Explore our Vedic astrology services and readings.</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'services',
        ),
        'Astrologers' => array(
            'post_title'   => 'Our Astrologers',
            'post_content' => '<!-- wp:paragraph --><p>Meet our experienced Vedic astrologers from Rishikesh.</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'astrologers',
        ),
        'Contact' => array(
            'post_title'   => 'Contact Us',
            'post_content' => '<!-- wp:paragraph --><p>Get in touch with us for any questions or to book a reading.</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'contact',
        ),
        'Booking' => array(
            'post_title'   => 'Book Your Reading',
            'post_content' => '<!-- wp:paragraph --><p>Book your personalized Vedic astrology reading.</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_name'    => 'booking',
        ),
    );
    
    foreach ( $default_pages as $page_data ) {
        // Check if page already exists
        $page_check = get_page_by_path( $page_data['post_name'] );
        
        if ( ! $page_check ) {
            // Create the page
            $page_id = wp_insert_post( $page_data );
            
            // Set Home as front page
            if ( $page_data['post_name'] === 'home' && $page_id ) {
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $page_id );
            }
        }
    }
    
    // Mark pages as created
    update_option( 'rishikesh_vedic_pages_created', true );
}
add_action( 'after_switch_theme', 'rishikesh_vedic_create_default_pages' );

/**
 * Admin notice for Elementor installation
 */
function rishikesh_vedic_elementor_notice() {
    if ( ! did_action( 'elementor/loaded' ) ) {
        ?>
        <div class="notice notice-warning is-dismissible">
            <p><strong>Rishikesh Vedic Theme:</strong> For full drag & drop functionality, please install the <a href="<?php echo admin_url( 'plugin-install.php?s=elementor&tab=search&type=term' ); ?>">Elementor</a> plugin.</p>
        </div>
        <?php
    }
}
add_action( 'admin_notices', 'rishikesh_vedic_elementor_notice' );
?>