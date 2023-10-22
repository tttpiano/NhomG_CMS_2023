<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .form-control-borderless {
        border: none;
    }
    .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
        border: none;
        outline: none;
        box-shadow: none;
    }
    .title{
        font-weight: bold;
        color: #cc2653;
    }
    .result{
        color: #333;
    }
    .page-description.search-term:before {
        color: black;
    }
    .page-description.search-term {
        color: black;
        font-size: 25px;
    }
</style>
<body>

<div class="container mt-0"  style="background-color: #f5efe1;">
    <div class="row justify-content-center" style="background-color: white">
        <div class="d-flex justify-content-center">
            <?php if ( is_search() ) : ?>
            <div>
                <h3 class="title" style="text-align: center">
                    <?php
                    printf(
                    /* translators: %s: Search term. */
                        esc_html__( 'Search: "%s"', 'twentytwentyone' ),
                        '<span class="page-description search-term" style="color: black">' . esc_html( get_search_query() ) . '</span>'
                    );
                    ?>
                </h3>
                <?php
                if(have_posts()) : ?>
                    <div class="search-result-count default-max-width">
                        <?php
                        // Hiển thị số kết quả tìm kiếm
                        printf(
                            esc_html(
                            /* translators: %d: The number of search results. */
                                _n(
                                    'We found %d result for your search.',
                                    'We found %d results for your search.',
                                    (int) $wp_query->found_posts,
                                    'twentytwentyone'
                                )
                            ),
                            (int) $wp_query->found_posts
                        );
                        ?>
                    </div> <!-- .search-result-count -->
                <?php else : ?>
                <p>
                    We could not find any results for your search. You can give it <br style="text-align: center"> <span style="display: inline-block; text-align: center; width: 100%;">another try through the search form below</span>

                    <!--                <h1 class="page-title">--><?php //esc_html_e( 'Nothing here', 'twentytwentyone' ); ?><!--</h1>-->
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-2">
        <div class="col-12 col-md-10 col-lg-8" style="padding-bottom: 40px; padding-top: 20px">
            <form class="card card-sm" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div  class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input style="" class="form-control form-control-lg border-0" type="search" placeholder="Search topics or keywords" name="s" id="s" value="<?php the_search_query(); ?>">
                    </div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button style="background-color: #28a745; color: white !important;" class="btn btn-md btn-success" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>
        <!--end of col-->
    </div>

</div>

<!--<section class="no-results not-found">-->
<!--	<header class="page-header alignwide">-->
<!--		--><?php //if ( is_search() ) : ?>
<!---->
<!--			<h1 class="page-title">-->
<!--				--><?php
//				printf(
//					/* translators: %s: Search term. */
//					esc_html__( 'Results for "%s"', 'twentytwentyone' ),
//					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
//				);
//				?>
<!--			</h1>-->
<!---->
<!--		--><?php //else : ?>
<!---->
<!--			<h1 class="page-title">--><?php //esc_html_e( 'Nothing here', 'twentytwentyone' ); ?><!--</h1>-->
<!---->
<!--		--><?php //endif; ?>
<!--	</header>.page-header -->
<!---->
<!--	<div class="page-content default-max-width">-->
<!---->
<!--		--><?php //if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
<!---->
<!--			--><?php
//			printf(
//				'<p>' . wp_kses(
//					/* translators: %s: Link to WP admin new post page. */
//					__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone' ),
//					array(
//						'a' => array(
//							'href' => array(),
//						),
//					)
//				) . '</p>',
//				esc_url( admin_url( 'post-new.php' ) )
//			);
//			?>
<!---->
<!--		--><?php //elseif ( is_search() ) : ?>
<!---->
<!--			<p>--><?php //esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentytwentyone' ); ?><!--</p>-->
<!--			--><?php //get_search_form(); ?>
<!---->
<!--		--><?php //else : ?>
<!---->
<!--			<p>--><?php //esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone' ); ?><!--</p>-->
<!--			--><?php //get_search_form(); ?>
<!---->
<!--		--><?php //endif; ?>
<!--	</div> .page-content -->
<!--</section> .no-results -->
<?php endif;