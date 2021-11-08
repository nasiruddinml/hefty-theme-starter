<?php
/**
 * About page with big image and buttons
 */
return array(
	'title'      => __( 'About page with big image and buttons', 'hefty-starter-theme' ),
	'categories' => array( 'heftystartertheme-pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)","bottom":"max(1.25rem, 5vw)","left":"max(1.25rem, 5vw)"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull" style="padding-top:max(1.25rem, 5vw);padding-right:max(1.25rem, 5vw);padding-bottom:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)"><!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image alignfull size-full"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/assets/images/flight-path-on-gray-b.jpg" alt=""/></figure>
					<!-- /wp:image -->

					<!-- wp:columns {"align":"full"} -->
					<div class="wp-block-columns alignfull"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link">' . esc_html__( 'Purchase my work', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link">' . esc_html__( 'Support my studio', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link">' . esc_html__( 'Take a class', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:columns {"align":"full"} -->
					<div class="wp-block-columns alignfull"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link">' . esc_html__( 'Read about me', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link">' . esc_html__( 'Learn about my process', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link">' . esc_html__( 'Join my mailing list', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"wordpress"} /-->

					<!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:group -->',
);
