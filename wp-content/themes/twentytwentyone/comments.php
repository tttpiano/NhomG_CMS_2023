<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

    <?php
    if ( have_comments() ) :
        ?>
        <h2 class="comments-title">
            <?php if ( '1' === $twenty_twenty_one_comment_count ) : ?>
                <?php esc_html_e( '1 comment', 'twentytwentyone' ); ?>
            <?php else : ?>
                <?php
                printf(
                /* translators: %s: Comment count number. */
                    esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone' ) ),
                    esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
                );
                ?>
            <?php endif; ?>
        </h2><!-- .comments-title -->

        <?php
        wp_list_comments(
            array(
                'avatar_size' => 60,
                'style'       => 'ol',
                'short_ping'  => true,
                'callback'    => 'custom_comment_output' // Sử dụng hàm tùy chỉnh để hiển thị bình luận.
            )
        );
        ?>

        <?php
        the_comments_pagination(
            array(
                'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
                'mid_size'           => 0,
                'prev_text'          => sprintf(
                    '%s <span class="nav-prev-text">%s</span>',
                    is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
                    esc_html__( 'Older comments', 'twentytwentyone' )
                ),
                'next_text'          => sprintf(
                    '<span class="nav-next-text">%s</span> %s',
                    esc_html__( 'Newer comments', 'twentytwentyone' ),
                    is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
                ),
            )
        );
        ?>
    <?php endif; ?>

    <?php
    comment_form(
        array(
            'title_reply'        => esc_html__( '', 'twentytwentyone' ),
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after'  => '</h2>',
        )
    );
    ?>

</div><!-- #comments -->

<?php
// Hàm tùy chỉnh để hiển thị từng bình luận theo giao diện bạn cung cấp.
function custom_comment_output($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <div class="container">
        <div class="row">
            <div class="media comment-box">
                <div class="media-left">
                    <a href="#">
                        <?php echo get_avatar($comment, 60); ?>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?php comment_author(); ?></h4>
                    <?php comment_text(); ?>
                        <?php
                        comment_reply_link(
                            array(
                                'depth'     => $depth,
                                'max_depth' => $args['max_depth'],
                            )
                        );
                        ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

