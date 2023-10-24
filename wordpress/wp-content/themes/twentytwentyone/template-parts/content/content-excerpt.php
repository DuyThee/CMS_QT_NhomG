<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
<?php
$post = get_post();
$date = $post->post_date;
$day = date("j", strtotime($date));
$month = date("m", strtotime($date));
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="item-card">
		<div class="row">
			<div class="col-5">
				<img class="w-100 h-100" src="https://media.istockphoto.com/id/1067347086/photo/cat-with-blue-eyes-looks-at-camera.jpg?s=612x612&w=0&k=20&c=UP1yQs6o0eidm4L2F74DDm02pyeH40MwBwwGRAKhb4E=" alt="">
			</div>
			<div class="col-1">
				<div class="d-flex flex-column">
					<div class="ngay">
						<?= $day?>
					</div>
					<div class="thang">
						<?= "Tháng" . $month?>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="entry-content">
					<div class="post-title">
					<?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>
					</div>
					<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
				</div><!-- .entry-content -->
			</div>
		</div>
		</div>
	</div>

	<!-- <footer class="entry-footer default-max-width">
	<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer> .entry-footer  -->
</article><!-- #post-${ID} -->

<style>
	.item-card{
		box-shadow: 0px 0px 2px 2px lightgray;
	}
	.post-title a{
		text-decoration: none !important;
		color: #428BCA;
	}
	.entry-content{
		border-left: 1px black solid;
		height:80%;
	}
	.ngay{
		font-size: 80px;
		font-weight: 700;
	}
	.thang{
		font-size:24px;
		color:darkgray;
	}
	.ngay, .thang{
		text-align:center;
	}
</style>