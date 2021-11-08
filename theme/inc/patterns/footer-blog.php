<?php
/**
 * Blog footer
 */
return array(
	'title'      => __( 'Blog footer', 'hefty-starter-theme' ),
	'categories' => array( 'heftystartertheme-footers' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull" style="padding-top:8rem;padding-bottom:8rem"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . esc_html__( 'ABOUT US', 'hefty-starter-theme' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'We are a rogue collective of bird watchers. We’ve been known to sneak through fences, climb perimeter walls, and generally trespass in order to observe the rarest of birds.', 'hefty-starter-theme' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . esc_html__( 'LATEST POSTS', 'hefty-starter-theme' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:latest-posts /--></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . esc_html__( 'CATEGORIES', 'hefty-starter-theme' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:categories /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title /-->

					<!-- wp:paragraph {"align":"right"} -->
					<p class="has-text-align-right">' .
					sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Proudly powered by %s', 'hefty-starter-theme' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'hefty-starter-theme' ) ) . '" rel="nofollow">WordPress</a>'
					) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
