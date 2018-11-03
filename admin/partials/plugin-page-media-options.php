<?php
/**
 * About page media options output.
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
<h2><?php _e( 'Media and Upload Options', 'prod-port' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'prod-port' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'prod-port' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'prod-port' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'prod-port' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'prod-port' ); ?></h3>