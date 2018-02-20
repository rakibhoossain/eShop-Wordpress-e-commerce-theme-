<?php
/**
 * Template for displaying search forms
 *
 */
?>
<form role="search" method="get" class="err404-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'eshop' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button type="submit"><i class="fa fa-search"></i></button>
</form>