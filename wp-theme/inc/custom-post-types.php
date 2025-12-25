<?php
/**
 * Custom Post Types
 * 
 * Register custom post types for Astrologers, Testimonials, Services
 * 
 * @package Rishikesh_Vedic
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Astrologer Post Type
 */
function rishikesh_vedic_register_astrologer_post_type() {
    $labels = array(
        'name'                  => _x( 'Astrologers', 'Post Type General Name', 'rishikesh-vedic' ),
        'singular_name'         => _x( 'Astrologer', 'Post Type Singular Name', 'rishikesh-vedic' ),
        'menu_name'             => __( 'Astrologers', 'rishikesh-vedic' ),
        'name_admin_bar'        => __( 'Astrologer', 'rishikesh-vedic' ),
        'archives'              => __( 'Astrologer Archives', 'rishikesh-vedic' ),
        'attributes'            => __( 'Astrologer Attributes', 'rishikesh-vedic' ),
        'parent_item_colon'     => __( 'Parent Astrologer:', 'rishikesh-vedic' ),
        'all_items'             => __( 'All Astrologers', 'rishikesh-vedic' ),
        'add_new_item'          => __( 'Add New Astrologer', 'rishikesh-vedic' ),
        'add_new'               => __( 'Add New', 'rishikesh-vedic' ),
        'new_item'              => __( 'New Astrologer', 'rishikesh-vedic' ),
        'edit_item'             => __( 'Edit Astrologer', 'rishikesh-vedic' ),
        'update_item'           => __( 'Update Astrologer', 'rishikesh-vedic' ),
        'view_item'             => __( 'View Astrologer', 'rishikesh-vedic' ),
        'view_items'            => __( 'View Astrologers', 'rishikesh-vedic' ),
        'search_items'          => __( 'Search Astrologer', 'rishikesh-vedic' ),
        'not_found'             => __( 'Not found', 'rishikesh-vedic' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'rishikesh-vedic' ),
        'featured_image'        => __( 'Astrologer Photo', 'rishikesh-vedic' ),
        'set_featured_image'    => __( 'Set astrologer photo', 'rishikesh-vedic' ),
        'remove_featured_image' => __( 'Remove astrologer photo', 'rishikesh-vedic' ),
        'use_featured_image'    => __( 'Use as astrologer photo', 'rishikesh-vedic' ),
        'insert_into_item'      => __( 'Insert into astrologer', 'rishikesh-vedic' ),
        'uploaded_to_this_item' => __( 'Uploaded to this astrologer', 'rishikesh-vedic' ),
        'items_list'            => __( 'Astrologers list', 'rishikesh-vedic' ),
        'items_list_navigation' => __( 'Astrologers list navigation', 'rishikesh-vedic' ),
        'filter_items_list'     => __( 'Filter astrologers list', 'rishikesh-vedic' ),
    );

    $args = array(
        'label'                 => __( 'Astrologer', 'rishikesh-vedic' ),
        'description'           => __( 'Vedic Astrologers', 'rishikesh-vedic' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ),
        'taxonomies'            => array( 'astrologer_specialization' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array( 'slug' => 'astrologers' ),
    );

    register_post_type( 'astrologer', $args );
}
add_action( 'init', 'rishikesh_vedic_register_astrologer_post_type', 0 );

/**
 * Register Astrologer Specialization Taxonomy
 */
function rishikesh_vedic_register_astrologer_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Specializations', 'Taxonomy General Name', 'rishikesh-vedic' ),
        'singular_name'              => _x( 'Specialization', 'Taxonomy Singular Name', 'rishikesh-vedic' ),
        'menu_name'                  => __( 'Specializations', 'rishikesh-vedic' ),
        'all_items'                  => __( 'All Specializations', 'rishikesh-vedic' ),
        'parent_item'                => __( 'Parent Specialization', 'rishikesh-vedic' ),
        'parent_item_colon'          => __( 'Parent Specialization:', 'rishikesh-vedic' ),
        'new_item_name'              => __( 'New Specialization Name', 'rishikesh-vedic' ),
        'add_new_item'               => __( 'Add New Specialization', 'rishikesh-vedic' ),
        'edit_item'                  => __( 'Edit Specialization', 'rishikesh-vedic' ),
        'update_item'                => __( 'Update Specialization', 'rishikesh-vedic' ),
        'view_item'                  => __( 'View Specialization', 'rishikesh-vedic' ),
        'separate_items_with_commas' => __( 'Separate specializations with commas', 'rishikesh-vedic' ),
        'add_or_remove_items'        => __( 'Add or remove specializations', 'rishikesh-vedic' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'rishikesh-vedic' ),
        'popular_items'              => __( 'Popular Specializations', 'rishikesh-vedic' ),
        'search_items'               => __( 'Search Specializations', 'rishikesh-vedic' ),
        'not_found'                  => __( 'Not Found', 'rishikesh-vedic' ),
        'no_terms'                   => __( 'No specializations', 'rishikesh-vedic' ),
        'items_list'                 => __( 'Specializations list', 'rishikesh-vedic' ),
        'items_list_navigation'      => __( 'Specializations list navigation', 'rishikesh-vedic' ),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'rewrite'                    => array( 'slug' => 'specialization' ),
    );

    register_taxonomy( 'astrologer_specialization', array( 'astrologer' ), $args );
}
add_action( 'init', 'rishikesh_vedic_register_astrologer_taxonomy', 0 );

