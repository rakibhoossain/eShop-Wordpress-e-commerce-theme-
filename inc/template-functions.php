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

if ( ! function_exists( 'eshop_breadcrumbs' ) ) {
	/**
	 * Render the breadcrumbs with help of class-breadcrumbs.php
	 *
	 * @return void
	 */
	function eshop_breadcrumbs() {
		$breadcrumbs = new Eshop_Breadcrumbs();
		$breadcrumbs->get_breadcrumbs();
	}
}


function eshop_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? 'reviews-i existimg' : 'reviews-i existimg parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="reviews-i-img"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
			if( $commentrating = get_comment_meta( $comment->comment_ID, 'rating', true ) ) {

			$text .= '<div class="reviews-i-rating">';
			for( $i=1; $i <= $commentrating; $i++ )
				$text .='<i class="fa fa-star"></i>';
			$text .= '</div>';

				echo $text;		
			}
		?>
        <time datetime="<?php printf(  __('%1$s'), get_comment_date() ); ?>" class="reviews-i-date">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                <?php printf(  __('%1$s'), get_comment_date() ); ?>
            </a><?php 
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </time>

        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>


        <div class="reviews-i-cont">
        	<?php comment_text(); ?>
        	<span class="reviews-i-margin"></span>
       <h3 class="reviews-i-ttl"><?php printf( __( '%s' ), get_comment_author_link() ); ?></h3>

        </div>

        <div class="reply"><?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}