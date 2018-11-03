<?php
/**
 * Settings fields for site development.
 *
 * @package    Production_Portfolios
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@productionportfolios.com>
 *
 * @todo       Add a "Dev Mode", functionality to be determined.
 * @todo       Finish converting the debug plugin to work with a setting.
 */

namespace CC_Plugin\Plugin_Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for site development.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Dev_Tools {

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

		// Start settings for page.
		add_action( 'admin_init', [ $this, 'dev_settings' ] );

	}

	/**
	 * Settings for the development page.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function dev_settings() {

		/**
		 * Site development.
		 */

		// Site development settings section.
		add_settings_section(
			'ppp-site-development-general',
			__( 'General Website Development', 'prod-port' ),
			[ $this, 'site_development_section_callback' ],
			'ppp-site-development-general'
		);

		// Site development settings field.
		add_settings_field(
			'ppp_site_development',
			__( 'Debug Mode', 'prod-port' ),
			[ $this, 'ppp_site_development_callback' ],
			'ppp-site-development-general',
			'ppp-site-development-general',
			[ esc_html__( 'Put the site in Debug Mode via wp-config.', 'prod-port' ) ]
		);

		// Register the Site development field.
		register_setting(
			'ppp-site-development-general',
			'ppp_site_development'
		);

		// Live theme test settings field.
		add_settings_field(
			'ppp_theme_test',
			__( 'Live Theme Test', 'prod-port' ),
			[ $this, 'ppp_theme_test_callback' ],
			'ppp-site-development-general',
			'ppp-site-development-general',
			[ esc_html__( 'Find the theme test page under Appearances.', 'prod-port' ) ]
		);

		// Register the live theme test field.
		register_setting(
			'ppp-site-development-general',
			'ppp_theme_test'
		);

		// RTL (right to left) test settings field.
		add_settings_field(
			'ppp_rtl_test',
			__( 'RTL (Right to Left) Test', 'prod-port' ),
			[ $this, 'ppp_rtl_test_callback' ],
			'ppp-site-development-general',
			'ppp-site-development-general',
			[ esc_html__( 'Add RTL button to the toolbar to test layout in languages that read right to left.', 'prod-port' ) ]
		);

		// Register the RTL test field.
		register_setting(
			'ppp-site-development-general',
			'ppp_rtl_test'
		);

	}

	/**
	 * Site development section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings section array.
	 * @return string Returns the section HTML.
	 */
	public function site_development_section_callback( $args ) {

		$html = sprintf(
			'<p>%1s</p>',
			esc_html__( '', 'prod-port' )
		);

		echo $html;

	}

	/**
	 * Site development field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function ppp_site_development_callback( $args ) {

		$option = get_option( 'ppp_site_development' );

		$html   = '<p><input type="checkbox" id="ppp_site_development" name="ppp_site_development" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= '<label for="ppp_site_development"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Live theme test field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function ppp_theme_test_callback( $args ) {

		$option = get_option( 'ppp_theme_test' );

		$html   = '<p><input type="checkbox" id="ppp_theme_test" name="ppp_theme_test" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= sprintf(
			'<label for="ppp_theme_test">%1s</label></p>',
			$args[0]
		 );

		echo $html;

	}

	/**
	 * RTL test field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function ppp_rtl_test_callback( $args ) {

		$option = get_option( 'ppp_rtl_test' );

		$html   = '<p><input type="checkbox" id="ppp_rtl_test" name="ppp_rtl_test" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= sprintf(
			'<label for="ppp_rtl_test">%1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a></p>',
			$args[0],
			esc_url( 'https://codex.wordpress.org/Right_to_Left_Language_Support' ),
			__( 'Read more in the WordPress Codex', 'prod-port' )
		 );

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
function ppp_settings_fields_dev_tools() {

	return Settings_Fields_Dev_Tools::instance();

}

// Run an instance of the class.
ppp_settings_fields_dev_tools();