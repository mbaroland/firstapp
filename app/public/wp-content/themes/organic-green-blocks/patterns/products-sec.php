<?php
/**
 * Title: Products Sec 
 * Slug: organic-green-blocks/products-sec
 * Categories: organic-green-blocks, products-sec
 */
?>

<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"8px"} -->
<div style="height:8px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"source_sans_3"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-source-sans-3-font-family" style="font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('featured products','organic-green-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}}},"backgroundColor":"primary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","outofstock","onbackorder"]},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:group {"className":"wow swing","layout":{"type":"constrained"}} -->
<div class="wp-block-group wow swing"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:group {"style":{"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"white","className":"product-info","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-info has-white-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-title {"textAlign":"left","level":3,"style":{"spacing":{"margin":{"top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium","fontFamily":"source_sans_3","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:post-terms {"term":"product_cat","style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text","fontFamily":"source_sans_3"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"add-cart-btn","fontSize":"medium","style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no product found','organic-green-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->