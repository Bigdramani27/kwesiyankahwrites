<?php
session_start();
require('../controllers/customer_controller.php');
$customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "0";
$emails = isset($_SESSION['email']) ? $_SESSION['email'] : "";
if ($emails == true) {
  header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <title>Prof Kwesi Yankah Book Store</title>
  <meta name="robots" content="max-image-preview:large, noindex, follow" />
  <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />

  <link
    rel="stylesheet"
    id="dashicons-css"
    href="../wp-includes/css/dashicons.mind1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-widgets-style-css"
    href="../wp-content/plugins/header-footer-elementor/inc/widgets-css/frontendb95e.css?ver=2.0.3"
    media="all" />

  <link
    rel="stylesheet"
    id="wp-block-library-css"
    href="../wp-includes/css/dist/block-library/style.mind1c0.css?ver=6.7.2"
    media="all" />

  <link
    rel="stylesheet"
    id="bookory-gutenberg-blocks-css"
    href="../wp-content/themes/bookory/assets/css/base/gutenberg-blocks3601.css?ver=2.2.0"
    media="all" />

  <link
    rel="stylesheet"
    id="contact-form-7-css"
    href="../wp-content/plugins/contact-form-7/includes/css/styles37ad.css?ver=6.0.1"
    media="all" />
  <link
    rel="stylesheet"
    id="mas-wc-brands-style-css"
    href="../wp-content/plugins/mas-woocommerce-brands/assets/css/stylef488.css?ver=1.1.0"
    media="all" />
  <link
    rel="stylesheet"
    id="-css"
    href="../wp-content/plugins/opal-demo/styled1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="select2-css"
    href="../wp-content/plugins/woocommerce/assets/css/select20c46.css?ver=9.5.1"
    media="all" />

  <link
    rel="stylesheet"
    id="hfe-style-css"
    href="../wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementorb95e.css?ver=2.0.3"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-icons-css"
    href="../wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min705c.css?ver=5.34.0"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-frontend-css"
    href="../wp-content/uploads/elementor/css/custom-frontend.min2420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-4-css"
    href="../wp-content/uploads/elementor/css/post-42420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="font-awesome-5-all-css"
    href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="font-awesome-4-shim-css"
    href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-125-css"
    href="../wp-content/uploads/elementor/css/post-1255db7.css?ver=1742270151"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-329-css"
    href="../wp-content/uploads/elementor/css/post-3295db7.css?ver=1742270151"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-751-css"
    href="../wp-content/uploads/elementor/css/post-7515db7.css?ver=1742270151"
    media="all" />
  <link
    rel="stylesheet"
    id="woo-variation-swatches-css"
    href="../wp-content/plugins/woo-variation-swatches/assets/css/frontend.min63ce.css?ver=1732076616"
    media="all" />

  <link
    rel="stylesheet"
    id="perfect-scrollbar-css"
    href="../wp-content/plugins/woo-smart-wishlist/assets/libs/perfect-scrollbar/css/perfect-scrollbar.mind1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="perfect-scrollbar-wpc-css"
    href="../wp-content/plugins/woo-smart-wishlist/assets/libs/perfect-scrollbar/css/custom-themed1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="woosw-icons-css"
    href="../wp-content/plugins/woo-smart-wishlist/assets/css/icons1845.css?ver=4.9.6"
    media="all" />
  <link
    rel="stylesheet"
    id="woosw-frontend-css"
    href="../wp-content/plugins/woo-smart-wishlist/assets/css/frontend1845.css?ver=4.9.6"
    media="all" />

  <link
    rel="stylesheet"
    id="bookory-style-css"
    href="../wp-content/themes/bookory/style3601.css?ver=2.2.0"
    media="all" />

  <link
    rel="stylesheet"
    id="slick-css"
    href="../wp-content/themes/bookory/assets/css/base/slick3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="slick-theme-css"
    href="../wp-content/themes/bookory/assets/css/base/slick-theme3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-fonts-css"
    href="http://fonts.googleapis.com/css?family=Sora:300,400,500,600,700&amp;subset=latin%2Clatin-ext&amp;display=swap"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-dokan-style-css"
    href="../wp-content/themes/bookory/assets/css/dokan/dokan3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-3100-css"
    href="../wp-content/uploads/elementor/css/post-31005db7.css?ver=1742270151"
    media="all" />
  <link
    rel="stylesheet"
    id="magnific-popup-css"
    href="../wp-content/themes/bookory/assets/css/libs/magnific-popup3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="woosq-feather-css"
    href="../wp-content/plugins/woo-smart-quick-view/assets/libs/feather/featherd1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="woosq-frontend-css"
    href="../wp-content/plugins/woo-smart-quick-view/assets/css/frontendeda1.css?ver=4.1.4"
    media="all" />
  <link
    rel="stylesheet"
    id="dokan-modal-css"
    href="../wp-content/plugins/dokan-lite/assets/vendors/izimodal/iziModal.mina71e.css?ver=1732076614"
    media="all" />
  <link
    rel="stylesheet"
    id="dokan-select2-css-css"
    href="../wp-content/plugins/dokan-lite/assets/vendors/select2/select29dd7.css?ver=3.14.3"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-elementor-css"
    href="../wp-content/themes/bookory/assets/css/base/elementor3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-icons-list-css"
    href="../wp-content/plugins/elementor/assets/css/widget-icon-list.min44b4.css?ver=3.24.3"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-social-icons-css"
    href="../wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css?ver=3.24.0"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-social-share-icons-brands-css"
    href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-social-share-icons-fontawesome-css"
    href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-nav-menu-icons-css"
    href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/solid52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-woocommerce-style-css"
    href="../wp-content/themes/bookory/assets/css/woocommerce/woocommerce3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-child-style-css"
    href="../wp-content/themes/demo-child/style8a54.css?ver=1.0.0"
    media="all" />
  <link
    rel="stylesheet"
    id="google-fonts-1-css"
    href="https://fonts.googleapis.com/css?family=Sora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-icons-shared-0-css"
    href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-icons-fa-brands-css"
    href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-icons-fa-regular-css"
    href="../wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3"
    media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

  <script
    src="../wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1"
    id="jquery-core-js"></script>
  <script
    src="../wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
    id="jquery-migrate-js"></script>

  <script
    src="../wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6"
    id="wp-hooks-js"></script>
  <script
    src="../wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6"
    id="wp-i18n-js"></script>

  <script
    src="../wp-content/plugins/dokan-lite/assets/vendors/izimodal/iziModal.min9dd7.js?ver=3.14.3"
    id="dokan-modal-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/vendors/sweetalert2/sweetalert2.all.mina71e.js?ver=1732076614"
    id="dokan-sweetalert2-js"></script>
  <script
    src="../wp-includes/js/dist/vendor/moment.minf799.js?ver=2.30.1"
    id="moment-js"></script>

  <script
    src="../wp-content/plugins/dokan-lite/assets/js/helpera71e.js?ver=1732076614"
    id="dokan-util-helper-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min22b2.js?ver=2.7.0-wc.9.5.1"
    id="jquery-blockui-js"
    data-wp-strategy="defer"></script>

  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min0c46.js?ver=9.5.1"
    id="wc-add-to-cart-js"
    defer
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.minc9d1.js?ver=1.0.9-wc.9.5.1"
    id="selectWoo-js"
    defer
    data-wp-strategy="defer"></script>

  <script
    src="../wp-includes/js/zxcvbn-async.min5152.js?ver=1.0"
    id="zxcvbn-async-js"></script>

  <script
    src="../wp-admin/js/password-strength-meter.mind1c0.js?ver=6.7.2"
    id="password-strength-meter-js"></script>

  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min0c46.js?ver=9.5.1"
    id="wc-password-strength-meter-js"
    defer
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/account-i18n.min0c46.js?ver=9.5.1"
    id="wc-account-i18n-js"
    defer
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.mineaec.js?ver=2.1.4-wc.9.5.1"
    id="js-cookie-js"
    data-wp-strategy="defer"></script>

  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min0c46.js?ver=9.5.1"
    id="woocommerce-js"
    defer
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min42e3.js?ver=3.26.0"
    id="font-awesome-4-shim-js"></script>
  <script
    src="../wp-includes/js/underscore.min3ab8.js?ver=1.13.7"
    id="underscore-js"></script>

  <script
    src="../wp-includes/js/wp-util.mind1c0.js?ver=6.7.2"
    id="wp-util-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/vendor/jarallaxd1c0.js?ver=6.7.2"
    id="jarallax-js"></script>

  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/country-select.min0c46.js?ver=9.5.1"
    id="wc-country-select-js"
    data-wp-strategy="defer"></script>
  <link rel="https://api.w.org/" href="../wp-json/index.php" />
  <link
    rel="alternate"
    title="JSON"
    type="application/json"
    href="../wp-json/wp/v2/pages/10.json" />
  <link
    rel="EditURI"
    type="application/rsd+xml"
    title="RSD"
    href="../xmlrpc0db0.html?rsd" />
  <meta name="generator" content="WordPress 6.7.2" />
  <meta name="generator" content="WooCommerce 9.5.1" />
  <link rel="canonical" href="index.php" />
  <link rel="shortlink" href="../index64b4.html?p=10" />
  <link
    rel="alternate"
    title="oEmbed (JSON)"
    type="application/json+oembed"
    href="../wp-json/oembed/1.0/embed6ddd.json?url=https%3A%2F%2Fdemo2.pavothemes.com%2Fbookory%2Fmy-account%2F" />
  <link
    rel="alternate"
    title="oEmbed (XML)"
    type="text/xml+oembed"
    href="../wp-json/oembed/1.0/embedca55?url=https%3A%2F%2Fdemo2.pavothemes.com%2Fbookory%2Fmy-account%2F&amp;format=xml" />
</head>

<body
  class="page-template-default page page-id-10 wp-custom-logo wp-embed-responsive theme-bookory woocommerce-account woocommerce-page woocommerce-no-js ehf-header ehf-footer ehf-template-bookory ehf-stylesheet-demo-child woo-variation-swatches wvs-behavior-blur wvs-theme-demo-child wvs-show-label wvs-tooltip group-blog woocommerce-active product-block-style-1 elementor-default elementor-kit-4 dokan-theme-bookory">
  <div id="page" class="hfeed site">
    <header>
      <p class="main-title bhf-hidden" itemprop="headline">
        <a href="index.php" title="Bookory" rel="home">Bookory</a>
      </p>
      <div
        data-elementor-type="wp-post"
        data-elementor-id="125"
        class="elementor elementor-125">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-f87b6fa elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
          data-id="f87b6fa"
          data-element_type="section"
          data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cb137cb"
              data-id="cb137cb"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-c24ba3d elementor-widget__width-auto button-style-bookory-yes elementor-widget elementor-widget-button"
                  data-id="c24ba3d"
                  data-element_type="widget"
                  data-widget_type="button.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
                      <a
                        class="elementor-button elementor-button-link elementor-size-sm"
                        href="../contact/index.php">
                        <span class="elementor-button-content-wrapper">
                          <span class="elementor-button-text">Contact Me @</span>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-7ab420c elementor-widget__width-auto elementor-hidden-mobile elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                  data-id="7ab420c"
                  data-element_type="widget"
                  data-widget_type="icon-list.default">
                  <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                      <li class="elementor-icon-list-item">
                        <a href="#">
                          <span class="elementor-icon-list-icon">
                            <i
                              aria-hidden="true"
                              class="bookory-icon- bookory-icon-phone"></i>
                          </span>
                          <span class="elementor-icon-list-text">+233 26 473 8739</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-9ca9792 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
          data-id="9ca9792"
          data-element_type="section"
          data-settings='{"stretch_section":"section-stretched"}'>
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6cbd2d5"
              data-id="6cbd2d5"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-5bd5408 elementor-widget__width-auto elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra bookory-canvas-menu-layout-2 elementor-widget elementor-widget-bookory-menu-canvas"
                  data-id="5bd5408"
                  data-element_type="widget"
                  data-widget_type="bookory-menu-canvas.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-canvas-menu-wrapper">
                      <a href="#" class="menu-mobile-nav-button">
                        <span class="toggle-text screen-reader-text">Menu</span>
                        <div class="bookory-icon">
                          <span class="icon-1"></span>
                          <span class="icon-2"></span>
                          <span class="icon-3"></span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-c3a2fd1 elementor-widget__width-auto elementor-widget elementor-widget-site-logo"
                  data-id="c3a2fd1"
                  data-element_type="widget"
                  data-settings='{"width":{"unit":"px","size":150,"sizes":[]},"width_tablet":{"unit":"px","size":"","sizes":[]},"width_mobile":{"unit":"px","size":"","sizes":[]},"align":"center","width_laptop":{"unit":"px","size":"","sizes":[]},"width_tablet_extra":{"unit":"px","size":"","sizes":[]},"width_mobile_extra":{"unit":"px","size":"","sizes":[]},"space":{"unit":"%","size":"","sizes":[]},"space_laptop":{"unit":"px","size":"","sizes":[]},"space_tablet_extra":{"unit":"px","size":"","sizes":[]},"space_tablet":{"unit":"%","size":"","sizes":[]},"space_mobile_extra":{"unit":"px","size":"","sizes":[]},"space_mobile":{"unit":"%","size":"","sizes":[]},"image_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_space":{"unit":"px","size":0,"sizes":[]},"caption_space_laptop":{"unit":"px","size":"","sizes":[]},"caption_space_tablet_extra":{"unit":"px","size":"","sizes":[]},"caption_space_tablet":{"unit":"px","size":"","sizes":[]},"caption_space_mobile_extra":{"unit":"px","size":"","sizes":[]},"caption_space_mobile":{"unit":"px","size":"","sizes":[]}}'
                  data-widget_type="site-logo.default">
                  <div class="elementor-widget-container">
                    <div class="hfe-site-logo">
                      <a
                        data-elementor-open-lightbox=""
                        class="elementor-clickable"
                        href="../index.php">
                        <div class="hfe-site-logo-set">
                          <div class="hfe-site-logo-container">
                            <img
                              class="hfe-site-logo-img elementor-animation-"
                              src="../wp-content/uploads/images/logo.png"
                              style="width: 150px; height: 130px"
                              alt="default-logo" />
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="elementor-element elementor-element-060a716 elementor-widget__width-auto elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-widget elementor-widget-bookory-header-group"
                  data-id="060a716"
                  data-element_type="widget"
                  data-widget_type="bookory-header-group.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-header-group-wrapper">
                      <div class="header-group-action">
                        <div class="site-header-cart menu">
                          <?php if ($customer_id != 0) {  ?>
                            <a
                              class="cart-contents"
                              href="../cart/index.php"
                              title="View your shopping cart">
                              <?php if ($cart != 0) { ?> <span class="count"><?php echo $cart ?></span> <?php } ?>
                            </a>
                          <?php } else {  ?>
                            <a
                              class="cart-contents"
                              href="../my-account/index.php"
                              title="View your shopping cart">
                            </a>
                          <?php  } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e595b4c elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile"
              data-id="e595b4c"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <section
                  class="elementor-section elementor-inner-section elementor-element elementor-element-fe34fca elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                  data-id="fe34fca"
                  data-element_type="section">
                  <div class="elementor-container elementor-column-gap-no">
                    <div
                      class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5dbb3b4 elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile"
                      data-id="5dbb3b4"
                      data-element_type="column">
                      <div
                        class="elementor-widget-wrap elementor-element-populated">
                        <div
                          class="elementor-element elementor-element-e643533 search-form-hide-search-yes elementor-widget__width-initial elementor-widget-laptop__width-initial elementor-widget-tablet_extra__width-initial elementor-widget elementor-widget-bookory-search"
                          data-id="e643533"
                          data-element_type="widget"
                          data-widget_type="bookory-search.default">
                          <div class="elementor-widget-container">
                            <div class="site-search ajax-search">
                              <div
                                class="widget woocommerce widget_product_search">
                                <div class="ajax-search-result d-none"></div>
                                <form
                                  role="search"
                                  method="get"
                                  class="woocommerce-product-search"
                                  action="">
                                  <label
                                    class="screen-reader-text"
                                    for="woocommerce-product-search-field-1">Search for:</label>
                                  <input
                                    type="search"
                                    id="woocommerce-product-search-field-1"
                                    class="search-field"
                                    placeholder="Search products&hellip;"
                                    autocomplete="off"
                                    value=""
                                    name="s" />
                                  <button type="submit" value="Search">
                                    Search
                                  </button>
                                  <input
                                    type="hidden"
                                    name="post_type"
                                    value="product" />
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ef34409"
                      data-id="ef34409"
                      data-element_type="column">
                      <div
                        class="elementor-widget-wrap elementor-element-populated">
                        <div
                          class="elementor-element elementor-element-8c1b3e3 elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile elementor-widget elementor-widget-bookory-header-group"
                          data-id="8c1b3e3"
                          data-element_type="widget"
                          data-widget_type="bookory-header-group.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-header-group-wrapper">
                              <div class="header-group-action">
                                <div class="site-header-wishlist">
                                  <a
                                    class="header-wishlist"
                                    href="index.php">
                                    <i class="bookory-icon-account"></i>
                                  </a>
                                </div>

                                <div class="site-header-wishlist">
                                  <a
                                    class="header-wishlist"
                                    href="index.php">
                                    <i class="bookory-icon-heart-1"></i>
                                  </a>
                                </div>

                                <div class="site-header-cart menu">
                                  <a
                                    class="cart-contents"
                                    href="index.php"
                                    title="View your shopping cart">
                                    <span
                                      class="woocommerce-Price-amount amount"><bdi><span
                                          class="woocommerce-Price-currencySymbol">₵</span>0.00</bdi></span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-ae4fcde elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
          data-id="ae4fcde"
          data-element_type="section"
          data-settings='{"stretch_section":"section-stretched"}'>
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6132e73"
              data-id="6132e73"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-0041078 elementor-widget elementor-widget-bookory-nav-menu"
                  data-id="0041078"
                  data-element_type="widget"
                  data-widget_type="bookory-nav-menu.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-nav-menu-wrapper">
                      <nav
                        class="main-navigation"
                        role="navigation"
                        aria-label="Primary Navigation">
                        <div class="primary-navigation">
                          <ul id="menu-1-0041078" class="menu">
                            <li
                              id="menu-item-2842"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="../index.php"><span class="menu-title">Home</span></a>
                            </li>
                            <li
                              id="menu-item-2842"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="../shop/index.php"><span class="menu-title">Shop</span></a>
                            </li>
                            <li
                              id="menu-item-1191"
                              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1191">
                              <a href="#"><span class="menu-title">Categories</span></a>
                              <ul class="sub-menu">
                                <li
                                  id="menu-item-5751"
                                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5751">
                                  <a href="../categories/index.php?category=<?php echo urlencode('Sole-Authored Books'); ?>"><span class="menu-title">Sole-Authored Books</span></a>
                                </li>
                                <li
                                  id="menu-item-6157"
                                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6157">
                                  <a
                                    href="../categories/index.php?category=<?php echo urlencode('Monographs'); ?>"><span class="menu-title">Monographs</span></a>
                                </li>
                                <li
                                  id="menu-item-3154"
                                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3154">
                                  <a href="../categories/index.php?category=<?php echo urlencode('Edited Volumes'); ?>"><span class="menu-title">Edited Volumes</span></a>
                                </li>
                                <li
                                  id="menu-item-3156"
                                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
                                  <a href="../categories/index.php?category=<?php echo urlencode('On the Author’s Work'); ?>"><span class="menu-title">On the Author’s Work</span></a>
                                </li>
                                <li
                                  id="menu-item-6218"
                                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218">
                                  <a href="../categories/index.php?category=<?php echo urlencode('Book Chapters'); ?>"><span class="menu-title">Book Chapters
                                    </span></a>
                                </li>
                                <li
                                  id="menu-item-6218"
                                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218">
                                  <a href="../categories/index.php?category=<?php echo urlencode('Journal Articles'); ?>"><span class="menu-title">Journal Articles
                                    </span></a>
                                </li>
                              </ul>
                            </li>
                            <li
                              id="menu-item-2842"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="../author/index.php"><span class="menu-title">Author</span></a>
                            </li>
                            <li
                              id="menu-item-2842"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="../faq/index.php"><span class="menu-title">FAQ</span></a>
                            </li>
                            <li
                              id="menu-item-3150"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
                              <a href="../contact/index.php"><span class="menu-title">Contact</span></a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </header>

    <div class="breadcrumb-wrap">
      <div
        data-elementor-type="wp-post"
        data-elementor-id="3100"
        class="elementor elementor-3100">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-1ece023 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
          data-id="1ece023"
          data-element_type="section"
          data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9ef6efd"
              data-id="9ef6efd"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-59103fb hidden-bookory-title-single-yes elementor-widget elementor-widget-bookory-woocommerce-breadcrumb"
                  data-id="59103fb"
                  data-element_type="widget"
                  data-widget_type="bookory-woocommerce-breadcrumb.default">
                  <div class="elementor-widget-container">
                    <div class="bookory-woocommerce-title">My account</div>
                    <nav class="woocommerce-breadcrumb">
                      <a href="../index.php">Home</a><i class="bookory-icon-right-arrow"></i>My account
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <div id="content" class="site-content" tabindex="-1">
      <div class="col-full">
        <div class="woocommerce"></div>
        <div id="primary">
          <main id="main" class="site-main" role="main">
            <article
              id="post-10"
              class="post-10 page type-page status-publish hentry">
              <div class="entry-content">
                <div class="woocommerce">
                  <div class="woocommerce-notices-wrapper"></div>

                  <div class="u-columns col2-set" id="customer_login">
                    <div class="u-column1 login-form-col col-1">
                      <form
                        class="woocommerce-form woocommerce-form-login login"
                        id="login">
                        <div class="woocommerce-form-login-wrap">
                          <h2 class="login-form-title">Login</h2>
                          <p
                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>Email &nbsp;<span class="required">*</span></label>
                            <input
                              type="email"
                              class="woocommerce-Input woocommerce-Input--text input-text"
                              name="email"
                              id="username"
                              placeholder="Enter your email address..." />
                          </p>
                          <p
                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>Password &nbsp;<span class="required">*</span><i class="fa fa-eye" style=' font-size:15px' id="togglePasswordLogin"></i></label>
                            <input
                              class="woocommerce-Input woocommerce-Input--text input-text"
                              type="password"
                              name="lpassword"
                              id="lpassword"
                              autocomplete="current-password"
                              placeholder="Enter your password..." />
                          </p>

                          <p class="woocommerce-LostPassword lost_password">
                            <a href="lost-password/index.php">Lost your password?</a>
                          </p>
                          <button
                            type="submit"
                            class="woocommerce-button button woocommerce-form-login__submit"
                            name="login"
                            value="Log in">
                            Log in
                          </button>
                        </div>
                      </form>
                    </div>

                    <div class="u-column2 col-2">
                      <form id="register" class="woocommerce-form woocommerce-form-register register">
                        <h2 class="register-from-title">Register</h2>

                        <p
                          class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label>First Name &nbsp;<span class="required">*</span></label>
                          <input
                            type="text"
                            class="woocommerce-Input woocommerce-Input--text input-text"
                            name="fname"
                            placeholder="Enter your first name..."
                            required />
                        </p>
                        <p
                          class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label>Last Name &nbsp;<span class="required">*</span></label>
                          <input
                            type="text"
                            class="woocommerce-Input woocommerce-Input--text input-text"
                            name="lname"
                            placeholder="Enter your last name..."
                            required />
                        </p>
                        <p
                          class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label>Email address &nbsp;<span class="required">*</span></label>
                          <input
                            type="email"
                            class="woocommerce-Input woocommerce-Input--text input-text"
                            name="email"
                            placeholder="Enter your email..."
                            required />
                        </p>
                        <p
                          class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label>Password &nbsp;<span class="required">*</span> <i class="fa fa-eye" style=' font-size:15px' id="togglePassword"></i></label>
                          <input
                            type="password"
                            class="woocommerce-Input woocommerce-Input--text input-text"
                            name="password"
                            id="password"
                            placeholder="Enter your password..."
                            required />
                        <div id="password-requirements" class="sign__group sign__group--row article__content" style="display: none;">
                          <ul>
                            <li id="length">At least 8 characters</li>
                            <li id="capital">At least one uppercase letter (from A-Z)</li>
                            <li id="small">At least one lowercase letter (from a-z)</li>
                            <li id="number">At least one number (0-9)</li>
                            <li id="special">At least one symbol or special character</li>
                          </ul>
                        </div>
                        </p>
                        <p
                          class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                          <label>Confirm Password &nbsp;<span class="required">*</span><i class="fa fa-eye" style='font-size:15px' id="togglePasswords"></i></label>
                          <input
                            type="password"
                            class="woocommerce-Input woocommerce-Input--text input-text"
                            name="cpassword"
                            id="cpassword"
                            placeholder="Enter your password..."
                            required />
                        </p>

                        <p class="woocommerce-FormRow form-row">
                          <button
                            type="submit"
                            class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
                            name="register">
                            Register
                          </button>
                        </p>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- .entry-content -->
            </article>
            <!-- #post-## -->
          </main>
          <!-- #main -->
        </div>
        <!-- #primary -->
      </div>
      <!-- .col-full -->
    </div>
    <!-- #content -->

    <div class="footer-width-fixer">
      <div
        data-elementor-type="wp-post"
        data-elementor-id="751"
        class="elementor elementor-751">
        <div
          class="elementor-section elementor-top-section elementor-element elementor-element-5c1c1fa elementor-section-content-middle elementor-section-stretched elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra elementor-section-boxed elementor-section-height-default elementor-section-height-default"
          data-id="5c1c1fa"
          data-element_type="section"
          data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0feafc9"
              data-id="0feafc9"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-16cf748 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                  data-id="16cf748"
                  data-element_type="widget"
                  data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-icon-box-wrapper">
                      <div class="elementor-icon-box-icon">
                        <a
                          href="../shop/index.php"
                          class="elementor-icon elementor-animation-"
                          tabindex="-1">
                          <i
                            aria-hidden="true"
                            class="bookory-icon- bookory-icon-home"></i>
                        </a>
                      </div>

                      <div class="elementor-icon-box-content">
                        <h3 class="elementor-icon-box-title">
                          <a href="../shop/index.php"> Shop </a>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9d90670"
              data-id="9d90670"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-62e085d elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                  data-id="62e085d"
                  data-element_type="widget"
                  data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-icon-box-wrapper">
                      <div class="elementor-icon-box-icon">
                        <a
                          href="index.php"
                          class="elementor-icon elementor-animation-"
                          tabindex="-1">
                          <i
                            aria-hidden="true"
                            class="bookory-icon- bookory-icon-account"></i>
                        </a>
                      </div>

                      <div class="elementor-icon-box-content">
                        <h3 class="elementor-icon-box-title">
                          <a href="index.php"> Account </a>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6ed0632"
              data-id="6ed0632"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-da94cbb elementor-widget elementor-widget-bookory-search"
                  data-id="da94cbb"
                  data-element_type="widget"
                  data-widget_type="bookory-search.default">
                  <div class="elementor-widget-container">
                    <div class="site-header-search">
                      <a href="#" class="button-search-popup">
                        <i class="bookory-icon-search"></i>
                        <span class="content">Search</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-336d314"
              data-id="336d314"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-2b02f7c elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                  data-id="2b02f7c"
                  data-element_type="widget"
                  data-widget_type="icon-box.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-icon-box-wrapper">
                      <div class="elementor-icon-box-icon">
                        <a
                          href="../wishlist/index.php"
                          class="elementor-icon elementor-animation-"
                          tabindex="-1">
                          <i aria-hidden="true" class="far fa-heart"></i>
                        </a>
                      </div>

                      <div class="elementor-icon-box-content">
                        <h3 class="elementor-icon-box-title">
                          <a href="../wishlist/index.php"> Wishlist </a>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="footer-width-fixer">
        <div
          data-elementor-type="wp-post"
          data-elementor-id="329"
          class="elementor elementor-329">
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-8c67d70 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="8c67d70"
            data-element_type="section"
            data-settings='{"background_background":"classic"}'>
            <div class="elementor-container elementor-column-gap-no">
              <div
                class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-09338ca"
                data-id="09338ca"
                data-element_type="column">
                <div
                  class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-dd4fd10 elementor-widget elementor-widget-site-logo"
                    data-id="dd4fd10"
                    data-element_type="widget"
                    data-settings='{"align":"center","width":{"unit":"%","size":"","sizes":[]},"width_laptop":{"unit":"px","size":"","sizes":[]},"width_tablet_extra":{"unit":"px","size":"","sizes":[]},"width_tablet":{"unit":"%","size":"","sizes":[]},"width_mobile_extra":{"unit":"px","size":"","sizes":[]},"width_mobile":{"unit":"%","size":"","sizes":[]},"space":{"unit":"%","size":"","sizes":[]},"space_laptop":{"unit":"px","size":"","sizes":[]},"space_tablet_extra":{"unit":"px","size":"","sizes":[]},"space_tablet":{"unit":"%","size":"","sizes":[]},"space_mobile_extra":{"unit":"px","size":"","sizes":[]},"space_mobile":{"unit":"%","size":"","sizes":[]},"image_border_radius":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"image_border_radius_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_laptop":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_tablet_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_tablet":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_mobile_extra":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_padding_mobile":{"unit":"px","top":"","right":"","bottom":"","left":"","isLinked":true},"caption_space":{"unit":"px","size":0,"sizes":[]},"caption_space_laptop":{"unit":"px","size":"","sizes":[]},"caption_space_tablet_extra":{"unit":"px","size":"","sizes":[]},"caption_space_tablet":{"unit":"px","size":"","sizes":[]},"caption_space_mobile_extra":{"unit":"px","size":"","sizes":[]},"caption_space_mobile":{"unit":"px","size":"","sizes":[]}}'
                    data-widget_type="site-logo.default">
                    <div class="elementor-widget-container">
                      <div class="hfe-site-logo">
                        <a
                          data-elementor-open-lightbox=""
                          class="elementor-clickable"
                          href="index.php">
                          <div class="hfe-site-logo-set">
                            <div class="hfe-site-logo-container">
                              <img
                                class="hfe-site-logo-img elementor-animation-"
                                src="../wp-content/uploads/images/logo1.png"
                                style="width: 180px; height: 150px"
                                alt="default-logo" />
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-597fc5e elementor-widget elementor-widget-text-editor"
                    data-id="597fc5e"
                    data-element_type="widget"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      1418 River Drive, Suite 35<br />
                      Cottonhall, CA 9622
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-1fc25d4"
                data-id="1fc25d4"
                data-element_type="column">
                <div
                  class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-eaa5480 elementor-widget elementor-widget-heading"
                    data-id="eaa5480"
                    data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2
                        class="elementor-heading-title elementor-size-default">
                        need help
                      </h2>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-7c7cb18 elementor-widget elementor-widget-heading"
                    data-id="7c7cb18"
                    data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2
                        class="elementor-heading-title elementor-size-default">
                        +(233) 264 738 739
                      </h2>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-2c606c0 elementor-widget elementor-widget-text-editor"
                    data-id="2c606c0"
                    data-element_type="widget"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p>
                        Monday – Friday: 8:00 AM-5:00 PM<br />Saturday: 9:00
                        AM– 5:00 PM
                      </p>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-296535d elementor-widget elementor-widget-heading"
                    data-id="296535d"
                    data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2
                        class="elementor-heading-title elementor-size-default">
                        <a href="">email: profkwesiyankah@gmail.com</a>
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-b9645f5"
                data-id="b9645f5"
                data-element_type="column">
                <div
                  class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-ce775ca elementor-widget elementor-widget-heading"
                    data-id="ce775ca"
                    data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2
                        class="elementor-heading-title elementor-size-default">
                        Useful Links
                      </h2>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-bd3910a elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                    data-id="bd3910a"
                    data-element_type="widget"
                    data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                      <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                          <a href="../index.php">
                            <span class="elementor-icon-list-text">Home</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../shop/index.php">
                            <span class="elementor-icon-list-text">Shop</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../author/index.php">
                            <span class="elementor-icon-list-text">
                              Author
                            </span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../faq/index.php">
                            <span class="elementor-icon-list-text">FAQ</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../contact/index.php">
                            <span class="elementor-icon-list-text">Contact</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../privacy.html">
                            <span class="elementor-icon-list-text">Privacy</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../terms.html">
                            <span class="elementor-icon-list-text">Terms and Conditions</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-7da7578"
                data-id="7da7578"
                data-element_type="column">
                <div
                  class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-a2cd9cb elementor-widget elementor-widget-heading"
                    data-id="a2cd9cb"
                    data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2
                        class="elementor-heading-title elementor-size-default">
                        Genre
                      </h2>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-e620e02 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                    data-id="e620e02"
                    data-element_type="widget"
                    data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                      <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                          <a
                            href="../genre/index.php?genre=<?php echo urlencode('Academics'); ?>">
                            <span class="elementor-icon-list-text">Academics</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a
                            href="../genre/index.php?genre=<?php echo urlencode('Media'); ?>">
                            <span class="elementor-icon-list-text">
                              Media</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../genre/index.php?genre=<?php echo urlencode('Edited Works'); ?>">
                            <span class="elementor-icon-list-text">Edited Works
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-c48775c"
                data-id="c48775c"
                data-element_type="column">
                <div
                  class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-dbb9ba4 elementor-widget elementor-widget-heading"
                    data-id="dbb9ba4"
                    data-element_type="widget"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2
                        class="elementor-heading-title elementor-size-default">
                        Categories
                      </h2>
                    </div>
                  </div>
                  <div
                    class="elementor-element elementor-element-8623ab1 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list">
                    <div class="elementor-widget-container">
                      <ul class="elementor-icon-list-items">
                        <li class="elementor-icon-list-item">
                          <a href="../categories/index.php?category=<?php echo urlencode('Sole-Authored Books'); ?>">
                            <span class="elementor-icon-list-text">Sole-Authored Books
                            </span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a
                            href="../categories/index.php?category=<?php echo urlencode('Monographs'); ?>">
                            <span class="elementor-icon-list-text">Monographs</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../categories/index.php?category=<?php echo urlencode('Edited Volumes'); ?>">
                            <span class="elementor-icon-list-text">Edited Volumes</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../categories/index.php?category=<?php echo urlencode('On the Author’s Work'); ?>">
                            <span class="elementor-icon-list-text">On the Author’s Work</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../categories/index.php?category=<?php echo urlencode('Book Chapters'); ?>">
                            <span class="elementor-icon-list-text">Book Chapters</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../categories/index.php?category=<?php echo urlencode('Journal Articles'); ?>">
                            <span class="elementor-icon-list-text">Journal Articles</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section
            class="elementor-section elementor-top-section elementor-element elementor-element-ec0b2e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="ec0b2e5"
            data-element_type="section"
            data-settings='{"background_background":"classic"}'>
            <div class="elementor-container elementor-column-gap-no">
              <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ee76e3e"
                data-id="ee76e3e"
                data-element_type="column">
                <div
                  class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-08d2019 elementor-widget elementor-widget-text-editor"
                    data-id="08d2019"
                    data-element_type="widget"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <div>
                        Copyright © 2025
                        <a style="color: var(--primary)" href="index.php">Kwesi</a>. All rights reserved.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-77cfab4"
                data-id="77cfab4"
                data-element_type="column">
                <div
                  class="elementor-widget-wrap elementor-element-populated">
                  <div
                    class="elementor-element elementor-element-79a0236 elementor-widget elementor-widget-image"
                    data-id="79a0236"
                    data-element_type="widget"
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                      <img
                        width="348"
                        height="26"
                        src="../wp-content/uploads/images/footer_img.png"
                        class="attachment-full size-full wp-image-593"
                        alt=""
                        srcset="
                            ../wp-content/uploads/images/footer_img.png        348w,
                           ../wp-content/uploads/images/footer_img-300x22.png 300w
                          "
                        sizes="(max-width: 348px) 100vw, 348px" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </footer>
  </div>
  <!-- #page -->

  <div class="bookory-mobile-nav">
    <div class="menu-scroll-mobile">
      <a href="#" class="mobile-nav-close"><i class="bookory-icon-times"></i></a>
      <div class="mobile-nav-tabs">
        <ul>
          <li
            class="mobile-tab-title mobile-pages-title active"
            data-menu="pages">
            <span>Main menu</span>
          </li>
        </ul>
      </div>
      <nav
        class="mobile-menu-tab mobile-navigation mobile-pages-menu active"
        aria-label="Mobile Navigation">
        <div class="handheld-navigation">
          <ul id="menu-main-menu" class="menu">
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="../index.php">Home</a>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="../shop/index.php">Shop</a>
            </li>
            <li
              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1191">
              <a href="#">Categories</a>
              <ul class="sub-menu">
                <li
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5751">
                  <a href="../categories/index.php?category=<?php echo urlencode('Sole-Authored Books'); ?>">Sole-Authored Books</a>
                </li>
                <li
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6157">
                  <a href="../categories/index.php?category=<?php echo urlencode('Monographs'); ?>">Monographs</a>
                </li>
                <li
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3154">
                  <a href="../categories/index.php?category=<?php echo urlencode('Edited Volumes'); ?>">Edited Volumes</a>
                </li>
                <li
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
                  <a href="../categories/index.php?category=<?php echo urlencode('On the Author’s Work'); ?>">On the Author’s Work</a>
                </li>
                <li
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218">
                  <a href="../categories/index.php?category=<?php echo urlencode('Book Chapters'); ?>">Book Chapters</a>
                </li>
                <li
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
                  <a href="../categories/index.php?category=<?php echo urlencode('Journal Articles'); ?>">Journal Articles</a>
                </li>
              </ul>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="../author/index.php">Author</a>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="../faq/index.php">FAQ</a>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="../contact/index.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <div class="bookory-overlay"></div>
  <div class="site-search-popup">
    <div class="site-search-popup-wrap">
      <div class="site-search ajax-search">
        <div class="widget woocommerce widget_product_search">
          <div class="ajax-search-result d-none"></div>
          <form role="search" method="get" class="woocommerce-product-search">
            <label
              class="screen-reader-text"
              for="woocommerce-product-search-field-2">Search for:</label>
            <input
              type="search"
              id="woocommerce-product-search-field-2"
              class="search-field"
              placeholder="Search products&hellip;"
              autocomplete="off"
              value=""
              name="s" />
            <button type="submit" value="Search">Search</button>
            <input type="hidden" name="post_type" value="product" />
          </form>
        </div>
      </div>
      <a href="#" class="site-search-popup-close">
        <svg
          class="close-icon"
          xmlns="http://www.w3.org/2000/svg"
          width="23.691"
          height="22.723"
          viewBox="0 0 23.691 22.723">
          <g transform="translate(-126.154 -143.139)">
            <line
              x2="23"
              y2="22"
              transform="translate(126.5 143.5)"
              fill="none"
              stroke="CurrentColor"
              stroke-width="1"></line>
            <path
              d="M0,22,23,0"
              transform="translate(126.5 143.5)"
              fill="none"
              stroke="CurrentColor"
              stroke-width="1"></path>
          </g>
        </svg>
      </a>
    </div>
  </div>
  <div id="woosw_wishlist" class="woosw-popup woosw-popup-center"></div>

  <link
    rel="stylesheet"
    id="wc-blocks-style-css"
    href="../wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksfbdf.css?ver=wc-9.5.1"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-icon-list-css"
    href="../wp-content/uploads/elementor/css/custom-widget-icon-list.min2420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="e-animation-shrink-css"
    href="../wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-social-icons-css"
    href="../wp-content/plugins/elementor/assets/css/widget-social-icons.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="e-apple-webkit-css"
    href="../wp-content/uploads/elementor/css/custom-apple-webkit.min2420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-3161-css"
    href="../wp-content/uploads/elementor/css/post-3161206e.css?ver=1742270152"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-heading-css"
    href="../wp-content/plugins/elementor/assets/css/widget-heading.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-icon-box-css"
    href="../wp-content/uploads/elementor/css/custom-widget-icon-box.min2420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-text-editor-css"
    href="../wp-content/plugins/elementor/assets/css/widget-text-editor.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-image-css"
    href="../wp-content/plugins/elementor/assets/css/widget-image.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="rs-plugin-settings-css"
    href="../wp-content/plugins/revslider/sr6/assets/css/rs6efd5.css?ver=6.7.18"
    media="all" />
  <script
    src="../wp-content/plugins/contact-form-7/includes/js/index37ad.js?ver=6.0.1"
    id="contact-form-7-js"></script>
  <script
    src="../wp-content/plugins/revslider/sr6/assets/js/rbtools.minefd5.js?ver=6.7.18"
    defer
    async
    id="tp-tools-js"></script>
  <script
    src="../wp-content/plugins/revslider/sr6/assets/js/rs6.minefd5.js?ver=6.7.18"
    defer
    async
    id="revmin-js"></script>
  <script
    src="../wp-includes/js/api-request.mind1c0.js?ver=6.7.2"
    id="wp-api-request-js"></script>
  <script
    src="../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0"
    id="wp-polyfill-js"></script>
  <script
    src="../wp-includes/js/dist/url.min9481.js?ver=e87eb76272a3a08402d2"
    id="wp-url-js"></script>
  <script
    src="../wp-includes/js/dist/api-fetch.min53e9.js?ver=d387b816bc1ed2042e28"
    id="wp-api-fetch-js"></script>
  <script
    src="../wp-content/plugins/woo-variation-swatches/assets/js/frontend.min63ce.js?ver=1732076616"
    id="woo-variation-swatches-js"></script>
  <script
    src="../wp-content/plugins/woo-smart-wishlist/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min1845.js?ver=4.9.6"
    id="perfect-scrollbar-js"></script>
  <script
    src="../wp-content/plugins/woo-smart-wishlist/assets/js/frontend1845.js?ver=4.9.6"
    id="woosw-frontend-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/frontend/main3601.js?ver=2.2.0"
    id="bookory-theme-js"></script>
  <script
    src="../wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0"
    id="imagesloaded-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/skip-link-focus-fix.min08e0.js?ver=20130115"
    id="bookory-skip-link-focus-fix-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/frontend/search-popup3601.js?ver=2.2.0"
    id="bookory-search-popup-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/frontend/text-editor3601.js?ver=2.2.0"
    id="bookory-text-editor-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/frontend/nav-mobile3601.js?ver=2.2.0"
    id="bookory-nav-mobile-js"></script>
  <script
    src="../wp-content/themes/bookory/inc/megamenu/assets/js/frontend3601.js?ver=2.2.0"
    id="bookory-megamenu-frontend-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/frontend/login3601.js?ver=2.2.0"
    id="bookory-ajax-login-js"></script>

  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min0c46.js?ver=9.5.1"
    id="wc-add-to-cart-variation-js"
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/vendor/slick.min3601.js?ver=2.2.0"
    id="slick-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/vendor/jquery.magnific-popup.min3601.js?ver=2.2.0"
    id="magnific-popup-js"></script>
  <script
    src="../wp-content/plugins/woo-smart-quick-view/assets/js/frontendeda1.js?ver=4.1.4"
    id="woosq-frontend-js"></script>
  <script
    src="../wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3"
    id="jquery-ui-core-js"></script>
  <script
    src="../wp-includes/js/jquery/ui/mouse.minb37e.js?ver=1.13.3"
    id="jquery-ui-mouse-js"></script>
  <script
    src="../wp-includes/js/jquery/ui/sortable.minb37e.js?ver=1.13.3"
    id="jquery-ui-sortable-js"></script>
  <script
    src="../wp-includes/js/jquery/ui/datepicker.minb37e.js?ver=1.13.3"
    id="jquery-ui-datepicker-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/vendors/tooltips/tooltips9dd7.js?ver=3.14.3"
    id="dokan-tooltip-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/vendors/form-validate/form-validate9dd7.js?ver=3.14.3"
    id="dokan-form-validate-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/vendors/speakingurl/speakingurl.min9dd7.js?ver=3.14.3"
    id="speaking-url-js"></script>
  <script
    src="../wp-includes/js/imgareaselect/jquery.imgareaselect.mind1c0.js?ver=6.7.2"
    id="imgareaselect-js"></script>
  <script
    src="../wp-includes/js/customize-base.mind1c0.js?ver=6.7.2"
    id="customize-base-js"></script>
  <script
    src="../wp-includes/js/backbone.minaff7.js?ver=1.6.0"
    id="backbone-js"></script>
  <script
    src="../wp-includes/js/customize-models9dd7.js?ver=3.14.3"
    id="customize-model-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/jquery-tiptip/jquery.tipTip.min9dd7.js?ver=3.14.3"
    id="jquery-tiptip-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/vendors/date-range-picker/daterangepicker.min9dd7.js?ver=3.14.3"
    id="dokan-date-range-picker-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/accounting/accounting.min9dd7.js?ver=3.14.3"
    id="dokan-accounting-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/js/dokan40de.js?ver=1733554650"
    id="dokan-script-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/vendors/select2/select2.full.min9dd7.js?ver=3.14.3"
    id="dokan-select2-js-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/js/vendor-registrationa71e.js?ver=1732076614"
    id="dokan-vendor-registration-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min0c46.js?ver=9.5.1"
    id="wc-address-i18n-js"
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/js/vendor-addressa71e.js?ver=1732076614"
    id="dokan-vendor-address-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min0c46.js?ver=9.5.1"
    id="sourcebuster-js-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min0c46.js?ver=9.5.1"
    id="wc-order-attribution-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/header-cart.min3601.js?ver=2.2.0"
    id="bookory-header-cart-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/tooltipster.bundle3601.js?ver=2.2.0"
    id="tooltipster-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/product-ajax-search.min3601.js?ver=2.2.0"
    id="bookory-products-ajax-search-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/main.min3601.js?ver=2.2.0"
    id="bookory-products-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/quantity.min3601.js?ver=2.2.0"
    id="bookory-input-quantity-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/off-canvas.min3601.js?ver=2.2.0"
    id="bookory-off-canvas-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/cart-canvas.min3601.js?ver=2.2.0"
    id="bookory-cart-canvas-js"></script>
  <script
    src="../wp-content/plugins/elementor/assets/js/webpack.runtime.min42e3.js?ver=3.26.0"
    id="elementor-webpack-runtime-js"></script>
  <script
    src="../wp-content/plugins/elementor/assets/js/frontend-modules.min42e3.js?ver=3.26.0"
    id="elementor-frontend-modules-js"></script>
  <script
    src="../wp-content/plugins/elementor/assets/js/frontend.min42e3.js?ver=3.26.0"
    id="elementor-frontend-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/elementor-frontend3601.js?ver=2.2.0"
    id="bookory-elementor-frontend-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/vendor/jquery.sticky3601.js?ver=2.2.0"
    id="elementor-sticky-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/vendor/sticky3601.js?ver=2.2.0"
    id="bookory-elementor-sticky-js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function(e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash');
    });
    const togglePasswords = document.querySelector('#togglePasswords');
    const passwords = document.querySelector('#cpassword');

    togglePasswords.addEventListener('click', function(e) {
      // toggle the type attribute
      const type = passwords.getAttribute('type') === 'password' ? 'text' : 'password';
      passwords.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash');
    });

    const togglePasswordLogin = document.querySelector('#togglePasswordLogin');
    const loignPasswords = document.querySelector('#lpassword');

    togglePasswordLogin.addEventListener('click', function(e) {
      // toggle the type attribute
      const type = loignPasswords.getAttribute('type') === 'password' ? 'text' : 'password';
      loignPasswords.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash');
    });


    function checkPassword() {
      var password = document.getElementById("password").value;
      var requirements = {
        length: password.length >= 8,
        capital: /[A-Z]/.test(password),
        small: /[a-z]/.test(password),
        number: /[0-9]/.test(password),
        special: /[^A-Za-z0-9]/.test(password)
      };

      // Update requirement list color
      for (var req in requirements) {
        var element = document.getElementById(req);
        if (requirements[req]) {
          element.style.color = "green";
        } else {
          element.style.color = "red";
        }
      }

      var button = document.querySelector('button[type="submit"][name="register"]');
      var isFormValid = Object.values(requirements).every(Boolean);
      button.disabled = !isFormValid;
    }

    // Add event listener for password input
    var passwordInput = document.getElementById("password");
    passwordInput.addEventListener("input", checkPassword);

    // Add event listener for password field click
    passwordInput.addEventListener("focus", function() {
      var requirements = document.getElementById("password-requirements");
      requirements.style.display = "block";
    });

    // Add event listener for form submission
    var form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
      // Check if the form is valid
      if (!passwordInput.disabled && !passwordInput.value) {
        event.preventDefault(); // Prevent form submission
        // Optionally, you can show an error message here
      }
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#register').submit(function(event) {
        event.preventDefault();
        $.ajax({
          type: 'POST',
          url: '../action/register.php',
          dataType: 'json',
          data: $(this).serialize(),
          success: function(response) {
            if (response.success) {
              Swal.fire('Success!', response.message, 'success').then((result) => {
                $('#register')[0].reset();
              });
            } else {
              Swal.fire('Error!', response.message, 'error');
            }
          },
          error: function() {
            Swal.fire({
              title: 'Oops!',
              text: 'Something went wrong, please try again later',
              icon: 'error',
            });
          }
        });
      });
      $('#login').submit(function(event) {
        event.preventDefault();
        $.ajax({
          type: 'POST',
          url: '../action/login.php',
          dataType: 'json',
          data: $(this).serialize(),
          success: function(response) {
            if (response.success) {
              window.location.href = response.message;
            } else {
              Swal.fire('Error!', response.message, 'error');
              document.getElementById("lpassword").value = ""

            }
          },
          error: function() {
            Swal.fire({
              title: 'Oops!',
              text: 'Something went wrong, please try again later',
              icon: 'error',
            });
          }
        });
      });
    });
  </script>
</body>

</html>