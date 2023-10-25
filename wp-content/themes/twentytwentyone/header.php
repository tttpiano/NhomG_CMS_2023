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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>

<!--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<!--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>-->
</head>
<style>
    body {
        font-family: 'Open Sans', sans-serif;
    }

    ul.list_1 {
        list-style: none;
        margin: 0 0 20px 0;
        padding: 0;
        font-weight: 700;
        font-size: 13px;
        margin-bottom: 0;
        color: #2d4050;
        -webkit-font-smoothing: subpixel-antialiased;
    }

    .wpb_wrapper hr {
        border-color: #999eab;
        margin: 0;
        border-width: 2px;
        width: 45px;
        margin-bottom: 10px;
    }

    ul.list_1 li a {
        text-decoration: none;
        padding: 4px 10px;
        display: block;
        margin-bottom: 0;
        border-bottom: 1px solid #efefef;
        color: #488dc6;
        -webkit-transition: all 0.4s ease;
        transition: all 0.4s ease;
        background: transparent;
    }

    .type-111 a {
        text-decoration: none;
    }

    li {
        display: list-item;
        text-align: -webkit-match-parent;
    }
    body{
        background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;
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
    <div class="main"  style="position: relative;">
    <div class="col-md-3"style="position: absolute;right: 0">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">
                        <?php
                        if (is_home() || is_front_page()) { // Kiểm tra xem bạn đang ở trang chủ
                            if (is_user_logged_in()) {
                                if (!isset($comments_fetched)) { // Kiểm tra xem đã lấy danh sách bình luận chưa
                                    $comments = get_comments(array(
                                        'status' => 'approve', // Lấy các bình luận đã được duyệt
                                        'number' => 20, // -1 để lấy tất cả bình luận, hoặc bạn có thể đặt một giới hạn
                                    ));
                                    $comments_fetched = true; // Đánh dấu đã lấy danh sách bình luận
                                }

                                echo '<h4>COMMENT</h4>
                                        <hr>
                                        <ul class="list_1">';

                                if (!empty($comments)) {
                                    foreach ($comments as $comment) {
                                        // Lấy ID của bài viết mà bình luận đã được đăng trên
                                        $post_id = $comment->comment_post_ID;
                                        // Lấy link đến bài viết
                                        $post_link = get_permalink($post_id);
                                        echo '<li><a href="' . esc_url($post_link) . '">' . esc_html($comment->comment_content) . '</a></li>';
                                    }
                                } else {
                                    echo '<li>Không có bình luận nào.</li>';
                                }
                                echo '</ul>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="container-fluid" style="margin-top: 30px">-->
<!--        <div class="row">-->
<!--            <div class="col-md-3"></div>-->
<!--            <div class="col-md-6">-->
<!--                -->
<!--            </div>-->
<!--            <div class="col-md-3">-->
<!--                <div class="vc_column-inner ">-->
<!--                    <div class="wpb_wrapper">-->
<!--                        <div class="wpb_text_column wpb_content_element ">-->
<!--                            <div class="wpb_wrapper">-->
<!--                                --><?php
//                                if (is_home() || is_front_page()) { // Kiểm tra xem bạn đang ở trang chủ
//                                    if (is_user_logged_in()) {
//                                        $comments = get_comments(array(
//                                            'status' => 'approve', // Lấy các bình luận đã được duyệt
//                                            'number' => 20, // -1 để lấy tất cả bình luận, hoặc bạn có thể đặt một giới hạn
//                                        ));
//
//                                        echo '<h4>COMMENT</h4>
//                                            <hr>
//                                            <ul class="list_1">';
//
//                                        if (!empty($comments)) {
//                                            foreach ($comments as $comment) {
//                                                // Lấy ID của bài viết mà bình luận đã được đăng trên
//                                                $post_id = $comment->comment_post_ID;
//                                                // Lấy link đến bài viết
//                                                $post_link = get_permalink($post_id);
//                                                echo '<li><a href="' . esc_url($post_link) . '">' . esc_html($comment->comment_content) . '</a></li>';
//                                            }
//                                        } else {
//                                            echo '<li>Không có bình luận nào.</li>';
//                                        }
//                                        echo '</ul>';
//                                    }
//                                }
//
//                                ?>
<!---->
<!---->
<!--                                </ul>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <!--    // Lấy tất cả các bình luận-->
    <!--    $comments = get_comments(array(-->
    <!--    'status' => 'approve', // Lấy các bình luận đã được duyệt-->
    <!--    'number' => -1, // -1 để lấy tất cả bình luận, hoặc bạn có thể đặt một giới hạn-->
    <!--    ));-->
    <!---->
    <!--    if (!empty($comments)) {-->
    <!--    foreach ($comments as $comment) {-->
    <!--    // In ra thông tin của mỗi bình luận-->
    <!--    echo 'Người đăng: ' . get_comment_author($comment) . '<br>';-->
    <!--    echo 'Nội dung: ' . $comment->comment_content . '<br>';-->
    <!--    echo 'Ngày đăng: ' . $comment->comment_date . '<br><br>';-->
    <!--    }-->