/**
 * Register Testimonial Post Type
 */
function rishikesh_vedic_register_testimonial_post_type() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post Type General Name', 'rishikesh-vedic' ),
        'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'rishikesh-vedic' ),
        'menu_name'             => __( 'Testimonials', 'rishikesh-vedic' ),
        'name_admin_bar'        => __( 'Testimonial', 'rishikesh-vedic' ),
        'all_items'             => __( 'All Testimonials', 'rishikesh-vedic' ),
        'add_new_item'          => __( 'Add New Testimonial', 'rishikesh-vedic' ),
        'add_new'               => __( 'Add New', 'rishikesh-vedic' ),
        'new_item'              => __( 'New Testimonial', 'rishikesh-vedic' ),
        'edit_item'             => __( 'Edit Testimonial', 'rishikesh-vedic' ),
        'update_item'           => __( 'Update Testimonial', 'rishikesh-vedic' ),
        'view_item'             => __( 'View Testimonial', 'rishikesh-vedic' ),
        'search_items'          => __( 'Search Testimonial', 'rishikesh-vedic' ),
        'not_found'             => __( 'Not found', 'rishikesh-vedic' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'rishikesh-vedic' ),
    );

    $args = array(
        'label'                 => __( 'Testimonial', 'rishikesh-vedic' ),
        'description'           => __( 'Client Testimonials', 'rishikesh-vedic' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-quote',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'rishikesh_vedic_register_testimonial_post_type', 0 );

/**
 * Add custom meta boxes for Astrologers
 */
function rishikesh_vedic_add_astrologer_meta_boxes() {
    add_meta_box(
        'astrologer_details',
        __( 'Astrologer Details', 'rishikesh-vedic' ),
        'rishikesh_vedic_astrologer_details_callback',
        'astrologer',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'rishikesh_vedic_add_astrologer_meta_boxes' );

/**
 * Astrologer Details Meta Box Callback
 */
function rishikesh_vedic_astrologer_details_callback( $post ) {
    wp_nonce_field( 'rishikesh_vedic_astrologer_details', 'rishikesh_vedic_astrologer_nonce' );

    $experience = get_post_meta( $post->ID, '_astrologer_experience', true );
    $location = get_post_meta( $post->ID, '_astrologer_location', true );
    $rating = get_post_meta( $post->ID, '_astrologer_rating', true );
    $sessions = get_post_meta( $post->ID, '_astrologer_sessions', true );
    $languages = get_post_meta( $post->ID, '_astrologer_languages', true );
    $training = get_post_meta( $post->ID, '_astrologer_training', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="astrologer_experience"><?php _e( 'Years of Experience', 'rishikesh-vedic' ); ?></label></th>
            <td><input type="number" id="astrologer_experience" name="astrologer_experience" value="<?php echo esc_attr( $experience ); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="astrologer_location"><?php _e( 'Location', 'rishikesh-vedic' ); ?></label></th>
            <td><input type="text" id="astrologer_location" name="astrologer_location" value="<?php echo esc_attr( $location ); ?>" class="regular-text" placeholder="Rishikesh, Uttarakhand" /></td>
        </tr>
        <tr>
            <th><label for="astrologer_rating"><?php _e( 'Rating (out of 5)', 'rishikesh-vedic' ); ?></label></th>
            <td><input type="number" id="astrologer_rating" name="astrologer_rating" value="<?php echo esc_attr( $rating ); ?>" step="0.1" min="0" max="5" class="small-text" /></td>
        </tr>
        <tr>
            <th><label for="astrologer_sessions"><?php _e( 'Total Sessions Completed', 'rishikesh-vedic' ); ?></label></th>
            <td><input type="number" id="astrologer_sessions" name="astrologer_sessions" value="<?php echo esc_attr( $sessions ); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="astrologer_languages"><?php _e( 'Languages', 'rishikesh-vedic' ); ?></label></th>
            <td><input type="text" id="astrologer_languages" name="astrologer_languages" value="<?php echo esc_attr( $languages ); ?>" class="regular-text" placeholder="Hindi, Sanskrit" /></td>
        </tr>
        <tr>
            <th><label for="astrologer_training"><?php _e( 'Training & Credentials', 'rishikesh-vedic' ); ?></label></th>
            <td><textarea id="astrologer_training" name="astrologer_training" rows="4" class="large-text"><?php echo esc_textarea( $training ); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Save Astrologer Meta Data
 */
function rishikesh_vedic_save_astrologer_meta( $post_id ) {
    if ( ! isset( $_POST['rishikesh_vedic_astrologer_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['rishikesh_vedic_astrologer_nonce'], 'rishikesh_vedic_astrologer_details' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = array(
        'astrologer_experience',
        'astrologer_location',
        'astrologer_rating',
        'astrologer_sessions',
        'astrologer_languages',
        'astrologer_training',
    );

    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, '_' . $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post_astrologer', 'rishikesh_vedic_save_astrologer_meta' );

/**
 * Add custom columns to Astrologer admin list
 */
function rishikesh_vedic_astrologer_columns( $columns ) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['thumbnail'] = __( 'Photo', 'rishikesh-vedic' );
    $new_columns['title'] = $columns['title'];
    $new_columns['specialization'] = __( 'Specialization', 'rishikesh-vedic' );
    $new_columns['experience'] = __( 'Experience', 'rishikesh-vedic' );
    $new_columns['rating'] = __( 'Rating', 'rishikesh-vedic' );
    $new_columns['date'] = $columns['date'];
    return $new_columns;
}
add_filter( 'manage_astrologer_posts_columns', 'rishikesh_vedic_astrologer_columns' );

/**
 * Display custom column content
 */
function rishikesh_vedic_astrologer_column_content( $column, $post_id ) {
    switch ( $column ) {
        case 'thumbnail':
            echo get_the_post_thumbnail( $post_id, array( 60, 60 ) );
            break;
        case 'specialization':
            $terms = get_the_terms( $post_id, 'astrologer_specialization' );
            if ( $terms && ! is_wp_error( $terms ) ) {
                $specializations = array();
                foreach ( $terms as $term ) {
                    $specializations[] = $term->name;
                }
                echo implode( ', ', $specializations );
            }
            break;
        case 'experience':
            $experience = get_post_meta( $post_id, '_astrologer_experience', true );
            echo $experience ? $experience . '+ years' : '—';
            break;
        case 'rating':
            $rating = get_post_meta( $post_id, '_astrologer_rating', true );
            echo $rating ? $rating . '/5 ⭐' : '—';
            break;
    }
}
add_action( 'manage_astrologer_posts_custom_column', 'rishikesh_vedic_astrologer_column_content', 10, 2 );

/**
 * Make custom columns sortable
 */
function rishikesh_vedic_astrologer_sortable_columns( $columns ) {
    $columns['experience'] = 'experience';
    $columns['rating'] = 'rating';
    return $columns;
}
add_filter( 'manage_edit-astrologer_sortable_columns', 'rishikesh_vedic_astrologer_sortable_columns' );
?>