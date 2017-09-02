<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package eighteenbirdies
 */

$image = get_field('hp_hero_bg_img');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->


	</header><!-- .entry-header -->

	<?php
		$hp_hero_bg_img = wp_get_attachment_image( $image, $size );

		if( $image ) { ?>
			<div class="hp-hero-bg" style="background: url( ../18birdies/wp-content/uploads/2017/08/hero-img.jpg ) center center scroll; background-size: cover">
				<div class="container-lg l-pad-top-7">
					<div class="l-left l-pad-top-10">
						<h2 class="text-header is-light"><?php echo the_field('hp_hero_header') ?></h2>
						<p class="text-body is-light"><?php echo the_field('hp_hero_body') ?></p>
					</div>
					<div class="phone">
						<div class="screen"></div>
					</div>
				</div>
			</div>
	<?php
		}
	?>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'eighteenbirdies' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
