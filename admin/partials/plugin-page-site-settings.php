<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    Production_Portfolios
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@productionportfolios.com>
 */

namespace CC_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Website settings', 'prod-port' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'prod-port' ),
	esc_url( admin_url( '?page=' . PPP_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'prod-port' ),
	__( 'for customizing the user interface of WordPress, as well as other useful features.', 'prod-port' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'prod-port' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress news, quick press', 'prod-port' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'prod-port' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'prod-port' ); ?></li>
	<li><?php _e( 'Remove WordPress logo from admin bar', 'prod-port' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'prod-port' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'prod-port' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'prod-port' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'prod-port' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'prod-port' ); ?></li>
</ul>