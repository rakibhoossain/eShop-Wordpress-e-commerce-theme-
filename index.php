<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eshop
 */

get_header(); ?>



        <?php if(have_posts()): ?>
    	<?php eshop_breadcrumbs(); ?>
                <?php if ( is_home() && ! is_front_page() ) : ?>
                <h1 class="main-ttl main-ttl-categs"><span><?php single_post_title(); ?></span></h1>
        <?php endif; ?>

            <!-- Blog Categories -->
            <ul class="blog-categs">
	            <li class="active"><a href="blog.html">All</a></li>
	            <li><a href="blog.html">News</a></li>
	            <li><a href="blog.html">Reviews</a></li>
	            <li><a href="blog.html">Articles</a></li>
	        </ul>
            <div class="posts-list blog-page">
            <?php while ( have_posts() ) : the_post();?>
                <div class="cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 posts2-i">
                    <?php  get_template_part( 'template-parts/content', get_post_format()); ?>
                </div>     
                    <?php endwhile;?>
                    <!-- Post loop ends -->
            </div>
			<!-- Pagination - start -->
			<?php   
            the_posts_pagination( array(
                'mid_size' => 3,
                'prev_text' => '<i class="fa fa-angle-double-left"></i> ',
                'next_text' => ' <i class="fa fa-angle-double-right"></i>',
            ) );
            ?>
            <!-- Pagination - end -->

            <?php 
            else:
               get_template_part( 'template-parts/content', 'none' );            
            endif;
            ?>
        
<?php
get_footer();
