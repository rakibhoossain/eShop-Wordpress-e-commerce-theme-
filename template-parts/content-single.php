<?php
/**
 * Template part for displaying Single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eshop
 */

?>
<!--Single post-->
<!-- Main Content - start -->
<main>
    <section class="container">

        <?php eshop_breadcrumbs(); ?>
        <h1 class="main-ttl"><span><?php the_title(); ?></span></h1>
        
        <!-- Blog Post - start -->
        <div class="post-wrap stylization">
            <?php the_post_thumbnail('post-single'); ?>
            <?php the_content(); ?>

            <!-- Slider -->
<!--             <div class="flexslider post-slider" id="post-slider-car">
                <ul class="slides">
                    <li>
                        <a data-fancybox-group="fancy-img" class="fancy-img" href="<?php echo get_template_directory_uri();?>/images/post/slide1.jpg"><img src="<?php echo get_template_directory_uri();?>/images/post/slide1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a data-fancybox-group="fancy-img" class="fancy-img" href="img/post/slide2.jpg"><img src="<?php echo get_template_directory_uri();?>/images/post/slide2.jpg" alt=""></a>
                    </li>
                    <li>
                        <a data-fancybox-group="fancy-img" class="fancy-img" href="img/post/slide3.jpg"><img src="<?php echo get_template_directory_uri();?>/images/post/slide3.jpg" alt=""></a>
                    </li>
                </ul>
            </div> -->


            <!-- Share Links -->
            <div class="post-share-wrap">
                <ul class="post-share">
                    <li>
                        <a onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p[url]=http://allstore-html.real-web.pro','sharer', 'toolbar=0,status=0,width=620,height=280');" data-toggle="tooltip" title="Share on Facebook" href="javascript:">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a onclick="popUp=window.open('http://twitter.com/home?status=Post with Shortcodes http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" data-toggle="tooltip" title="Share on Twitter" href="javascript:;">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a onclick="popUp=window.open('http://vk.com/share.php?url=http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" data-toggle="tooltip" title="Share on VK" href="javascript:;">
                            <i class="fa fa-vk"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip" title="Share on Pinterest" onclick="popUp=window.open('http://pinterest.com/pin/create/button/?url=http://allstore-html.real-web.pro&amp;description=AllStore HTML Template&amp;media=http://discover.real-web.pro/wp-content/uploads/2016/09/insect-1130497_1920.jpg','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip" title="Share on Google +1" href="javascript:;" onclick="popUp=window.open('https://plus.google.com/share?url=http://allstore-html.real-web.pro','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip" title="Share on Linkedin" onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&amp;url=http://allstore-html.real-web.pro&amp;title=AllStore HTML Template','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tooltip" title="Share on Tumblr" onclick="popUp=window.open('http://www.tumblr.com/share/link?url=http://allstore-html.real-web.pro&amp;name=AllStore HTML Template&amp;description=Aliquam%2C+consequuntur+laboriosam+minima+neque+nesciunt+quod+repudiandae+rerum+sint.+Accusantium+adipisci+aliquid+architecto+blanditiis+dolorum+excepturi+harum+ipsa%2C+ipsam%2C...','sharer','scrollbars=yes,width=800,height=400');popUp.focus();return false;" href="javascript:;">
                            <i class="fa fa-tumblr"></i>
                        </a>
                    </li>
                </ul>
                <ul class="post-info">

					<?php
						printf(

							// Translators: 1 is the post author, 2 is the category list.
							__( '<li><time datetime="%1$s">%1$s</time></li><li>%2$s</li><li>Comments: %3$s</li>', 'eshop' ),
							// Translators: Post time
							get_the_date( get_option( 'date_format' ), $post->ID ),
							// Translators: tag list
							get_the_tag_list( 'Tags: ',', ','' ),
							// Translators: Number of com,ments
							eshop_get_number_of_comments( $post->ID )						
							
						);
						?>
                </ul>
            </div>
			<div class="clearfix"></div>
			<!-- Related Posts -->
			<?php do_action( 'eshop_single_after_article' ); ?>

        </div>
        <!-- Blog Post - end -->

        <!-- Related Products - start -->
        <div class="prod-related">
            <h2><span>Related products</span></h2>
            <div class="prod-related-car" id="prod-related-car">
                <ul class="slides">
                    <li class="prod-rel-wrap">
                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/300x311" alt="Adipisci aperiam commodi">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Adipisci aperiam commodi</a></h3>
                                <p class="prod-rel-price">
                                    <b>$59</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/300x366" alt="Nulla numquam obcaecati">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Nulla numquam obcaecati</a></h3>
                                <p class="prod-rel-price">
                                    <b>$48</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/370x300" alt="Dignissimos eaque earum">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Dignissimos eaque earum</a></h3>
                                <p class="prod-rel-price">
                                    <b>$37</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/300x345" alt="Porro quae quasi">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Porro quae quasi</a></h3>
                                <p class="prod-rel-price">
                                    <b>$85</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>


                    <li class="prod-rel-wrap">
                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/378x300" alt="Sunt temporibus velit">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Sunt temporibus velit</a></h3>
                                <p class="prod-rel-price">
                                    <b>$115</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/300x394" alt="Harum illum incidunt">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Harum illum incidunt</a></h3>
                                <p class="prod-rel-price">
                                    <b>$130</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/300x303" alt="Reprehenderit rerum">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Reprehenderit rerum</a></h3>
                                <p class="prod-rel-price">
                                    <b>$210</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/300x588" alt="Quae quasi adipisci alias">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Quae quasi adipisci alias</a></h3>
                                <p class="prod-rel-price">
                                    <b>$85</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>


                    <li class="prod-rel-wrap">
                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/300x416" alt="Maxime molestias necessitatibus nobis">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Maxime molestias necessitatibus nobis</a></h3>
                                <p class="prod-rel-price">
                                    <b>$95</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="prod-rel">
                            <a href="product.html" class="prod-rel-img">
                                <img src="http://placehold.it/300x480" alt="Facilis illum">
                            </a>
                            <div class="prod-rel-cont">
                                <h3><a href="product.html">Facilis illum</a></h3>
                                <p class="prod-rel-price">
                                    <b>$150</b>
                                </p>
                                <div class="prod-rel-actions">
                                    <a title="Wishlist" href="#" class="prod-rel-favorites"><i class="fa fa-heart"></i></a>
                                    <a title="Compare" href="#" class="prod-rel-compare"><i class="fa fa-bar-chart"></i></a>
                                    <p class="prod-i-addwrap">
                                        <a title="Add to cart" href="#" class="prod-i-add"><i class="fa fa-shopping-cart"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        <!-- Related Products - end -->
    </section>
</main>
<!-- Main Content - end -->