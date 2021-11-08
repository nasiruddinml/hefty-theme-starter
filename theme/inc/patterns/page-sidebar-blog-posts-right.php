<?php
/**
 * Blog posts with right sidebar block pattern
 */
return array(
	'title'      => __( 'Blog posts with right sidebar', 'hefty-starter-theme' ),
	'categories' => array( 'heftystartertheme-pages' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"max(1.25rem, 5vw)","right":"max(1.25rem, 5vw)","bottom":"max(1.25rem, 5vw)","left":"max(1.25rem, 5vw)"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull" style="padding-top:max(1.25rem, 5vw);padding-right:max(1.25rem, 5vw);padding-bottom:max(1.25rem, 5vw);padding-left:max(1.25rem, 5vw)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2rem","top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:2rem;padding-left:0px"><!-- wp:group {"layout":{"type":"flex"}} -->
					<div class="wp-block-group"><!-- wp:site-logo {"width":64} /--></div>
					<!-- /wp:group -->

					<!-- wp:navigation {"itemsJustification":"right","isResponsive":true} -->
					<!-- wp:page-list /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group -->

					<!-- wp:spacer {"height":64} -->
					<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"5%"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
					<div class="wp-block-columns alignwide has-foreground-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","style":{"spacing":{"padding":{"bottom":"6rem"}}}} -->
					<div class="wp-block-column" style="padding-bottom:6rem;flex-basis:66.66%"><!-- wp:query {"queryId":9,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"},"layout":{"inherit":true}} -->
					<div class="wp-block-query"><!-- wp:post-template -->
					<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"1rem"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"huge"} /-->

					<!-- wp:post-featured-image {"isLink":true} /-->

					<!-- wp:post-excerpt /-->

					<!-- wp:group {"layout":{"type":"flex"}} -->
					<div class="wp-block-group"><!-- wp:post-date {"format":"F j, Y","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /-->

					<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

					<!-- wp:post-terms {"term":"post_tag","fontSize":"small"} /--></div>
					<!-- /wp:group -->

					<!-- wp:spacer {"height":64} -->
					<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					<!-- /wp:post-template -->

					<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

					<!-- wp:query-pagination-numbers /-->

					<!-- wp:query-pagination-next {"fontSize":"small"} /-->
					<!-- /wp:query-pagination --></div>
					<!-- /wp:query --></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/flight-path-on-salmon.jpg" alt="' . esc_attr__( 'Illustration of a flying bird.', 'hefty-starter-theme' ) . '"/></figure>
					<!-- /wp:image -->

					<!-- wp:spacer {"height":4} -->
					<div style="height:4px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:site-title {"isLink":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.2"}},"fontSize":"medium","fontFamily":"source-serif-pro"} /-->

					<!-- wp:site-tagline /-->

					<!-- wp:spacer {"height":16} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"level":4,"fontSize":"medium"} -->
					<h4 class="has-medium-font-size"><em>' . esc_html__( 'Categories', 'hefty-starter-theme' ) . '</em></h4>
					<!-- /wp:heading -->

					<!-- wp:tag-cloud {"taxonomy":"category","showTagCounts":true} /-->

					<!-- wp:heading {"level":4,"fontSize":"medium"} -->
					<h4 class="has-medium-font-size"><em>' . esc_html__( 'Tags', 'hefty-starter-theme' ) . '</em></h4>
					<!-- /wp:heading -->

					<!-- wp:tag-cloud {"showTagCounts":true} /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
