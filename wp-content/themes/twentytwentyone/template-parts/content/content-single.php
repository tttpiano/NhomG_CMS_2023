<style>
    body {
        font-size: 14px;
        font-family: 'Open Sans', sans-serif;
    }
    .entry-title{
        font-size: 30px !important;
        font-weight: bold !important;

    }
    .detail .entry-title {
        border: none;
        margin-top: 45px;
    }

    .overviewline {
        border-bottom: 1px solid #cecece;
        margin: 25px 0 15px;
        position: relative;
    }
    .overviewline:before {
        content: "";
        position: absolute;
        top: 0;
        left: 50px;
        border-width: 12px 12px 0;
        border-style: solid;
        border-color: #cecece transparent;
        display: block;
        width: 0;
    }
    .overviewline:after {
        content: "";
        position: absolute;
        top: 0;
        left: 51px;
        border-width: 11px 11px 0;
        border-style: solid;
        border-color: #f5f5f5 transparent;
        display: block;
        width: 0;
    }
    .headlinesdate {
        background: #f5ce31;
        border-radius: 50%;
        padding: 10px 17px;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
    }
    .headlinesdate .headlinesdm, .news > .headlines .headlinesdate, .headlinesdate {
        float: left;
        font-family: 'Prata', serif;
    }
    .headlinesdate .headlinesyear {
        line-height: 3.5em;
        float: left;
        margin-left: 3px;
    }
    .detail .overview {
        font-style: italic;
        margin: 15px 0;
        text-align: justify;
    }

    .col-md-6{
        background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;

    }
    .headlinesday {
        border-bottom: 1px solid #000;
    }
    .detail .maincontent {
        margin: 20px 0;
        text-align: justify;
        line-height: 1.7em;
    }


    .list-group {
        list-style: disc;
        margin-bottom: 0;
    }

    .list-group-item {

        border: none !important;
        border-bottom: 2px #d9d9d9 solid !important;
        margin-bottom: 0;
        padding-left: 0;
        padding-right: 0;
        margin: 0 15px;
    }
    .list-group-item:before {
        font-family: Arial, Helvetica, sans-serif;
        color: #f5ce31;
        content: "\2022";
        font-size: 2em;
        padding-right: 0.5em;
        position: relative;
        top: 0.15em;
    }

    .list-group-item:last-child {
        border: none;
    }
    .list-group-item a{

    }
    .crossedbg {
        background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_cr_grey.png);
        height: 15px;
        margin: 0 15px;

    }
    body {
        font-family: 'Open Sans', sans-serif;
        background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;
    }
    .list_news .headlines {
        background: #fff;
    }
    .headlines {
        background: #56bdbf;
        overflow: hidden;
        padding: 20px 30px;
    }
    .headlines ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .headlines ul > li {
        overflow: hidden;
        display: table;
        margin-bottom: 5px;
        width: 100%;
    }
    .headlines .headlinesdates {
        font-size: 0.8em;
        width: 15%;
        min-width: 55px;
        display: table-cell;
        vertical-align: middle;
    }
    .headlinesdates .headlinesdms, .news > .headlines .headlinesdates, .headlinesdates {
        float: left;
        font-family: 'Prata', serif;
    }
    .headlinesdates .headlinesdms, .news > .headlines .headlinesdates, .headlinesdates {
        float: left;
        font-family: 'Prata', serif;
    }
    .list_news .headlines .headlinesdays, .detail .headlinesdates .headlinesdays {
        border-bottom: 1px solid #000;
    }
    .headlinesdates .headlinesday {
        border-bottom: 1px solid #fff;
    }
    .headlinesdates .headlinesdays, .news > .headlines .headlinesmonths {
        line-height: 1.7em;
    }
    .headlinesdates .headlinesyears {
        line-height: 3.5em;
        float: left;
        margin-left: 3px;
    }
    .headlines ul > li > .headlinestitles {
        display: table-cell;
        vertical-align: middle;
        width: 95%;
    }
    .list_news .headlines a {
        color: #000;

    }


</style>
<body>

<div class="container-fluid post-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <h3 style="font-weight: 900; margin: 15px 15px;">Categories</h3>
                <div class="crossedbg"></div>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    $category_link = get_category_link($category->term_id);
                    echo '<li class="list-group-item"><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
                }
                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="row title">
                <div class="col-md-10 col-xs-9" >
                    <?php the_title( '<h1 class="entry-title" style="margin-top: 7px">', '</h1>' ); ?>
                    <?php twenty_twenty_one_post_thumbnail(); ?>
                </div>
                <div class="col-md-2 col-xs-3">
                    <div class="headlinesdate" style="margin-top: 7px">
                        <div class="headlinesdm" style="margin-top: 7px">
                            <div class="headlinesday">    <?php the_date('d', '<span class="day">', '</span>'); ?>
                            </div>
                            <div class="headlinesmonth"> <?php
                                $month_number = get_the_date('n'); // Lấy số tháng (1-12)

                                // Chuyển đổi số tháng thành chữ số tương ứng
                                $month_name = date('m', mktime(0, 0, 0, $month_number, 10));

                                echo '<span class="month">' . $month_name . '</span>'; // Hiển thị số tháng
                                ?>

                            </div>
                        </div>

                        <div class="headlinesyear">   <?php
                            $full_year = get_the_date('Y'); // Lấy năm đầy đủ
                            $short_year = substr($full_year, -2); // Lấy hai số cuối cùng

                            echo '<span class="year">\'' . $short_year . ' </span>'; // Hiển thị năm hai số cuối
                            ?>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overviewline"></div>
                            </div>
                        </div>
            <div class="row maincontent">
                <div class="col-md-12">
                    <?php
                    the_content();
                    wp_link_pages(
                        array(
                            'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
                            'after'    => '</nav>',
                            /* translators: %: Page number. */
                            'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
                        )
                    );
                    ?>

                </div>
            </div>

        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php
            // Include WordPress bootstrap
            require('wp-load.php');

            // Truy vấn cơ sở dữ liệu để lấy thông tin bài viết
            $query = new WP_Query(array('post_type' => 'post'));

            // Kiểm tra xem có bài viết nào không
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $post_title = get_the_title(); // Lấy tên bài viết
                    $post_date = get_the_date(); // Lấy thời gian đăng bài viết
                    ?>

                    <div class="list_news">
                        <div class="headlines">
                            <ul>
                                <li>
                                    <div class="headlinesdates">
                                        <div class="headlinesdms">
                                            <div class="headlinesdays"><?php echo $post_date= get_the_date('d'); ?></div>
                                            <div class="headlinesmonths"><?php echo $post_date= get_the_date('m'); ?></div>
                                        </div>
                                        <div class="headlinesyears"><?php echo $post_date= get_the_date('y'); ?></div>
                                    </div>
                                    <div class="headlinestitles">
                                        <a href="<?php the_permalink(); ?>"><?php echo $post_title; ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <?php
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
