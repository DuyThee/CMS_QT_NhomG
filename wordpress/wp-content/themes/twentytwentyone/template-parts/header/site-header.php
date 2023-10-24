<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 * 
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>

<style>
    .nav_a li {
        margin-right: 20px;
    }

    .navbar-icon-top .navbar-nav .nav-link>.fa {
        position: relative;
        width: 36px;
        font-size: 24px;
    }

    .navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
        font-size: 0.75rem;
        position: absolute;
        right: 0;
        font-family: sans-serif;
    }

    .navbar-icon-top .navbar-nav .nav-link>.fa {
        top: 3px;
        line-height: 12px;
    }

    .navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
        top: -10px;
    }

    @media (min-width: 576px) {
        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
            text-align: center;
            display: table-cell;
            height: 70px;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa {
            display: block;
            width: 48px;
            margin: 2px auto 4px auto;
            top: 0;
            line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa>.badge {
            top: -7px;
        }
    }

    @media (min-width: 768px) {
        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
            text-align: center;
            display: table-cell;
            height: 70px;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa {
            display: block;
            width: 48px;
            margin: 2px auto 4px auto;
            top: 0;
            line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa>.badge {
            top: -7px;
        }
    }

    @media (min-width: 992px) {
        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
            text-align: center;
            display: table-cell;
            height: 70px;
            vertical-align: middle;
            padding-top: 0;
            padding-bottom: 0;
        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa {
            display: block;
            width: 48px;
            margin: 2px auto 4px auto;
            top: 0;
            line-height: 24px;
        }

        .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa>.badge {
            top: -7px;
        }
    }

    @media (min-width: 1200px) {

    }
    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
        text-align: center;
        display: table-cell;
        height: 70px;
        vertical-align: middle;
        padding-top: 0;
        padding-bottom: 0;
    }

    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa {
        display: block;
        width: 48px;
        margin: 2px auto 4px auto;
        top: 0;
        line-height: 24px;
    }

    .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa>.badge {
        top: -7px;
    }
    
    .ip_search{
        border: 1px solid #00000066 !important;
        border-radius: 5px !important;
    }
    .btn_s{
        background: white !important;
        color: #6c757d !important;
    }
</style>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-light bg-light" style="margin-bottom: 50px">
    <div class="container">
        <a class="navbar-brand" href="http://localhost:81/CMS_QT_NhomG/wordpress/">Nhom E</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost:81/CMS_QT_NhomG/wordpress/">
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <form role="search" method="get" class="form-inline my-2 my-lg-0" style="padding-left: 20px;" action="">
                    <!-- Các thay đổi HTML khác ở đây -->
                    <input type="text" placeholder="search" class="form-control mr-sm-2 ip_search " required name="s">
                    <button type="submit" class="btn btn-dark my-2 my-sm-0 btn_s">Submit</button>
                </form>
            </ul>
			<ul>
			<?php get_template_part( 'template-parts/header/site-nav' ); ?>
			</ul>
            <ul class="navbar-nav nav_a">




                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-solid fa-ellipsis"></i>
                        Menu
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
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
                        <a class="dropdown-item" href="">đăng nhập</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">đăng ký</a>
                    </div>
                </li>

            </ul>

        </div>
    </div>
</nav>
