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
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>



<!--	<div class="error-404 not-found default-max-width">-->
<!--		<div class="page-content">-->
<!--			<p>--><?php //esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentytwentyone' ); ?><!--</p>-->
<!--			--><?php //get_search_form(); ?>
<!--		</div> .page-content -->
<!--	</div> .error-404 -->
    <div class="row justify-content-center mt-2" style="background-color: #f5efe1;">
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
<?php
get_footer();
