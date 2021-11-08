<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Hefty_Starter_Theme_for_WordPress
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function hefty_starter_theme_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'heftystartertheme-columns-overlap',
				'label' => esc_html__( 'Overlap', 'hefty-starter-theme' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'heftystartertheme-border',
				'label' => esc_html__( 'Borders', 'hefty-starter-theme' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'heftystartertheme-border',
				'label' => esc_html__( 'Borders', 'hefty-starter-theme' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'heftystartertheme-image-frame',
				'label' => esc_html__( 'Frame', 'hefty-starter-theme' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'heftystartertheme-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'hefty-starter-theme' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'heftystartertheme-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'hefty-starter-theme' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'heftystartertheme-border',
				'label' => esc_html__( 'Borders', 'hefty-starter-theme' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'heftystartertheme-separator-thick',
				'label' => esc_html__( 'Thick', 'hefty-starter-theme' ),
			)
		);
	}
	add_action( 'init', 'hefty_starter_theme_register_block_styles' );
}
