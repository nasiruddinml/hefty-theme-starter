<?php
/**
 * About page links
 */
return array(
	'title'      => __( 'About page links', 'hefty-starter-theme' ),
	'categories' => array( 'heftystartertheme-pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10rem","right":"max(1.25rem, 5vw)","bottom":"10rem","left":"max(1.25rem, 5vw)"}}},"layout":{"inherit":false,"contentSize":"400px"}} -->
					<div class="wp-block-group alignfull" style="padding-top:10rem;padding-right:max(1.25rem, 5vw);padding-bottom:10rem;padding-left:max(1.25rem, 5vw)"><!-- wp:image {"align":"center","width":100,"height":100,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
					<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/assets/images/icon-bird.jpg" alt="' . esc_attr__( 'Logo featuring a flying bird', 'hefty-starter-theme' ) . '" width="100" height="100"/></figure></div>
					<!-- /wp:image -->

					<!-- wp:group -->
					<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
					<h2 class="has-text-align-center has-huge-font-size" id="swoop-1">' . esc_html__( 'Swoop', 'hefty-starter-theme' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html__( 'A podcast about birds', 'hefty-starter-theme' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {"contentJustification":"left"} -->
					<div class="wp-block-buttons is-content-justification-left"><!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Watch our videos', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on iTunes Podcasts', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Listen on Spotify', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'Support the show', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"style":{"border":{"radius":"6px"}},"className":"is-style-fill"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link" style="border-radius:6px">' . esc_html__( 'About the hosts', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:group -->

					<!-- wp:spacer {"height":40} -->
					<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"wordpress"} /-->

					<!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:group -->',
);