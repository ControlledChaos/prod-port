<?php
/**
 * Settings fields for media options.
 *
 * @package    Production_Portfolios
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@productionportfolios.com>
 */

namespace CC_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for media options.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Media {

    /**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

		}

		// Return the instance.
		return $instance;

	}

    /**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

        // Media settings.
        add_action( 'admin_init', [ $this, 'settings' ] );

        // Hard crop default image sizes.
        add_action( 'after_setup_theme', [ $this, 'crop' ] );

    }

    /**
	 * Media settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

        /**
         * Image crop settings.
         */
        add_settings_field( 'ppp_hard_crop_medium', __( 'Medium size crop', 'prod-port' ), [ $this, 'medium_crop' ], 'media', 'default', [ __( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)', 'prod-port' ) ] );

        add_settings_field( 'ppp_hard_crop_large', __( 'Large size crop', 'prod-port' ), [ $this, 'large_crop' ], 'media', 'default', [ __( 'Crop thumbnail to exact dimensions (normally thumbnails are proportional)', 'prod-port' ) ] );

        register_setting(
            'media',
            'ppp_hard_crop_medium'
        );

        register_setting(
            'media',
            'ppp_hard_crop_large'
        );

        /**
         * SVG options.
         */
        add_settings_section( 'ppp-svg-settings', __( 'SVG Images', 'prod-port' ), [ $this, 'svg_notice' ], 'media' );

        add_settings_field( 'ppp_add_svg_support', __( 'SVG Support', 'prod-port' ), [ $this, 'svg_support' ], 'media', 'ppp-svg-settings', [ __( 'Add ability to upload SVG images to the media library.', 'prod-port' ) ] );

        register_setting(
            'media',
            'ppp_add_svg_support'
        );

        /**
         * Fancybox settings.
         */
        add_settings_section( 'ppp-media-settings', __( 'Fancybox', 'prod-port' ), [ $this, 'fancybox_description' ], 'media' );

        add_settings_field( 'ppp_enqueue_fancybox_script', __( 'Enqueue Fancybox script', 'prod-port' ), [ $this, 'fancybox_script' ], 'media', 'ppp-media-settings', [ __( 'Needed for lightbox functionality.', 'prod-port' ) ] );

        if ( ! current_theme_supports( 'ccd-fancybox' ) ) {
            add_settings_field( 'ppp_enqueue_fancybox_styles', __( 'Enqueue Fancybox styles', 'prod-port' ), [ $this, 'fancybox_styles' ], 'media', 'ppp-media-settings', [ __( 'Leave unchecked to use a custom stylesheet in a theme.', 'prod-port' ) ] );
        }

        register_setting(
            'media',
            'ppp_enqueue_fancybox_script'
        );

        if ( ! current_theme_supports( 'ccd-fancybox' ) ) {
            register_setting(
                'media',
                'ppp_enqueue_fancybox_styles'
            );
        }

    }

    /**
     * Medium crop field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function medium_crop( $args ) {

        $html = '<p><input type="checkbox" id="ppp_hard_crop_medium" name="ppp_hard_crop_medium" value="1" ' . checked( 1, get_option( 'ppp_hard_crop_medium' ), false ) . '/>';

        $html .= '<label for="ppp_hard_crop_medium"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Large crop field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function large_crop( $args ) {

        $html = '<p><input type="checkbox" id="ppp_hard_crop_large" name="ppp_hard_crop_large" value="1" ' . checked( 1, get_option( 'ppp_hard_crop_large' ), false ) . '/>';

        $html .= '<label for="ppp_hard_crop_large"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Update crop options.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function crop() {

        if ( get_option( 'ppp_hard_crop_medium' ) ) {
            update_option( 'medium_crop', 1 );
        } else {
            update_option( 'medium_crop', 0 );
        }

        if ( get_option( 'ppp_hard_crop_large' ) ) {
            update_option( 'large_crop', 1 );
        } else {
            update_option( 'large_crop', 0 );
        }

    }

    /**
     * Add warning about using SVG images.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function svg_notice() {

        $html = sprintf( '<p>%1s</p>', esc_html__( 'Use SVG images with caution! Only add support if you trust or examine each SVG file that you upload.', 'prod-port' ) );

        echo $html;

    }

    /**
     * SVG options.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     *
     * @since    1.0.0
     */
    public function svg_support( $args ) {

        $html = '<p><input type="checkbox" id="ppp_add_svg_support" name="ppp_add_svg_support" value="1" ' . checked( 1, get_option( 'ppp_add_svg_support' ), false ) . '/>';

        $html .= '<label for="ppp_add_svg_support"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Fancybox settings description.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_description() {

        $url  = 'http://fancyapps.com/fancybox/3/';
        $html = sprintf( '<p>%1s <a href="%2s" target="_blank">%3s</a></p>', esc_html__( 'Documentation on the Fancybox website:', 'prod-port' ), esc_url( $url ), $url );

        echo $html;

    }

    /**
     * Fancybox script field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_script( $args ) {

        $html = '<p><input type="checkbox" id="ppp_enqueue_fancybox_script" name="ppp_enqueue_fancybox_script" value="1" ' . checked( 1, get_option( 'ppp_enqueue_fancybox_script' ), false ) . '/>';

        $html .= '<label for="ppp_enqueue_fancybox_script"> '  . $args[0] . '</label></p>';

        echo $html;

    }

    /**
     * Fancybox styles field.
     *
     * @since  1.0.0
	 * @access public
	 * @return string
     */
    public function fancybox_styles( $args ) {

        $html = '<p><input type="checkbox" id="ppp_enqueue_fancybox_styles" name="ppp_enqueue_fancybox_styles" value="1" ' . checked( 1, get_option( 'ppp_enqueue_fancybox_styles' ), false ) . '/>';

        $html .= '<label for="ppp_enqueue_fancybox_styles"> '  . $args[0] . '</label></p>';

        echo $html;

    }

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function ppp_settings_fields_media() {

	return Settings_Fields_Media::instance();

}

// Run an instance of the class.
ppp_settings_fields_media();