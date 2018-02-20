<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eshop
 */

?>
<!--blog post-->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ); ?>
	<a class="posts-i-img" href="<?php echo get_permalink( $post->ID ); ?>"><span style="background: url(<?php echo esc_url($image[0]); ?>)"></span></a>
    <time class="posts-i-date" datetime="<?php the_time('F j, Y'); ?>">
    	<!-- <span>09</span> Jan --><?php the_time('F j, Y'); ?>
    </time>
    <h3 class="posts-i-ttl"><a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a></h3>
     <?php the_excerpt(); ?>
     <a href="<?php echo get_permalink( $post->ID ); ?>" class="posts-i-more"><?php echo __('Read more','eshop'); ?>...</a>

    <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eshop' ),
            'after'  => '</div>',
        ) );
    ?>
</article>