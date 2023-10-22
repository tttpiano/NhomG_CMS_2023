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

</style>
<body>

<div class="container-fluid post-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="col-md-3"></div>
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
            <!--            <div class="row">-->
            <!--                <div class="col-md-12">-->
            <!--                    <div class="overviewline"></div>-->
            <!--                </div>-->
            <!--            </div>-->
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

</body>
</html>
