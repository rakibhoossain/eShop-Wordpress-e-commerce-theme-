<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eshop
 */

?>
    <div class="err404">
        <h1 class="err404-ttl">404ny</h1>
        <p class="err404-subttl">
           <?php echo __('Error. Page not found.','eshop'); ?>
        </p>
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'eshop' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'eshop' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'eshop' ); ?></p>
			<?php get_search_form(); ?>


		<?php endif; ?>

						<div class="err404-menus">
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					<?php wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) ); ?>
					<?php the_widget( 'WP_Widget_Archives' ); ?>
				</div>

        </div>