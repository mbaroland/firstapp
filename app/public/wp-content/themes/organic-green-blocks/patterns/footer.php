<?php
/**
 * Title: Footer
 * Slug: organic-green-blocks/footer
 * Categories: organic-green-blocks, footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"heading","textColor":"white","layout":{"type":"constrained","contentSize":"90%"},"fontSize":"small"} -->
<div class="wp-block-group has-white-color has-heading-background-color has-text-color has-background has-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|Background"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"Background","className":"wow rubberBand","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide wow rubberBand has-background-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"extra-large","fontFamily":"inter"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','organic-green-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1993,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/telephone.png'); ?>" alt="" class="wp-image-1993"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontFamily":"inter"} -->
<p class="has-inter-font-family">000012321545648</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1990,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/envelope.png'); ?>" alt="" class="wp-image-1990"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="mailto:mail@example.com"><?php esc_html_e('support@example.com','organic-green-blocks'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","customIconBackgroundColor":"#1fb125","iconBackgroundColorValue":"#1fb125","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"}},"textColor":"white","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-inter-font-family" style="font-style:normal;font-weight:600;letter-spacing:1px"><?php esc_html_e('Recent Posts','organic-green-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"10px"}},"color":{"background":"#1fb125"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:10px;background-color:#1fb125;color:#1fb125"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":22,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:post-title {"level":6,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"white","fontSize":"small"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"spacing":{"margin":{"top":"5px","right":"0px","bottom":"0px","left":"0px"}}},"className":"footer-post-excerpt","fontSize":"extra-small"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('There is no posts to display','organic-green-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"}},"textColor":"white","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-inter-font-family" style="font-style:normal;font-weight:600;letter-spacing:1px"><?php esc_html_e('Quick Links','organic-green-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"10px"}},"color":{"background":"#1fb125"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:10px;background-color:#1fb125;color:#1fb125"/>
<!-- /wp:separator -->

<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Our Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Products","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"My Cart","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Wholesale","type":"","url":"#","kind":"custom","isTopLevelLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"1px"}},"textColor":"white","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-white-color has-text-color has-inter-font-family" style="font-style:normal;font-weight:600;letter-spacing:1px"><?php esc_html_e('Gallery','organic-green-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"10px"}},"color":{"background":"#1fb125"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:10px;background-color:#1fb125;color:#1fb125"/>
<!-- /wp:separator -->

<!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":117,"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery1.png'); ?>" alt="" class="wp-image-117"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":118,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery2.png'); ?>" alt="" class="wp-image-118"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":119,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery3.png'); ?>" alt="" class="wp-image-119"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":120,"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery4.png'); ?>" alt="" class="wp-image-120"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":121,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery5.png'); ?>" alt="" class="wp-image-121"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":122,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery6.png'); ?>" alt="" class="wp-image-122"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":123,"sizeSlug":"thumbnail","linkDestination":"none"} -->
<figure class="wp-block-image size-thumbnail"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery7.png'); ?>" alt="" class="wp-image-123"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":124,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery8.jpg'); ?>" alt="" class="wp-image-124"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":127,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gallery9.jpg'); ?>" alt="" class="wp-image-127"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"color":{"background":"#1fb125"}},"textColor":"white","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group has-white-color has-text-color has-background" style="background-color:#1fb125;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"copyright-text","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group copyright-text"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|Background"}}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"Background","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family"><a rel="noreferrer noopener" href="https://www.ovationthemes.com/wordpress/free-organic-wordpress-theme/" target="_blank"><?php esc_html_e('Organic Green Blocks WordPress Theme','organic-green-blocks'); ?></a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|Background"}}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"Background","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family"><?php esc_html_e('Proudly powered by ','organic-green-blocks'); ?><a rel="noreferrer noopener" href="https://www.ovationthemes.com/" target="_blank"><?php esc_html_e('Ovation Themes','organic-green-blocks'); ?></a> <?php esc_html_e('and','organic-green-blocks'); ?> <a href="https://wordpress.org"><?php esc_html_e('WordPress','organic-green-blocks'); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"scroll-top"} -->
<p class="scroll-top"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->