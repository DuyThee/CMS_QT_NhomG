<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide custom-d-flex">
		<?php the_title('<h6 class="entry-title">', '</h6>'); ?>
		<?php
		$post = get_post();
		$date = $post->post_date;
		$day = date("d", strtotime($date));
		$month = date("m", strtotime($date));
		$year = date("y",strtotime($date)); 
		?>
		<div class="timestamp">
			<div class="ngaythang">
			<div class="ngay">
				<?= $day ?>
			</div>
			<div class="thang">
				<?= $month ?>
			</div>
			</div>
			<div class="nam">
				<?= $year ?>
			</div>
		</div>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="alignwide">
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
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->

<style>
	.custom-d-flex{
		display: flex;
		justify-content: space-between;
		border-bottom: 2px #b0aeae solid !important;
	}
	.timestamp{
		display:flex;
		align-items: center;
		justify-content:center;
		height: 100px;
		width: 100px;
		background: #F5CE31;
		text-align:center;
		align-items: center;
		border-radius: 50%;
		box-shadow: 0px 0px 5px 1px black;
	}
	.ngay{
		border-bottom: 2px black solid;
	}
</style>