<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>

<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Những Bài Viết</h5>
                <ul class="list-unstyled quick-links">
                    <?php
                    $a = array(
                        'post-type' => 'post',
                        'posts_per_page' => 5
                    );

                    $b = new WP_Query($a);

                    if ($b->have_posts()) {
                        while ($b->have_posts()) {
                            $b->the_post();
                            echo '<li><a href="' . get_permalink() . '"><i class = "fa fa-angle-double-right"></i>' . get_the_title() . '</a></li>';
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Danh Mục</h5>
                <?php
                $ca = get_categories();
                if ($ca) {
                    echo '<ul class="list-unstyled quick-links">';
                    foreach ($ca as $category) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '" ><i class = "fa fa-angle-double-right"></i>' . $category->name . '</a></li>';
                    }
                    echo '</ul>';
                }
                ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Liên Lạc</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="https://maps.app.goo.gl/SJvWfWFTt1uvosvu9"><i class="fa fa-angle-double-right"></i>55 Đ. Hoàng Diệu 2, Linh Chiểu, Thủ Đức,<br> Thành phố Hồ Chí Minh, Việt Nam</a>
                    </li>

<!--                    <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get-->
<!--                            Started</a></li>-->
<!--                    <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i-->
<!--                                    class="fa fa-angle-double-right"></i>Imprint</a></li>-->
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                    class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i
                                    class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
                    Registered MSP/ISO of Elavon, Inc. Georgia [a wholly of U.S, Minneapolis,
                    MN]</p>
                <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com"
                                                      target="_blank">Sunlimetech</a></p>
            </div>
            <hr>
        </div>
    </div>
</section>
</body>
</html>

<?php wp_footer(); ?>

</body>
</html>
