<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
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
                                <p>
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    $excerpt = wp_trim_words($excerpt, 50, '.');
                                    echo $excerpt;


                                    ?>
                                    <a class="abc" href="<?php the_permalink(); ?>">[...]</a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <div class="col-md-3">-->
<!--            <div class="vc_column-inner ">-->
<!--                <div class="wpb_wrapper">-->
<!--                    <div class="wpb_text_column wpb_content_element ">-->
<!--                        <div class="wpb_wrapper">-->
<!--                            --><?php
//                            if (is_home() || is_front_page()) { // Kiểm tra xem bạn đang ở trang chủ
//                                if (is_user_logged_in()) {
//                                    $comments = get_comments(array(
//                                        'status' => 'approve', // Lấy các bình luận đã được duyệt
//                                        'number' => 20, // -1 để lấy tất cả bình luận, hoặc bạn có thể đặt một giới hạn
//                                    ));
//
//                                    echo '<h4>COMMENT</h4>
//                                            <hr>
//                                            <ul class="list_1">';
//
//                                    if (!empty($comments)) {
//                                        foreach ($comments as $comment) {
//                                            // Lấy ID của bài viết mà bình luận đã được đăng trên
//                                            $post_id = $comment->comment_post_ID;
//                                            // Lấy link đến bài viết
//                                            $post_link = get_permalink($post_id);
//                                            echo '<li><a href="' . esc_url($post_link) . '">' . esc_html($comment->comment_content) . '</a></li>';
//                                        }
//                                    } else {
//                                        echo '<li>Không có bình luận nào.</li>';
//                                    }
//                                    echo '</ul>';
//                                }
//                            }
//
//                            ?>
<!---->
<!---->
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
</div>

<!--<article id="post---><?php //the_ID(); ?><!--" --><?php //post_class(); ?>
<!--	--><?php //get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>
<!---->
<!--	<div class="entry-content">-->
<!--		--><?php //get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
<!--	</div>.entry-content -->
<!---->
<!--	<footer class="entry-footer default-max-width">-->
<!--		--><?php //twenty_twenty_one_entry_meta_footer(); ?>
<!--	</footer>.entry-footer -->

<!--</article> #post-${ID} -->
