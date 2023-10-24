<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }
</style
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site ">
    <a class="skip-link screen-reader-text" href="#content">
        <?php
        /* translators: Hidden accessibility text. */
        esc_html_e('Skip to content', 'twentytwentyone');
        ?>
    </a>

    <?php get_template_part('template-parts/header/site-header'); ?>
    <div class="container" style="margin-top: 30px">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php

                // nếu trang không phải là trang chi tiết bài viết
                if (!is_single() && !is_category() && !is_search()) {
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            ?>

                            <div class="list_new_view">
                                <div class="row">
                                    <div class="col-md-12 top_news_block_desc">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-3 topnewstime">
                                                <span class="topnewsdate"><?php echo get_the_date('d'); ?></span><br>
                                                <span class="topnewsmonth">Tháng <?php echo get_the_date('m'); ?></span><br>
                                            </div>
                                            <div class="col-md-9 col-xs-9 shortdesc">
                                                <h4 class="h4">
                                                    <a class="abc custom-link-class" href="<?php the_permalink(); ?>"
                                                       title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                                </h4>
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'No posts found.';
                    endif;
                }
                ?>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

