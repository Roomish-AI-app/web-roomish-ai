<?php
/**
 * The template for displaying all single posts
 *
 * @package Roomish
 */

get_header(); ?>

<main id="main" class="site-main">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="entry-meta">
					<?php roomish_posted_on(); ?>
					<?php roomish_posted_by(); ?>
				</div>
			</header>

			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'roomish' ),
					'after'  => '</div>',
				) );
				?>
			</div>

			<footer class="entry-footer">
				<?php roomish_entry_footer(); ?>
			</footer>
		</article>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

	<?php endwhile; ?>
</main>

<?php
get_footer();
