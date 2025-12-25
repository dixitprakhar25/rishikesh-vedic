<?php
/**
 * Theme Customizer
 * 
 * Full control over colors, fonts, layout, and all theme options
 * 
 * @package Rishikesh_Vedic
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add postMessage support for site title and description
 */
function rishikesh_vedic_customize_register( $wp_customize ) {
    
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    // ========================================================================
    // COLORS SECTION
    // ========================================================================
    $wp_customize->add_section( 'rishikesh_vedic_colors', array(
        'title'    => __( 'Theme Colors', 'rishikesh-vedic' ),
        'priority' => 30,
    ) );

    // Primary Color
    $wp_customize->add_setting( 'primary_color', array(
        'default'           => '#FFB84D',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'       => __( 'Primary Color (Saffron)', 'rishikesh-vedic' ),
        'description' => __( 'Main brand color used for buttons, links, and accents', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_colors',
        'settings'    => 'primary_color',
    ) ) );

    // Accent Color
    $wp_customize->add_setting( 'accent_color', array(
        'default'           => '#2C7A7B',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'label'       => __( 'Accent Color (Teal)', 'rishikesh-vedic' ),
        'description' => __( 'Secondary color for headings and highlights', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_colors',
        'settings'    => 'accent_color',
    ) ) );

    // Text Color
    $wp_customize->add_setting( 'text_color', array(
        'default'           => '#2D3748',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
        'label'       => __( 'Text Color', 'rishikesh-vedic' ),
        'description' => __( 'Main text color for body content', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_colors',
        'settings'    => 'text_color',
    ) ) );

    // ========================================================================
    // TYPOGRAPHY SECTION
    // ========================================================================
    $wp_customize->add_section( 'rishikesh_vedic_typography', array(
        'title'    => __( 'Typography', 'rishikesh-vedic' ),
        'priority' => 35,
    ) );

    // Heading Font
    $wp_customize->add_setting( 'heading_font', array(
        'default'           => 'Playfair Display',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'heading_font', array(
        'label'       => __( 'Heading Font', 'rishikesh-vedic' ),
        'description' => __( 'Font family for headings (H1-H6)', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_typography',
        'type'        => 'select',
        'choices'     => array(
            'Playfair Display' => 'Playfair Display (Elegant Serif)',
            'Merriweather'     => 'Merriweather (Classic Serif)',
            'Lora'             => 'Lora (Modern Serif)',
            'Montserrat'       => 'Montserrat (Clean Sans-serif)',
            'Raleway'          => 'Raleway (Elegant Sans-serif)',
            'Poppins'          => 'Poppins (Modern Sans-serif)',
        ),
    ) );

    // Body Font
    $wp_customize->add_setting( 'body_font', array(
        'default'           => 'Open Sans',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'body_font', array(
        'label'       => __( 'Body Font', 'rishikesh-vedic' ),
        'description' => __( 'Font family for body text', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_typography',
        'type'        => 'select',
        'choices'     => array(
            'Open Sans'    => 'Open Sans (Clean & Readable)',
            'Roboto'       => 'Roboto (Modern)',
            'Lato'         => 'Lato (Friendly)',
            'Source Sans Pro' => 'Source Sans Pro (Professional)',
            'Nunito'       => 'Nunito (Rounded)',
        ),
    ) );

    // Font Size
    $wp_customize->add_setting( 'base_font_size', array(
        'default'           => '16',
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'base_font_size', array(
        'label'       => __( 'Base Font Size (px)', 'rishikesh-vedic' ),
        'description' => __( 'Base font size for body text', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_typography',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 12,
            'max'  => 24,
            'step' => 1,
        ),
    ) );

    // ========================================================================
    // HERO SECTION
    // ========================================================================
    $wp_customize->add_section( 'rishikesh_vedic_hero', array(
        'title'    => __( 'Hero Section', 'rishikesh-vedic' ),
        'priority' => 40,
    ) );

    // Hero Background Image
    $wp_customize->add_setting( 'hero_background_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_background_image', array(
        'label'       => __( 'Hero Background Image', 'rishikesh-vedic' ),
        'description' => __( 'Upload a background image for the hero section', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_hero',
        'settings'    => 'hero_background_image',
    ) ) );

    // Hero Overlay Opacity
    $wp_customize->add_setting( 'hero_overlay_opacity', array(
        'default'           => '0.15',
        'sanitize_callback' => 'rishikesh_vedic_sanitize_float',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'hero_overlay_opacity', array(
        'label'       => __( 'Background Image Opacity', 'rishikesh-vedic' ),
        'description' => __( 'Control the opacity of the hero background image (0 = invisible, 1 = fully visible)', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_hero',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 1,
            'step' => 0.05,
        ),
    ) );

    // Hero Title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => 'Ancient Himalayan Wisdom, Modern Clarity',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'       => __( 'Hero Title', 'rishikesh-vedic' ),
        'description' => __( 'Main heading text for hero section', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_hero',
        'type'        => 'text',
    ) );

    // Hero Subtitle
    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => 'Connect with authentic Vedic astrologers from Rishikesh for personalized birth chart readings',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'hero_subtitle', array(
        'label'       => __( 'Hero Subtitle', 'rishikesh-vedic' ),
        'description' => __( 'Subtitle text below the main heading', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_hero',
        'type'        => 'textarea',
    ) );

    // Hero Button Text
    $wp_customize->add_setting( 'hero_button_text', array(
        'default'           => 'Book Your Reading',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'hero_button_text', array(
        'label'   => __( 'Hero Button Text', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_hero',
        'type'    => 'text',
    ) );

    // Hero Button URL
    $wp_customize->add_setting( 'hero_button_url', array(
        'default'           => '/booking',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'hero_button_url', array(
        'label'   => __( 'Hero Button URL', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_hero',
        'type'    => 'url',
    ) );

    // ========================================================================
    // LAYOUT OPTIONS
    // ========================================================================
    $wp_customize->add_section( 'rishikesh_vedic_layout', array(
        'title'    => __( 'Layout Options', 'rishikesh-vedic' ),
        'priority' => 45,
    ) );

    // Container Width
    $wp_customize->add_setting( 'container_width', array(
        'default'           => '1200',
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'container_width', array(
        'label'       => __( 'Container Width (px)', 'rishikesh-vedic' ),
        'description' => __( 'Maximum width of content container', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_layout',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 960,
            'max'  => 1920,
            'step' => 10,
        ),
    ) );

    // Sidebar Position
    $wp_customize->add_setting( 'sidebar_position', array(
        'default'           => 'right',
        'sanitize_callback' => 'rishikesh_vedic_sanitize_select',
    ) );
    $wp_customize->add_control( 'sidebar_position', array(
        'label'   => __( 'Sidebar Position', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_layout',
        'type'    => 'select',
        'choices' => array(
            'left'  => __( 'Left', 'rishikesh-vedic' ),
            'right' => __( 'Right', 'rishikesh-vedic' ),
            'none'  => __( 'No Sidebar', 'rishikesh-vedic' ),
        ),
    ) );

    // ========================================================================
    // SOCIAL MEDIA
    // ========================================================================
    $wp_customize->add_section( 'rishikesh_vedic_social', array(
        'title'    => __( 'Social Media Links', 'rishikesh-vedic' ),
        'priority' => 50,
    ) );

    // Facebook
    $wp_customize->add_setting( 'social_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'social_facebook', array(
        'label'   => __( 'Facebook URL', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_social',
        'type'    => 'url',
    ) );

    // Instagram
    $wp_customize->add_setting( 'social_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'social_instagram', array(
        'label'   => __( 'Instagram URL', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_social',
        'type'    => 'url',
    ) );

    // YouTube
    $wp_customize->add_setting( 'social_youtube', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'social_youtube', array(
        'label'   => __( 'YouTube URL', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_social',
        'type'    => 'url',
    ) );

    // WhatsApp
    $wp_customize->add_setting( 'social_whatsapp', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'social_whatsapp', array(
        'label'       => __( 'WhatsApp Number', 'rishikesh-vedic' ),
        'description' => __( 'Enter with country code (e.g., +919876543210)', 'rishikesh-vedic' ),
        'section'     => 'rishikesh_vedic_social',
        'type'        => 'text',
    ) );

    // ========================================================================
    // CONTACT INFORMATION
    // ========================================================================
    $wp_customize->add_section( 'rishikesh_vedic_contact', array(
        'title'    => __( 'Contact Information', 'rishikesh-vedic' ),
        'priority' => 55,
    ) );

    // Email
    $wp_customize->add_setting( 'contact_email', array(
        'default'           => 'support@rishikeshvedic.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'contact_email', array(
        'label'   => __( 'Contact Email', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_contact',
        'type'    => 'email',
    ) );

    // Phone
    $wp_customize->add_setting( 'contact_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_phone', array(
        'label'   => __( 'Contact Phone', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_contact',
        'type'    => 'text',
    ) );

    // Address
    $wp_customize->add_setting( 'contact_address', array(
        'default'           => 'Rishikesh, Uttarakhand, India',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'contact_address', array(
        'label'   => __( 'Address', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_contact',
        'type'    => 'textarea',
    ) );

    // ========================================================================
    // FOOTER OPTIONS
    // ========================================================================
    $wp_customize->add_section( 'rishikesh_vedic_footer', array(
        'title'    => __( 'Footer Options', 'rishikesh-vedic' ),
        'priority' => 60,
    ) );

    // Copyright Text
    $wp_customize->add_setting( 'footer_copyright', array(
        'default'           => '© 2024 Rishikesh Vedic. All rights reserved.',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_copyright', array(
        'label'   => __( 'Copyright Text', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_footer',
        'type'    => 'textarea',
    ) );

    // Show Footer Widgets
    $wp_customize->add_setting( 'show_footer_widgets', array(
        'default'           => true,
        'sanitize_callback' => 'rishikesh_vedic_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'show_footer_widgets', array(
        'label'   => __( 'Show Footer Widgets', 'rishikesh-vedic' ),
        'section' => 'rishikesh_vedic_footer',
        'type'    => 'checkbox',
    ) );
}
add_action( 'customize_register', 'rishikesh_vedic_customize_register' );

/**
 * Sanitization Functions
 */
function rishikesh_vedic_sanitize_select( $input, $setting ) {
    $input   = sanitize_key( $input );
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function rishikesh_vedic_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

function rishikesh_vedic_sanitize_float( $input ) {
    return floatval( $input );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously
 */
function rishikesh_vedic_customize_preview_js() {
    wp_enqueue_script( 
        'rishikesh-vedic-customizer', 
        get_template_directory_uri() . '/js/customizer.js', 
        array( 'customize-preview' ), 
        wp_get_theme()->get( 'Version' ), 
        true 
    );
}
add_action( 'customize_preview_init', 'rishikesh_vedic_customize_preview_js' );
?>