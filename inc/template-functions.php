<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package eshop
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function eshop_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'eshop_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function eshop_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'eshop_pingback_header' );

if ( ! function_exists( 'eshop_get_number_of_comments' ) ) {
	/**
	 * Simple function used to return the number of comments a post has.
	 */
	function eshop_get_number_of_comments( $post_id ) {

		$num_comments = get_comments_number( $post_id ); // get_comments_number returns only a numeric value

		if ( comments_open() ) {
			if ( 0 == $num_comments ) {
				$comments = __( 'No Comments', 'eshop' );
			} elseif ( $num_comments > 1 ) {
				$comments = $num_comments . __( ' Comments', 'eshop' );
			} else {
				$comments = __( '1 Comment', 'pixova-lite' );
			}
			$write_comments = '<a href="' . get_comments_link() . '">' . $comments . '</a>';
		} else {
			$write_comments = __( 'Comments are off for this post.', 'eshop' );
		}

		return $write_comments;

	}
}

// if ( ! function_exists( 'eshop_breadcrumbs' ) ) {
// 	/**
// 	 * Render the breadcrumbs with help of class-breadcrumbs.php
// 	 *
// 	 * @return void
// 	 */
// 	function eshop_breadcrumbs() {
// 		$breadcrumbs = new Eshop_Breadcrumbs();
// 		$breadcrumbs->get_breadcrumbs();
// 	}
// }

/**
 *  Breadcrumb
 *
 *
 */
if ( ! function_exists( 'eshop_breadcrumbs' ) ) :

    /**
     * Simple breadcrumb.
     *
     * @since 1.0.0
     *
     * @link: https://gist.github.com/melissacabral/4032941
     *
     * @param  array $args Arguments
     */
    function eshop_breadcrumbs( $args = array() ) {
        // Bail if Home Page.
        // if ( is_front_page() || is_home() ) {
        if ( is_front_page() ) {
            return;
        }

        if ( ! function_exists( 'breadcrumb_trail' ) ) {
            require_once trailingslashit(get_template_directory()) . '/inc/breadcrumbs.php';
        }

        $breadcrumb_args = array(
            'container'   => 'div',
            'show_browse' => false,
        );
        breadcrumb_trail( $breadcrumb_args );
       
    }

endif;