<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>



<!--	--><?php //get_template_part( 'template-parts/header/site-branding' ); ?>
<!--	--><?php //get_template_part( 'template-parts/header/site-nav' ); ?>


<nav class="navbar navbar-icon-top navbar-expand-lg navbar-light bg-light" style="margin-bottom: 50px">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo esc_url(get_home_url()); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo esc_url(get_home_url()); ?>">
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <form role="search" method="get" class="form-inline my-2 my-lg-0" style="padding-left: 20px;" action="<?php echo esc_url(home_url('/')); ?>">
                    <!-- Các thay đổi HTML khác ở đây -->
                    <input type="text" placeholder="search" class="form-control mr-sm-2 ip_search " required name="s">
                    <button type="submit" class="btn btn-dark my-2 my-sm-0 btn_s">Submit</button>
                </form>
            </ul>
            <ul class="navbar-nav nav_a">
                <?php
                // Lấy danh sách danh mục
                $categories = get_categories();

                if ($categories) {
                    echo '<li class="nav-item">';

                    foreach ($categories as $category) {
                        echo '<a class="nav-link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                    }

                    echo '</li>';
                }
                ?>



                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-solid fa-ellipsis"></i>
                        Menu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_search_link()); ?>">
                        <i class="fa fa-solid fa-magnifying-glass"></i>
                        Search
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-regular fa-circle-user"></i>
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo esc_url(wp_login_url()); ?>">Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo esc_url(wp_logout_url()); ?>">Logout</a>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</nav>

