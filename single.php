<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eshop
 */
get_header(); ?>

<!-- Main Content - start -->

    <?php if ( have_posts() ) : ?>
    	<?php eshop_breadcrumbs(); ?>
		<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', 'single' ); 
			get_sidebar();?>
			<div class="clearfix"></div>
			<!-- Related Posts -->
			<?php do_action( 'eshop_single_after_article' );
				the_post_navigation(array( 
					'prev_text' => '%title',
					'next_text' => '%title',
				));
                // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) : comments_template(); endif;

		  endwhile;
		else:
			get_template_part( 'template-parts/content', 'none' );?>
	<?php endif; ?>

<?php
get_footer();