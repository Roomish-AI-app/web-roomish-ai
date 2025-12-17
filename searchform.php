<?php
/**
 * Template for displaying search forms
 *
 * @package Roomish
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'roomish' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'roomish' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit">
		<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'roomish' ); ?></span>
		<span aria-hidden="true"><?php echo _x( 'Search', 'submit button', 'roomish' ); ?></span>
	</button>
</form>
