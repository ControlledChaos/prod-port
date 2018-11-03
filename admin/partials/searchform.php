<?php
/**
 * Backend search form template.
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
}

$label       = apply_filters( 'ppp_search_label', esc_html__( 'Search for:', 'prod-port' ) );
$placeholder = apply_filters( 'ppp_search_placeholder', esc_attr( esc_html__( 'Search ', 'prod-port' ) . get_bloginfo( 'name' ) ) );
$submit      = apply_filters( 'ppp_search_submit', esc_html__( 'Submit', 'prod-port' ) );
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="search-label">
        <span class="screen-reader-text"><?php echo $label; ?></span>
        <input type="search" class="search" id="search" name="s" value="" placeholder="<?php echo $placeholder; ?>" />
    </label>
    <input type="submit" value="<?php echo $submit; ?>" class="search-submit" id="search-submit" />
</form>
