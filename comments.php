<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eshop
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<?php the_comments_navigation(); ?>

		<ul class="reviews-list">
		<?php //wp_list_comments( 'type=comment&callback=eshop_comment' ); ?>
		<?php
		 wp_list_comments( 
			array( 
				// 'type' => 'comment',
				'callback' => 'eshop_comment',
				'avatar_size'       => 120, 
			)); 
		?>
		</ul>

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'eshop' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().


$comment_args = array( 'title_reply'=>'Add your comment',

'fields' => apply_filters( 'comment_form_default_fields', array(

	'author' => '<input id="author" name="author" placeholder="Name" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />',   

    'email'  => '<input id="email" name="email" placeholder="E-mail" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',

    'url'    => '' ) ),
'submit_button' => '<div class="prod-comment-submit">
            <input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />'.rating_fields().'
        </div>',

    'comment_field' => '<textarea id="comment" placeholder="Your comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>',

    'label_submit' => __('Submit','eshop'),

    'comment_notes_before' => '',
    'comment_notes_after' => '',

);

comment_form($comment_args);

	?>

</div><!-- #comments -->
