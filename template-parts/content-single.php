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
    <h1 class="main-ttl"><span><?php the_title(); ?></span></h1>
    <!-- Blog Post - start -->
    <div class="post-wrap stylization">
        <?php the_post_thumbnail('post-single'); ?>
        <?php the_content(); ?>
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
    </div>
    <!-- Blog Post - end -->