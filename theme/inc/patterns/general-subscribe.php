<?php
/**
 * Subscribe callout block pattern
 */
return array(
	'title'      => __( 'Subscribe callout', 'hefty-starter-theme' ),
	'categories' => array( 'heftystartertheme-general' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
					<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
					<h2>' . wp_kses_post( __( 'Watch birds<br>from your inbox', 'hefty-starter-theme' ) ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"fontSize":"normal"} -->
					<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link">' . esc_html__( 'Join our mailing list', 'hefty-starter-theme' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
					<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
					<!-- /wp:separator --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
);
