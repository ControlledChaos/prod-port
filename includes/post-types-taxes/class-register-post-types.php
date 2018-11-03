<?php
/**
 * Register post types.
 *
 * @package    Production_Portfolios
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@productionportfolios.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace CC_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: Sample custom post (Custom Posts).
         *
         * Renaming:
         * Search case "Custom Post" and replace with your post type capitalized name.
         * Search case "custom post" and replace with your post type lowercase name.
         * Search case "ppp_post_type" and replace with your post type database name.
         * Search case "custom-posts" and replace with your post type archive permalink slug.
         */

        $labels = [
            'name'                  => __( 'Custom Posts', 'prod-port' ),
            'singular_name'         => __( 'Custom Post', 'prod-port' ),
            'menu_name'             => __( 'Custom Posts', 'prod-port' ),
            'all_items'             => __( 'All Custom Posts', 'prod-port' ),
            'add_new'               => __( 'Add New', 'prod-port' ),
            'add_new_item'          => __( 'Add New Custom Post', 'prod-port' ),
            'edit_item'             => __( 'Edit Custom Post', 'prod-port' ),
            'new_item'              => __( 'New Custom Post', 'prod-port' ),
            'view_item'             => __( 'View Custom Post', 'prod-port' ),
            'view_items'            => __( 'View Custom Posts', 'prod-port' ),
            'search_items'          => __( 'Search Custom Posts', 'prod-port' ),
            'not_found'             => __( 'No Custom Posts Found', 'prod-port' ),
            'not_found_in_trash'    => __( 'No Custom Posts Found in Trash', 'prod-port' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'prod-port' ),
            'featured_image'        => __( 'Featured image for this custom post', 'prod-port' ),
            'set_featured_image'    => __( 'Set featured image for this custom post', 'prod-port' ),
            'remove_featured_image' => __( 'Remove featured image for this custom post', 'prod-port' ),
            'use_featured_image'    => __( 'Use as featured image for this custom post', 'prod-port' ),
            'archives'              => __( 'Custom Post archives', 'prod-port' ),
            'insert_into_item'      => __( 'Insert into Custom Post', 'prod-port' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Custom Post', 'prod-port' ),
            'filter_items_list'     => __( 'Filter Custom Posts', 'prod-port' ),
            'items_list_navigation' => __( 'Custom Posts list navigation', 'prod-port' ),
            'items_list'            => __( 'Custom Posts List', 'prod-port' ),
            'attributes'            => __( 'Custom Post Attributes', 'prod-port' ),
            'parent_item_colon'     => __( 'Parent Custom Post', 'prod-port' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'ppp_custom_posts_labels', $labels );

        $args = [
            'label'               => __( 'Custom Posts', 'prod-port' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'prod-port' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'ppp_post_type_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'custom-posts',
                'with_front' => true
            ],
            'query_var'           => 'ppp_post_type',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-post',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'author',
                'page-attributes',
                'post-formats'
            ],
            'taxonomies'          => [
                'category',
                'post_tag',
                'ppp_taxonomy' // Change to your custom taxonomy name.
            ],
        ];

        // Apply a filter to arguments for customization.
        $args = apply_filters( 'ppp_custom_posts_args', $args );

        register_post_type(
            'ppp_post_type',
            $args
        );

    }

}

// Run the class.
new Post_Types_Register;