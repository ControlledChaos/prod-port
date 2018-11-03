<?php
/**
 * Content for the Convert Plugin help tab.
 *
 * @package    Production_Portfolios
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@productionportfolios.com>
 */

namespace CC_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Converting the plugin for your website', 'prod-port' ); ?></h3>
<h4><?php _e( 'Directories and file names', 'prod-port' ); ?></h4>
<p><?php _e( 'The names for directories and files are descriptive enough to describe what they do yet generic enough that they likely will not need to be changed. However, you may want to remove some files, such as that in which this code is written.', 'prod-port' ); ?></p>
<h4><?php _e( 'Renaming the code', 'prod-port' ); ?></h4>
<p><?php _e( 'To rename this plugin to convert it specifically for a single website, first rename this file and rename the plugin folder with the same name as this file. Then use a find &amp; replace function to look for the following...', 'prod-port' ); ?></p>
<ol>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Text Domain', 'prod-port' ), esc_html__( 'The text domain should be the same as this file and the plugin folder. Replace "prod-port".', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Classes', 'prod-port' ), esc_html__( 'Classes are prefixed with the plugin name. Replace "Controlled_Chaos".', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Class Variables', 'prod-port' ), esc_html__( 'Class variables are prefixed with the plugin name. Replace "controlled_chaos".', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Functions', 'prod-port' ), esc_html__( 'There are a few functions prefixed with the plugin name. The above replace of "controlled_chaos" will have given them your new name.', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Filters', 'prod-port' ), esc_html__( 'Filters are prexixed with an abbreviation for the plugin name. Replace "ppp".', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Pages', 'prod-port' ), esc_html__( 'Admin page URLs are prexixed with an abbreviation for the plugin name. The above replace of "ppp" will have given them your new prefix.', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Options', 'prod-port' ), esc_html__( 'Options are prexixed with an abbreviation for the plugin name. The above replace of "ppp" will have given them your new prefix.', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Version', 'prod-port' ), esc_html__( 'The plugin version is all caps and is prexixed with an abbreviation for the plugin name. Replace "PPP".', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Author', 'prod-port' ), esc_html__( 'The author name and email is used in class docblocks. Replace "Greg Sweet" and replace "greg@ccdzine.com".', 'prod-port' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Plugin Name', 'prod-port' ), esc_html__( 'The plugin name is used in various places. Replace "Controlled Chaos".', 'prod-port' ) ); ?>
</ol>