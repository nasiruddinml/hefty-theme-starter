<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package Hefty_Starter_Theme_for_WordPress
 * @since 1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'hefty-starter-theme',
		array( 'label' => esc_html__( 'Hefty Starter Theme', 'hefty-starter-theme' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Large Text.
	register_block_pattern(
		'hefty-starter-theme/large-text',
		array(
			'title'         => esc_html__( 'Large Text', 'hefty-starter-theme' ),
			'categories'    => array( 'hefty-starter-theme' ),
			'viewportWidth' => 1440,
			'content'       => '<!-- wp:heading {"align":"wide","fontSize":"gigantic","style":{"typography":{"lineHeight":"1.1"}}} --><h2 class="alignwide has-text-align-wide has-gigantic-font-size" style="line-height:1.1">' . esc_html__( 'A new portfolio default theme for WordPress', 'hefty-starter-theme' ) . '</h2><!-- /wp:heading -->',
		)
	);

	// Links Area.
	register_block_pattern(
		'hefty-starter-theme/links-area',
		array(
			'title'         => esc_html__( 'Links Area', 'hefty-starter-theme' ),
			'categories'    => array( 'hefty-starter-theme' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'A huge text followed by social networks and email address links.', 'Block pattern description', 'hefty-starter-theme' ),
			'content'       => '<!-- wp:cover {"overlayColor":"green","contentPosition":"center center","align":"wide","className":"is-style-heftystartertheme-border"} --><div class="wp-block-cover alignwide has-green-background-color has-background-dim is-style-heftystartertheme-border"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":20} --><div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:paragraph {"fontSize":"huge"} --><p class="has-huge-font-size">' . wp_kses_post( __( 'Let&#8217;s Connect.', 'hefty-starter-theme' ) ) . '</p><!-- /wp:paragraph --><!-- wp:spacer {"height":75} --><div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><a href="#" data-type="URL">' . esc_html__( 'Twitter', 'hefty-starter-theme' ) . '</a> / <a href="#" data-type="URL">' . esc_html__( 'Instagram', 'hefty-starter-theme' ) . '</a> / <a href="#" data-type="URL">' . esc_html__( 'Dribbble', 'hefty-starter-theme' ) . '</a></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><a href="#">' . esc_html__( 'example@example.com', 'hefty-starter-theme' ) . '</a></p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:spacer {"height":20} --><div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --></div></div><!-- /wp:cover --><!-- wp:paragraph --><p></p><!-- /wp:paragraph -->',
		)
	);

	// Media & Text Article Title.
	register_block_pattern(
		'hefty-starter-theme/media-text-article-title',
		array(
			'title'         => esc_html__( 'Media and Text Article Title', 'hefty-starter-theme' ),
			'categories'    => array( 'hefty-starter-theme' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'A Media & Text block with a big image on the left and a heading on the right. The heading is followed by a separator and a description paragraph.', 'Block pattern description', 'hefty-starter-theme' ),
			'content'       => '<!-- wp:media-text {"mediaId":1752,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/playing-in-the-sand.jpg","mediaType":"image","className":"is-style-heftystartertheme-border"} --><div class="wp-block-media-text alignwide is-stacked-on-mobile is-style-heftystartertheme-border"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/playing-in-the-sand.jpg" alt="' . esc_attr__( '&#8220;Playing in the Sand&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '" class="wp-image-1752"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"align":"center"} --><h2 class="has-text-align-center">' . esc_html__( 'Playing in the Sand', 'hefty-starter-theme' ) . '</h2><!-- /wp:heading --><!-- wp:separator {"className":"is-style-dots"} --><hr class="wp-block-separator is-style-dots"/><!-- /wp:separator --><!-- wp:paragraph {"align":"center","fontSize":"small"} --><p class="has-text-align-center has-small-font-size">' . wp_kses_post( __( 'Berthe Morisot<br>(French, 1841-1895)', 'hefty-starter-theme' ) ) . '</p><!-- /wp:paragraph --></div></div><!-- /wp:media-text -->',
		)
	);

	// Overlapping Images.
	register_block_pattern(
		'hefty-starter-theme/overlapping-images',
		array(
			'title'         => esc_html__( 'Overlapping Images', 'hefty-starter-theme' ),
			'categories'    => array( 'hefty-starter-theme' ),
			'viewportWidth' => 1024,
			'description'   => esc_html_x( 'Three images inside an overlapping columns block.', 'Block pattern description', 'hefty-starter-theme' ),
			'content'       => '<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-heftystartertheme-columns-overlap"} --><div class="wp-block-columns alignwide are-vertically-aligned-center is-style-heftystartertheme-columns-overlap"><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"full","sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="' . esc_attr__( '&#8220;Roses Trémières&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '"/></figure><!-- /wp:image --><!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:image {"align":"full","sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/in-the-bois-de-boulogne.jpg" alt="' . esc_attr__( '&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '"/></figure><!-- /wp:image --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:image {"align":"full",sizeSlug":"full"} --><figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/young-woman-in-mauve.jpg" alt="' . esc_attr__( '&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '"/></figure><!-- /wp:image --></div><!-- /wp:column --></div><!-- /wp:columns -->',
		)
	);

	// Two Images Showcase.
	register_block_pattern(
		'hefty-starter-theme/two-images-showcase',
		array(
			'title'         => esc_html__( 'Two Images Showcase', 'hefty-starter-theme' ),
			'categories'    => array( 'hefty-starter-theme' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'A Media & Text block with a big image on the left and a smaller one with bordered frame on the right.', 'Block pattern description', 'hefty-starter-theme' ),
			'content'       => '<!-- wp:media-text {"mediaId":1747,"mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/Daffodils.jpg","mediaType":"image"} --><div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/Daffodils.jpg" alt="' . esc_attr__( '&#8220;Daffodils&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '" size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:image {"align":"center","width":400,"height":512,"sizeSlug":"large","className":"is-style-heftystartertheme-image-frame"} --><figure class="wp-block-image aligncenter size-large is-resized is-style-heftystartertheme-image-frame"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/self-portrait-1885.jpg" alt="' . esc_attr__( '&#8220;Self portrait&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '" width="400" height="512"/></figure><!-- /wp:image --></div></div><!-- /wp:media-text -->',
		)
	);

	// Overlapping Images and Text.
	register_block_pattern(
		'hefty-starter-theme/overlapping-images-and-text',
		array(
			'title'         => esc_html__( 'Overlapping Images and Text', 'hefty-starter-theme' ),
			'categories'    => array( 'hefty-starter-theme' ),
			'viewportWidth' => 1440,
			'description'   => esc_html_x( 'An overlapping columns block with two images and a text description.', 'Block pattern description', 'hefty-starter-theme' ),
			'content'       => '<!-- wp:columns {"verticalAlignment":null,"align":"wide","className":"is-style-heftystartertheme-columns-overlap"} --> <div class="wp-block-columns alignwide is-style-heftystartertheme-columns-overlap"><!-- wp:column --> <div class="wp-block-column"><!-- wp:image {sizeSlug":"full"} --> <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/the-garden-at-bougival-1884.jpg" alt="' . esc_attr__( '&#8220;The Garden at Bougival&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '"/></figure> <!-- /wp:image --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"bottom"} --> <div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"className":"is-style-heftystartertheme-border","backgroundColor":"green"} --> <div class="wp-block-group is-style-heftystartertheme-border has-green-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:paragraph {"fontSize":"extra-large","style":{"typography":{"lineHeight":"1.4"}}} --> <p class="has-extra-large-font-size" style="line-height:1.4">' . esc_html__( 'Beautiful gardens painted by Berthe Morisot in the late 1800s', 'hefty-starter-theme' ) . '</p> <!-- /wp:paragraph --></div></div> <!-- /wp:group --></div> <!-- /wp:column --> <!-- wp:column --> <div class="wp-block-column"><!-- wp:image {sizeSlug":"full"} --> <figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/villa-with-orange-trees-nice.jpg" alt="' . esc_attr__( '&#8220;Villa with Orange Trees, Nice&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns -->',
		)
	);

	// Portfolio List.
	register_block_pattern(
		'hefty-starter-theme/portfolio-list',
		array(
			'title'       => esc_html__( 'Portfolio List', 'hefty-starter-theme' ),
			'categories'  => array( 'hefty-starter-theme' ),
			'description' => esc_html_x( 'A list of projects with thumbnail images.', 'Block pattern description', 'hefty-starter-theme' ),
			'content'     => '<!-- wp:separator {"className":"is-style-heftystartertheme-separator-thick"} --> <hr class="wp-block-separator is-style-heftystartertheme-separator-thick"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'Roses Trémières', 'hefty-starter-theme' ) . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":46,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="' . esc_attr__( '&#8220;Roses Trémières&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '" width="46" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'Villa with Orange Trees, Nice', 'hefty-starter-theme' ) . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":84,"height":67,"className":"alignright size-large is-resized"} --><figure class="wp-block-image is-resized alignright size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/villa-with-orange-trees-nice.jpg" alt="&#8220;Villa with Orange Trees, Nice&#8221; by Berthe Morisot" width="84" height="67"/></figure><!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'In the Bois de Boulogne', 'hefty-starter-theme' ) . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":55,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/in-the-bois-de-boulogne.jpg" alt="' . esc_attr__( '&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '" width="55" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'The Garden at Bougival', 'hefty-starter-theme' ) . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":52,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/the-garden-at-bougival-1884.jpg" alt="' . esc_attr__( '&#8220;The Garden at Bougival&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '" width="52" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'Young Woman in Mauve', 'hefty-starter-theme' ) . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":50,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/young-woman-in-mauve.jpg" alt="' . esc_attr__( '&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '" width="50" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-default"} --> <hr class="wp-block-separator is-style-default"/> <!-- /wp:separator --> <!-- wp:columns --> <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":80} --> <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:paragraph {"fontSize":"extra-large"} --> <p class="has-extra-large-font-size"><a href="#">' . esc_html__( 'Reading', 'hefty-starter-theme' ) . '</a></p> <!-- /wp:paragraph --></div> <!-- /wp:column --> <!-- wp:column {"verticalAlignment":"center"} --> <div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"right","width":51,"height":67,"sizeSlug":"large"} --> <figure class="wp-block-image alignright size-large is-resized"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/Reading.jpg" alt="' . esc_attr__( '&#8220;Reading&#8221; by Berthe Morisot', 'hefty-starter-theme' ) . '" width="51" height="67"/></figure> <!-- /wp:image --></div> <!-- /wp:column --></div> <!-- /wp:columns --> <!-- wp:separator {"className":"is-style-heftystartertheme-separator-thick"} --> <hr class="wp-block-separator is-style-heftystartertheme-separator-thick"/> <!-- /wp:separator -->',
		)
	);

	register_block_pattern(
		'hefty-starter-theme/contact-information',
		array(
			'title'       => esc_html__( 'Contact Information', 'hefty-starter-theme' ),
			'categories'  => array( 'hefty-starter-theme' ),
			'description' => esc_html_x( 'A block with 3 columns that display contact information and social media links.', 'Block pattern description', 'hefty-starter-theme' ),
			'content'     => '<!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph --><p><a href="mailto:#">' . esc_html__( 'example@example.com', 'hefty-starter-theme' ) . '<br></a>' . esc_html__( '123-456-7890', 'hefty-starter-theme' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">' . esc_html__( '123 Main Street', 'hefty-starter-theme' ) . '<br>' . esc_html__( 'Cambridge, MA, 02139', 'hefty-starter-theme' ) . '</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:social-links {"align":"right"} --><ul class="wp-block-social-links alignright"><!-- wp:social-link {"url":"https://wordpress.org","service":"wordpress"} /--><!-- wp:social-link {"url":"https://www.facebook.com/WordPress/","service":"facebook"} /--><!-- wp:social-link {"url":"https://twitter.com/WordPress","service":"twitter"} /--><!-- wp:social-link {"service":"instagram"} /--><!-- wp:social-link {"service":"linkedin"} /--><!-- wp:social-link {"service":"youtube"} /--><!-- wp:social-link {"url":"https://www.youtube.com/wordpress","service":"youtube"} /--></ul><!-- /wp:social-links --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:paragraph --><p></p><!-- /wp:paragraph -->',
		)
	);
}
