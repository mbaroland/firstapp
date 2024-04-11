<?php
/**
 * Title: Header
 * Slug: organic-green-blocks/header
 * Categories: organic-green-blocks, header
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"20px","bottom":"30px","left":"20px"}},"color":{"background":"#f4f9ff"}},"className":"upper-header","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group upper-header has-background" style="background-color:#f4f9ff;padding-top:30px;padding-right:20px;padding-bottom:30px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"wow bounceInDown delay-1000"} -->
<div class="wp-block-columns wow bounceInDown delay-1000" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:30%"><!-- wp:group {"textColor":"primary","className":"logodiv","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group logodiv has-primary-color has-text-color"><!-- wp:site-logo {"width":43,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize"}},"textColor":"heading","fontFamily":"source_sans_3"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"contact-column"} -->
<div class="wp-block-column is-vertically-aligned-center contact-column" style="flex-basis:25%"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"top":[],"right":{"color":"#ececec","width":"2px"},"bottom":[]}},"className":"contact-column-inner"} -->
<div class="wp-block-columns are-vertically-aligned-center contact-column-inner" style="border-right-color:#ececec;border-right-width:2px"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"img-div"} -->
<div class="wp-block-column is-vertically-aligned-center img-div" style="flex-basis:30%"><!-- wp:image {"align":"right","id":18,"width":"38px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignright size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/mail.png'); ?>" alt="" class="wp-image-18" style="width:38px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","className":"contact-text","fontSize":"medium","fontFamily":"source_sans_3"} -->
<p class="contact-text has-heading-color has-text-color has-link-color has-source-sans-3-font-family has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Email Address','organic-green-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"contact-info","fontSize":"small","fontFamily":"source_sans_3"} -->
<p class="contact-info has-source-sans-3-font-family has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('support@example.com','organic-green-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"contact-column"} -->
<div class="wp-block-column is-vertically-aligned-center contact-column" style="flex-basis:25%"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"right":{"color":"#ececec","width":"2px"},"top":[],"bottom":[],"left":[]}},"className":"contact-column-inner"} -->
<div class="wp-block-columns are-vertically-aligned-center contact-column-inner" style="border-right-color:#ececec;border-right-width:2px"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"img-div"} -->
<div class="wp-block-column is-vertically-aligned-center img-div" style="flex-basis:30%"><!-- wp:image {"align":"right","id":19,"width":"38px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image alignright size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png'); ?>" alt="" class="wp-image-19" style="width:38px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","className":"contact-text","fontSize":"small","fontFamily":"source_sans_3"} -->
<p class="contact-text has-heading-color has-text-color has-link-color has-source-sans-3-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('24/7 In Touch','organic-green-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"contact-info","fontSize":"small","fontFamily":"source_sans_3"} -->
<p class="contact-info has-source-sans-3-font-family has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('000012321545648','organic-green-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"social-block"} -->
<div class="wp-block-column is-vertically-aligned-center social-block" style="flex-basis:20%"><!-- wp:social-links {"size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex"}} -->
<ul class="wp-block-social-links aligncenter has-normal-icon-size is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]}},"className":"menu-header","layout":{"type":"constrained","contentSize":"60%"}} -->
<div class="wp-block-group menu-header" style="border-top-style:none;border-top-width:0px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:columns {"verticalAlignment":"center","style":{"border":{"radius":"30px"}},"backgroundColor":"base","className":"inner-menu-header"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-menu-header has-base-background-color has-background" style="border-radius:30px"><!-- wp:column {"verticalAlignment":"center","width":"80%","style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}},"className":"wow rubberBand nav-block"} -->
<div class="wp-block-column is-vertically-aligned-center wow rubberBand nav-block" style="padding-left:var(--wp--preset--spacing--40);flex-basis:80%"><!-- wp:navigation {"customTextColor":"#222222","overlayBackgroundColor":"primary","overlayTextColor":"white","layout":{"type":"flex","justifyContent":"left"},"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Quality","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"categories","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Top Brands","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Testimonial","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"btn-block"} -->
<div class="wp-block-column is-vertically-aligned-center btn-block" style="flex-basis:20%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"extra-small","fontFamily":"source_sans_3"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-extra-small-font-size"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Get A Quote','organic-green-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->