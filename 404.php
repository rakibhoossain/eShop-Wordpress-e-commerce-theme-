<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package eshop
 */

get_header(); ?>
<main>
	<section class="container">
		<?php get_template_part( 'template-parts/content', 'none' );?>
	</section>
</main>


					<?php

						// /* translators: %1$s: smiley */
						// $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'eshop' ), convert_smilies( ':)' ) ) . '</p>';
						// the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						// the_widget( 'WP_Widget_Tag_Cloud' );
					?>

<?php
get_footer();
