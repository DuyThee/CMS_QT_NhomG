<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>
.list_new_view{
    padding-left: 15px;
    border-left: 1px solid #666;
    margin-bottom: 15px;
}
.top_news_block_desc {
	font-size: 0.9em;
	padding: 15px;
	background: #fff;
	-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
}
.top_news_block_desc h4 {
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	font-weight: bold;
}
.top_news_block_desc .topnewstime {
	margin-top: 12px;
	text-align:center;
	padding-left: 0;
}
.list_new_view .top_news_block_desc .topnewstime {
    padding-left: 15px;
}
.shortdesc {
	padding-right: 30px;
	border-left: 1px solid #666;
}
.topnews .topnewstime {
	text-align: center;
}
.topnewstime > .topnewsdate{
	font-family: 'Prata', serif;
	font-size: 3.1em;
	line-height: 1em;
	margin-left: 15px;
}
.topnewstime > .topnewsmonth{
	text-transform: uppercase;
	font-size: 0.9em;
	margin-left: 15px;
}
a{
	text-decoration: none;
}
</style>
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php //get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>

	<!-- <div class="entry-content">
		<?php //get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div> -->
	<!-- .entry-content -->
	<div class="list_new_view">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 top_news_block_desc">
                    <div class="row">
                        <div class="col-md-3 col-xs-3 topnewstime">
                                                        <span class="topnewsdate"><?php echo get_the_time('d')?></span><br>
                            <span class="topnewsmonth">Tháng <?php echo get_the_time('m') ?></span><br>
                        </div>
                        <div class="col-md-9 col-xs-9 shortdesc">
                            <h4><a href=""><?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?></a></h4>
                            <p><?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
						   </p>
                        </div>
                    </div>
                </div>
				<div class="col-md-3">
                </div>
            </div>
</div>
	<!-- <footer class="entry-footer default-max-width"> -->
		<?php// twenty_twenty_one_entry_meta_footer(); ?>
	<!-- </footer>.entry-footer -->
</article><!-- #post-${ID} -->
