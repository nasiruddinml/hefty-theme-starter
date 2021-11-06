<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hefty_Starter_Theme_for_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php
			hefty_starter_theme_posted_on();
			hefty_starter_theme_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php hefty_starter_theme_post_thumbnail(); ?>

	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<?php hefty_starter_theme_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
