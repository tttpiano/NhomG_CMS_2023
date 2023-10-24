<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
    body {

        font-family: 'Open Sans', sans-serif;
    }

    .topnewstime>.topnewsmonth {
        text-transform: uppercase;
        font-size: 0.9em;
        margin-left: 15px;
    }

    .list_new_view {
        margin-bottom: 15px;
    }

    .abc {
        color: #428bca;
        text-decoration: none;
    }

    .top_news_block,
    .list_new_view {
        background: #fff;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
    }

   

    .top_news_block_desc {
        font-size: 0.9em;
        padding: 15px;
    }

    .top_news_block_desc .topnewstime {
        margin-top: 12px;
        text-align: center;
        padding-left: 0;
    }

    .topnewstime>.topnewsdate {
        font-family: 'Prata', serif;
        font-size: 3.1em;
        line-height: 1em;
        margin-left: 15px;
    }

    .top_news_block_desc h4 {
        text-transform: uppercase;
        font-family: 'Open Sans Condensed', sans-serif;
        font-weight: bold;
    }

    .h4 {
        font-size: 18px;
    }

    .top_news_block_desc {
        font-size: 0.9em;
        padding: 15px;
    }

    .shortdesc {
        border-left: 1px solid #666;
    }

    ul.timeline {
        list-style-type: none;
        position: relative;
    }
    .top_news_block_thumb img {
   
    width: unset !important;
    height: unset !important;
}

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>
<?php
$months = array(
    'January' => 'Tháng 1',
    'February' => 'Tháng 2',
    'March' => 'Tháng 3',
    'April' => 'Tháng 4',
    'May' => 'Tháng 5',
    'June' => 'Tháng 6',
    'July' => 'Tháng 7',
    'August' => 'Tháng 8',
    'September' => 'Tháng 9',
    'October' => 'Tháng 10',
    'November' => 'Tháng 11',
    'December' => 'Tháng 12',
);
get_header();

if (have_posts()) {
?>
    <?php get_template_part('template-parts/content/content-none'); ?>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <?php
                // Start the Loop.
                while (have_posts()) {
                    the_post();
                ?>




                    <div class="list_new_view">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="top_news_block_thumb">
                                    <?php
                                    // Check if the post has a featured image
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium', ['class' => 'img-responsive']);
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-7 top_news_block_desc">
                                <div class="row">
                                    <div class="col-md-4 col-xs-3 topnewstime">
                                        <span class="topnewsdate"><?php echo get_the_time('d'); ?></span><br>
                                        <span class="topnewsmonth"><?php echo $months[get_the_time('F')]; ?></span><br>
                                    </div>
                                    <div class="col-md-8 col-xs-9 shortdesc">
                                        <h4 class="h4">
                                            <a class="abc" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <p>
                                            <?php
                                            $excerpt = get_the_excerpt();
                                            $excerpt = wp_trim_words($excerpt, 30, '.');
                                            echo $excerpt;


                                            ?>
                                            <a class="abc" href="<?php the_permalink(); ?>">[...]</a>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                <?php
                } // End the loop.
                ?>
            </div>
            <div class="col-md-3">

            </div>

        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <h4>Latest News</h4>
        <ul class="timeline">

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();

            ?>
                    <li>
                        <a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <a href="#" class="float-right"><?php echo get_the_date('d'); ?> <?php echo get_the_date('M'); ?>, <?php echo get_the_date('Y'); ?></a>
                        <p>
                            <?php
                            $excerpt = get_the_excerpt();
                            $excerpt = wp_trim_words($excerpt, 50, '.');
                            echo $excerpt;


                            ?>
                            <a class="abc" href="<?php the_permalink(); ?>">[...]</a>

                        </p>
                    </li>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No posts found.';
            endif;

            ?>
        </ul>
    </div>

<?php
    // Previous/next page navigation.
    twenty_twenty_one_the_posts_navigation();
} else {
    get_template_part('template-parts/content/content-none');
}

get_footer();
