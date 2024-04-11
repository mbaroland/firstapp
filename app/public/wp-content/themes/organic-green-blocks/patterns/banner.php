<?php
/**
 * Title: Banner
 * Slug: organic-green-blocks/banner
 * Categories: organic-green-blocks, banner
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"bannerimage","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":53,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":700,"minHeightUnit":"px","isDark":false,"align":"wide","className":"banner-image-cover","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-cover alignwide is-light banner-image-cover" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-53" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"55%","className":"wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-center wow zoomIn" style="flex-basis:55%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"textColor":"heading","fontSize":"regular","fontFamily":"source_sans_3"} -->
<h6 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-link-color has-source-sans-3-font-family has-regular-font-size" style="font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Its All Organic &amp; Natural Here','organic-green-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"300","fontSize":"72px","textTransform":"capitalize"}}} -->
<h1 class="wp-block-heading" style="font-size:72px;font-style:normal;font-weight:300;text-transform:capitalize"><?php esc_html_e('organic products','organic-green-blocks'); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontSize":"60px","textTransform":"lowercase"}},"className":"wp-block-heading has-text-align-left has-source_sans_3-font-family","fontFamily":"source_sans_3"} -->
<h2 class="wp-block-heading has-text-align-left has-source_sans_3-font-family has-source-sans-3-font-family" style="font-size:60px;text-transform:lowercase"><?php esc_html_e('for better world','organic-green-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"heading","textColor":"white","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"},"border":{"radius":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"is-style-fill has-source_sans_3-font-family","fontFamily":"source_sans_3"} -->
<div class="wp-block-button is-style-fill has-source_sans_3-font-family has-source-sans-3-font-family" style="font-style:normal;font-weight:700;text-transform:capitalize"><a class="wp-block-button__link has-white-color has-heading-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:30px"><?php esc_html_e('read more','organic-green-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"service-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group service-box"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"service-column wow slideInLeft"} -->
<div class="wp-block-column is-vertically-aligned-center service-column wow slideInLeft has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"align":"center","id":92,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/payment.png'); ?>" alt="" class="wp-image-92" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"fontSize":"regular","fontFamily":"source_sans_3"} -->
<h6 class="wp-block-heading has-source-sans-3-font-family has-regular-font-size" style="font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Secure Payment','organic-green-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontFamily":"source_sans_3"} -->
<p class="has-source-sans-3-font-family"><?php esc_html_e('Dolor sit amet,consectetur adipisicing','organic-green-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"service-column wow slideInDown"} -->
<div class="wp-block-column is-vertically-aligned-center service-column wow slideInDown has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"align":"center","id":94,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/original.png'); ?>" alt="" class="wp-image-94" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"fontSize":"regular","fontFamily":"source_sans_3"} -->
<h6 class="wp-block-heading has-source-sans-3-font-family has-regular-font-size" style="font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Original Products','organic-green-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontFamily":"source_sans_3"} -->
<p class="has-source-sans-3-font-family"><?php esc_html_e('Dolor sit amet,consectetur adipisicing','organic-green-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"white","className":"service-column wow slideInRight"} -->
<div class="wp-block-column is-vertically-aligned-center service-column wow slideInRight has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:image {"align":"center","id":95,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/curated.png'); ?>" alt="" class="wp-image-95" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:heading {"level":6,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"fontSize":"regular","fontFamily":"source_sans_3"} -->
<h6 class="wp-block-heading has-source-sans-3-font-family has-regular-font-size" style="font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Curated Products','organic-green-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontFamily":"source_sans_3"} -->
<p class="has-source-sans-3-font-family"><?php esc_html_e('Dolor sit amet,consectetur adipisicing','organic-green-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->