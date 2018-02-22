<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eshop
 */

get_header(); ?>

	<main>
		<div class="container">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'single' );

				the_post_navigation(array( 
					'prev_text' => '%title',
					'next_text' => '%title',
				));
                        // If comments are open or we have at least one comment, load up the comment template.

				if ( comments_open() || get_comments_number() ) : comments_template(); endif;
			endwhile;
		else:
			get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

	</div>
</main>

<?php
get_footer();
