<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php get_header();?>
<?php $unique_id = esc_attr( unique( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-container w3-bar-item w3-button" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo $unique_id; ?>" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentyseventeen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?><button type="submit" class="search-submit"><?php echo twentyseventeen_get_svg( array( 'icon' => 'search' ) ); ?><i class="icon-search"></i><</button></span>
</form>

