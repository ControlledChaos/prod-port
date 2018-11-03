<?php
/**
 * Register taxonomies.
 *
 * @package    Production_Portfolios
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@productionportfolios.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace CC_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register taxonomies.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxonomies_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Sample taxonomy (Taxonomy).
         *
         * Renaming:
         * Search case "Taxonomy" and replace with your post type singular name.
         * Search case "Taxonomies" and replace with your post type plural name.
         * Search case "ppp_taxonomy" and replace with your taxonomy database name.
         * Search case "taxonomies" and replace with your taxonomy permalink slug.
         */

        $labels = [
            'name'                       => __( 'Taxonomies', 'prod-port' ),
            'singular_name'              => __( 'Taxonomy', 'prod-port' ),
            'menu_name'                  => __( 'Taxonomy', 'prod-port' ),
            'all_items'                  => __( 'All Taxonomies', 'prod-port' ),
            'edit_item'                  => __( 'Edit Taxonomy', 'prod-port' ),
            'view_item'                  => __( 'View Taxonomy', 'prod-port' ),
            'update_item'                => __( 'Update Taxonomy', 'prod-port' ),
            'add_new_item'               => __( 'Add New Taxonomy', 'prod-port' ),
            'new_item_name'              => __( 'New Taxonomy', 'prod-port' ),
            'parent_item'                => __( 'Parent Taxonomy', 'prod-port' ),
            'parent_item_colon'          => __( 'Parent Taxonomy', 'prod-port' ),
            'popular_items'              => __( 'Popular Taxonomies', 'prod-port' ),
            'separate_items_with_commas' => __( 'Separate Taxonomies with commas', 'prod-port' ),
            'add_or_remove_items'        => __( 'Add or Remove Taxonomies', 'prod-port' ),
            'choose_from_most_used'      => __( 'Choose from the most used Taxonomies', 'prod-port' ),
            'not_found'                  => __( 'No Taxonomies Found', 'prod-port' ),
            'no_terms'                   => __( 'No Taxonomies', 'prod-port' ),
            'items_list_navigation'      => __( 'Taxonomies List Navigation', 'prod-port' ),
            'items_list'                 => __( 'Taxonomies List', 'prod-port' )
        ];

        $args = [
            'label'              => __( 'Taxonomies', 'prod-port' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Taxonomies',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        register_taxonomy(
            'ppp_taxonomy',
            [
                'ppp_post_type'
            ],
            $args
        );

    }

}

// Run the class.
new Taxonomies_Register;