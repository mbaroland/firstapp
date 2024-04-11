<?php
/**
 * Title: Latest News
 * Slug: organic-green-blocks/latest-news
 * Categories: organic-green-blocks, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}},"color":{"background":"#f4f7fc"}},"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group has-background" style="background-color:#f4f7fc;margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"source_sans_3"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-source-sans-3-font-family" style="font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('recent blogs','organic-green-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}}},"backgroundColor":"primary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":3,"query":{"perPage":"4","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:columns {"style":{"border":{"radius":"10px"}},"backgroundColor":"white","className":"recent-blogs-column wow swing"} -->
<div class="wp-block-columns recent-blogs-column wow swing has-white-background-color has-background" style="border-radius:10px"><!-- wp:column {"verticalAlignment":"center","width":"50%","className":"recent-blog-img"} -->
<div class="wp-block-column is-vertically-aligned-center recent-blog-img" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"align":"center","style":{"border":{"radius":{"topLeft":"10px","bottomLeft":"10px"}}},"className":"news-thumb-wrap"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"recent-blog-content"} -->
<div class="wp-block-column is-vertically-aligned-center recent-blog-content" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);flex-basis:50%"><!-- wp:post-title {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"regular","fontFamily":"source_sans_3"} /-->

<!-- wp:post-author-name {"className":"recent-blogs-meta"} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":10,"className":"recent-blogs-excerpt"} /-->

<!-- wp:read-more {"style":{"typography":{"textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","className":"recent-blogs-more"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","className":"has-source_sans_3-font-family"} -->
<p class="has-text-align-center has-source_sans_3-font-family"><?php esc_html_e('There is no post found','organic-green-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->