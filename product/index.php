<?php
session_start();
require('../controllers/customer_controller.php');
require('../controllers/product_controller.php');
require('../controllers/cart_controller.php');
$customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "0";
$productID = $_GET['SKU'];
$product = select_one_product_controller($productID);
$category = $product['productCategory'];
$count = count_wishlist_for_user_controller($customer_id);
$cart = count_user_cart_controller($customer_id);
$total = total_amount_controller($customer_id);
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
    id="photoswipe-css"
    href="../wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min0c46.css?ver=9.5.1"
    media="all" />
  <link
    rel="stylesheet"
    id="photoswipe-default-skin-css"
    href="../wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min0c46.css?ver=9.5.1"
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
    id="elementor-post-4757-css"
    href="../wp-content/uploads/elementor/css/post-47570183.css?ver=1742271259"
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
    id="tooltipster-css"
    href="../wp-content/themes/bookory/assets/css/libs/tooltipster.bundle.min3601.css?ver=2.2.0"
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
    src="../wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min30d3.js?ver=1.7.21-wc.9.5.1"
    id="zoom-js"
    defer
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min4588.js?ver=2.7.2-wc.9.5.1"
    id="flexslider-js"
    defer
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min9c28.js?ver=4.1.1-wc.9.5.1"
    id="photoswipe-js"
    defer
    data-wp-strategy="defer"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min9c28.js?ver=4.1.1-wc.9.5.1"
    id="photoswipe-ui-default-js"
    defer
    data-wp-strategy="defer"></script>
  <script id="wc-single-product-js-extra">
    var wc_single_product_params = {
      i18n_required_rating_text: "Please select a rating",
      i18n_product_gallery_trigger_text: "View full-screen image gallery",
      review_rating_required: "yes",
      flexslider: {
        rtl: false,
        animation: "slide",
        smoothHeight: true,
        directionNav: false,
        controlNav: "thumbnails",
        slideshow: false,
        animationSpeed: 500,
        animationLoop: false,
        allowOneSlide: false,
      },
      zoom_enabled: "1",
      zoom_options: [],
      photoswipe_enabled: "1",
      photoswipe_options: {
        shareEl: false,
        closeOnScroll: false,
        history: false,
        hideAnimationDuration: 0,
        showAnimationDuration: 0,
      },
      flexslider_enabled: "1",
    };
  </script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/single-product.min0c46.js?ver=9.5.1"
    id="wc-single-product-js"
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
  <style>
    .text-container {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      width: 100%;
    }
  </style>
</head>

<body
  class="product-template-default single single-product postid-93 wp-custom-logo wp-embed-responsive theme-bookory woocommerce woocommerce-page woocommerce-no-js ehf-header ehf-footer ehf-template-bookory ehf-stylesheet-demo-child woo-variation-swatches wvs-behavior-blur wvs-theme-demo-child wvs-show-label wvs-tooltip group-blog has-post-thumbnail woocommerce-active product-block-style-1 bookory-product-laptop-3 bookory-product-tablet-2 bookory-product-mobile-2 bookory-single-product-width-boxed single-product-horizontal elementor-default elementor-kit-4 bookory-full-width-content dokan-theme-bookory">
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
                              src="../wp-content/uploads/images/logo.png" style="width: 150px; height:130px"
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
                                <?php if ($customer_id != 0) {  ?>
                                  <div class="site-header-wishlist">
                                    <div class="site-header-account">
                                      <a href="">
                                        <i class="bookory-icon-account"></i>
                                      </a>
                                      <div class="account-dropdown"></div>
                                    </div>
                                  </div>
                                <?php } else { ?>
                                  <div class="site-header-wishlist">
                                    <a
                                      class="header-wishlist"
                                      href="../my-account/index.php">
                                      <i class="bookory-icon-account"></i>
                                    </a>
                                  </div>
                                <?php   } ?>

                                <div class="site-header-wishlist">
                                  <?php if ($customer_id != 0) {  ?>
                                    <a
                                      class="header-wishlist"
                                      href="../wishlist/index.php">
                                      <i class="bookory-icon-heart-1"></i>
                                      <?php if ($count != 0) { ?> <span class="count"><?php echo $count ?></span> <?php } ?>
                                    </a>
                                  <?php } else { ?>
                                    <a
                                      class="header-wishlist"
                                      href="../my-account/index.php">
                                      <i class="bookory-icon-heart-1"></i>
                                    </a>
                                  <?php } ?>
                                </div>

                                <div class="site-header-cart menu">
                                  <?php if ($customer_id != 0) {  ?>
                                    <a
                                      class="cart-contents"
                                      href="../cart/index.php"
                                      title="View your shopping cart">
                                      <?php if ($cart != 0) { ?> <span class="count"><?php echo $cart ?></span> <?php } ?>
                                    </a>
                                  <?php } else { ?>
                                    <a
                                      class="cart-contents"
                                      href="../my-account/index.php"
                                      title="View your shopping cart">
                                    </a>
                                  <?php } ?>
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
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item">
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
        data-elementor-id="4757"
        class="elementor elementor-4757">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-a87e818 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
          data-id="a87e818"
          data-element_type="section"
          data-settings='{"stretch_section":"section-stretched"}'>
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a9862a1"
              data-id="a9862a1"
              data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-8e904b1 hidden-bookory-title-yes elementor-widget elementor-widget-bookory-woocommerce-breadcrumb"
                  data-id="8e904b1"
                  data-element_type="widget"
                  data-widget_type="bookory-woocommerce-breadcrumb.default">
                  <div class="elementor-widget-container">
                    <div class="bookory-woocommerce-title">
                      <?php echo $product['productName'] ?>
                    </div>
                    <nav class="woocommerce-breadcrumb">
                      <a href="../index.php">Home</a><i class="bookory-icon-right-arrow"></i><a href="">Product</a><i class="bookory-icon-right-arrow"></i> <?php echo $product['productName'] ?>
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
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
            <div class="woocommerce-notices-wrapper"></div>
            <div
              id="product-93"
              class="single-product-type-horizontal product type-product post-93 status-publish first instock product_cat-action-adventure product_cat-activity-books product_cat-anthologies product_cat-cultural product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail featured shipping-taxable purchasable product-type-simple">
              <div class="content-single-wrapper">
                <div
                  class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-3 images woocommerce-product-gallery-horizontal"
                  data-columns="3">
                  <figure class="woocommerce-product-gallery__wrapper">
                    <div
                      data-thumb="../wp-content/uploads/books/<?php echo $product['productImage'] ?>"
                      data-thumb-sizes="(max-width: 71px) 100vw, 71px"
                      class="woocommerce-product-gallery__image">
                      <a href="../wp-content/uploads/books/<?php echo $product['productImage'] ?>"><img
                          style="height: 650px;"
                          src="../wp-content/uploads/books/<?php echo $product['productImage'] ?>"
                          class="wp-post-image"
                          decoding="async" /></a>
                    </div>
                  </figure>
                  <div class="product-video-360"></div>
                </div>

                <div class="summary entry-summary">
                  <div class="entry-summary-top">
                    <span class="inventory_status"><span class="stock-title screen-reader-text">Availability:</span>
                      In Stock</span>

                  </div>
                  <h1 class="product_title entry-title"> <?php echo $product['productName'] ?></h1>
                  <div class="product_after_title">
                    <div class="product-brand">
                      Author:
                      <a href="../book-author/karla-newman/index.php"> <?php echo $product['productAuthor'] ?></a>
                    </div>

                    <span class="sku_wrapper">SKU: <span class="sku"> <?php echo $product['productID'] ?></span></span>
                  </div>
                  <p class="price">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₵</span> <?php echo number_format($product['productPrice'], 2) ?></span>
                  </p>
                  <div class="woocommerce-product-details__short-description">
                    <p class="text-container">
                      <?php echo $product['productDescription'] ?>
                    </p>
                  </div>

                  <form
                    class="cart" id="add_cart">
                    <input type="hidden" name="SKU" value="<?php echo $product['productID'] ?>">
                    <div class="quantity_wrap">
                      <label
                        class="quantity_label">Quantity</label>
                      <div class="quantity">
                        <input
                          type="number"
                          class="input-text qty text"
                          step="1"
                          min="1"
                          max="999"
                          name="quantity"
                          value="1" />
                      </div>
                    </div>
                    <?php if ($customer_id != 0) { ?>
                      <button
                        type="submit"
                        name="add-to-cart"
                        class="single_add_to_cart_button button alt">
                        Add to cart
                      </button>
                    <?php } else { ?>
                      <a
                        href="../my-account/index.php"
                        name="add-to-cart"
                        class="single_add_to_cart_button button alt">
                        Add to cart
                      </a>
                    <?php  } ?>
                  </form>

                  <div class="product_meta">
                    <span class="posted_in">Categories:
                      <a
                        href="../product-category/action-adventure/index.php"
                        rel="tag"> <?php echo $product['productCategory'] ?></a>
                    </span>
                    <span class="tagged_as">Genre:
                      <a href="../product-tag/books/index.php" rel="tag"> <?php echo $product['productGenre'] ?></a>

                  </div>
                </div>
              </div>

              <div class="woocommerce-tabs wc-tabs-wrapper">
                <ul class="tabs wc-tabs" role="tablist">
                  <li
                    class="description_tab"
                    id="tab-title-description"
                    role="tab"
                    aria-controls="tab-description">
                    <a href="#tab-description"> Description </a>
                  </li>
                  <li
                    class="additional_information_tab"
                    id="tab-title-additional_information"
                    role="tab"
                    aria-controls="tab-additional_information">
                    <a href="#tab-additional_information">
                      Additional information
                    </a>
                  </li>
                </ul>
                <h2
                  class="resp-accordion tab-description active"
                  role="tab"
                  data-control=".description_tab"
                  aria-controls="#tab-description">
                  Description
                </h2>
                <div
                  class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                  id="tab-description"
                  role="tabpanel"
                  aria-labelledby="tab-title-description">
                  <div class="woocommerce-tab-width">
                    <h2>Description</h2>
                    <p>
                      <?php echo $product['productDescription'] ?>
                    </p>
                  </div>
                </div>
                <h2
                  class="resp-accordion tab-additional_information"
                  role="tab"
                  data-control=".additional_information_tab"
                  aria-controls="#tab-additional_information">
                  Additional information
                </h2>
                <div
                  class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab"
                  id="tab-additional_information"
                  role="tabpanel"
                  aria-labelledby="tab-title-additional_information">
                  <div class="woocommerce-tab-width">
                    <h2>Additional information</h2>

                    <table
                      class="woocommerce-product-attributes shop_attributes"
                      aria-label="Product Details">
                      <tr
                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                        <th
                          class="woocommerce-product-attributes-item__label"
                          scope="row">
                          Publisher
                        </th>
                        <td
                          class="woocommerce-product-attributes-item__value">
                          <?php echo $product['productAuthor'] ?>
                        </td>
                      </tr>
                      <tr
                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                        <th
                          class="woocommerce-product-attributes-item__label"
                          scope="row">
                          Published Date
                        </th>
                        <td
                          class="woocommerce-product-attributes-item__value">
                          <?php echo $product['publishedDate'] ?>
                        </td>
                      </tr>
                      <tr
                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                        <th
                          class="woocommerce-product-attributes-item__label"
                          scope="row">
                          Language
                        </th>
                        <td
                          class="woocommerce-product-attributes-item__value">
                          <?php echo $product['productLanguage'] ?>
                        </td>
                      </tr>
                      <tr
                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                        <th
                          class="woocommerce-product-attributes-item__label"
                          scope="row">
                          Weight
                        </th>
                        <td
                          class="woocommerce-product-attributes-item__value">
                          <?php echo $product['productWeight'] ?> KG
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>

              </div>

              <section class="related products">
                <h2>Related products</h2>

                <ul class="products columns-5">
                  <?php $others = select_5_products_controller($category);
                  foreach ($others as $other) { ?>
                    <li
                      class="product-style-default product type-product post-61 status-publish instock product_cat-anthologies product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail featured virtual purchasable product-type-simple">
                      <div class="product-block">
                        <div class="product-transition">
                          <div class="product-image">
                            <img
                              width="600"
                              height="840"
                              src="../wp-content/uploads/books/<?php echo $other['productImage'] ?>"
                              class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                              alt=""
                              decoding="async" />
                          </div>
                          <div class="group-action">
                            <div class="shop-action vertical">
                              <button
                                class="woosw-btn woosw-btn-61"
                                aria-label="Add to wishlist">
                                Add to wishlist</button>
                              <div class="opal-add-to-cart-button">
                                <a
                                  href=""
                                  data-quantity="1"
                                  class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                  data-success_message="&ldquo;Dire Wolf Stakes&rdquo; has been added to your cart">Add to cart</a>
                                <span
                                  id="woocommerce_loop_add_to_cart_link_describedby_61"
                                  class="screen-reader-text">
                                </span>
                              </div>
                            </div>
                          </div>
                          <a
                            href="../product/index.php?SKU=<?php echo $other['productID'] ?>"
                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                        </div>
                        <div class="product-caption">
                          <h3 class="woocommerce-loop-product__title">
                            <a href="../product/index.php?SKU=<?php echo $other['productID'] ?>"><?php echo $other['productName'] ?></a>
                          </h3>

                          <div class="woocommerce-loop-product__author">
                            <a href="../author/index.php"><?php echo $other['productAuthor'] ?></a>
                          </div>
                          <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₵</span><?php echo $other['productPrice'] ?></span></span>
                        </div>
                      </div>
                    </li>
                  <?php } ?>

                </ul>
              </section>
            </div>
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
                          href="../my-account/index.php"
                          class="elementor-icon elementor-animation-"
                          tabindex="-1">
                          <i
                            aria-hidden="true"
                            class="bookory-icon- bookory-icon-account"></i>
                        </a>
                      </div>

                      <div class="elementor-icon-box-content">
                        <h3 class="elementor-icon-box-title">
                          <a href="../my-account/index.php"> Account </a>
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
                            href="shop/index.php"
                            class="elementor-icon elementor-animation-"
                            tabindex="-1">
                            <i
                              aria-hidden="true"
                              class="bookory-icon- bookory-icon-home"></i>
                          </a>
                        </div>

                        <div class="elementor-icon-box-content">
                          <h3 class="elementor-icon-box-title">
                            <a href="shop/index.php"> Shop </a>
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
                            href="../dashboard/index.php"
                            class="elementor-icon elementor-animation-"
                            tabindex="-1">
                            <i
                              aria-hidden="true"
                              class="bookory-icon- bookory-icon-account"></i>
                          </a>
                        </div>

                        <div class="elementor-icon-box-content">
                          <h3 class="elementor-icon-box-title">
                            <a href="../dashboard/index.php"> Account </a>
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
                            href="wishlist/index.php"
                            class="elementor-icon elementor-animation-"
                            tabindex="-1">
                            <i aria-hidden="true" class="far fa-heart"></i>
                          </a>
                        </div>

                        <div class="elementor-icon-box-content">
                          <h3 class="elementor-icon-box-title">
                            <a href="wishlist/index.php"> Wishlist </a>
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
    </footer>

  </div>
  <!-- #page -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script>
    $(document).ready(function() {
      $('#add_cart').submit(function(event) {
        event.preventDefault();
        $.ajax({
          type: 'POST',
          url: '../action/add_to_cart.php',
          dataType: 'json',
          data: $(this).serialize(),
          success: function(response) {
            if (response.success) {
              Swal.fire('Success!', response.message, 'success').then((result) => {
                location.reload();
              });
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

  <?php if ($customer_id != 0) { ?>
    <div class="account-wrap d-none">
      <div class="account-inner dashboard">
        <ul class="account-dashboard">
          <li>
            <a href="../dashboard/index.php" title="Orders">Orders</a>
          </li>
          <li>
            <a href="../dashboard/downloads.php" title="Downloads">Downloads</a>
          </li>
          <li>
            <a href="../dashboard/address.php" title="Edit Address">Edit Address</a>
          </li>
          <li>
            <a href="../dashboard/account-details.php" title="Account Details">Account Details</a>
          </li>
          <li>
            <a
              title=""
              class="tips"
              href="../logout.php"
              data-original-title="Log out">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  <?php } ?>

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
              <a href="index.php">Home</a>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="shop/index.php">Shop</a>
            </li>
            <li
              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1191">
              <a href="#">Categories</a>
              <ul class="sub-menu">
                <li
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5751">
                  <a href="categories/index.php">Sole-Authored Books</a>
                </li>
                <li
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6157">
                  <a href="categories/index.php">Monographs</a>
                </li>
                <li
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3154">
                  <a href="categories/index.php">Edited Volumes</a>
                </li>
                <li
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
                  <a href="faq/index.php">On the Author’s Work</a>
                </li>
                <li
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218">
                  <a href="404.php">Book Chapters</a>
                </li>
                <li
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
                  <a href="faq/index.php">Journal Articles</a>
                </li>
              </ul>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="author/index.php">Author</a>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="faq/index.php">FAQ</a>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="contact/index.php">Contact</a>
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

  <div class="site-header-cart-side">
    <div class="cart-side-heading">
      <span class="cart-side-title">Shopping cart</span>
      <a href="#" class="close-cart-side">close</a>
    </div>
    <div class="widget woocommerce widget_shopping_cart">
      <div class="widget_shopping_cart_content">
        <div class="woocommerce-mini-cart-scroll">
          <ul class="woocommerce-mini-cart cart_list product_list_widget">
            <?php $carts = select_user_cart_controller($customer_id);
            foreach ($carts as $all) {
            ?>
              <li class="woocommerce-mini-cart-item mini_cart_item">
                <a
                  href="../action/delete_from_cart.php?cart=<?php echo $all['cartID'] ?>"
                  class="remove remove_from_cart_button"
                  data-product_sku="B87309287">×</a>
                <a href="../product/index.php?SKU=<?php echo $all['productID'] ?>"><img
                    style="height: 85px;"
                    src="../wp-content/uploads/books/<?php echo $all['productImage'] ?>"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    decoding="async" /><?php echo $all['productName'] ?></a>
                <dl class="variation">
                  <dt class="variation-Vendor">Category:</dt>
                  <dd class="variation-Vendor">
                    <p><?php echo $all['productCategory'] ?></p>
                  </dd>
                </dl>
                <span class="quantity"><?php echo $all['quantity'] ?> ×
                  <span class="woocommerce-Price-amount amount" style="color:black"><span class="woocommerce-Price-currencySymbol">₵</span><?php echo number_format($all['productPrice'], 2) ?></span></span>
              </li>
            <?php }
            if (empty($carts)) { ?>
              <p class="woocommerce-mini-cart__empty-message">No books in the cart.</p>
            <?php   }
            ?>
          </ul>
        </div>
        <?php if (!empty($carts)) { ?>
          <p class="woocommerce-mini-cart__total total">
            <strong>Subtotal:</strong>
            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₵ <?php echo $total['Amount'] ?></span></span>
          </p>

          <p class="woocommerce-mini-cart__buttons buttons">
            <a href="../cart/index.php" class="button wc-forward">View cart</a><a href="../checkout/index.php" class="button checkout wc-forward">Checkout</a>
          </p>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="cart-side-overlay"></div>
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
    src="../wp-content/plugins/revslider/sr6/assets/js/rbtools.minefd5.js?ver=6.7.18"
    defer
    async
    id="tp-tools-js"></script>
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
    src="../wp-includes/js/comment-reply.mind1c0.js?ver=6.7.2"
    id="comment-reply-js"
    async
    data-wp-strategy="async"></script>
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
    src="../wp-content/themes/bookory/assets/js/vendor/slick.min3601.js?ver=2.2.0"
    id="slick-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/vendor/jquery.magnific-popup.min3601.js?ver=2.2.0"
    id="magnific-popup-js"></script>

  <script
    src="../wp-content/plugins/woo-smart-quick-view/assets/js/frontendeda1.js?ver=4.1.4"
    id="woosq-frontend-js"></script>


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
    src="../wp-content/plugins/woocommerce/assets/js/accounting/accounting.min9dd7.js?ver=3.14.3"
    id="dokan-accounting-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/js/dokan40de.js?ver=1733554650"
    id="dokan-script-js"></script>
  <script
    src="../wp-content/plugins/dokan-lite/assets/vendors/select2/select2.full.min9dd7.js?ver=3.14.3"
    id="dokan-select2-js-js"></script>
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
    src="../wp-content/themes/bookory/assets/js/woocommerce/quantity.min3601.js?ver=2.2.0"
    id="bookory-input-quantity-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/off-canvas.min3601.js?ver=2.2.0"
    id="bookory-off-canvas-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/cart-canvas.min3601.js?ver=2.2.0"
    id="bookory-cart-canvas-js"></script>

  <script
    src="../wp-content/themes/bookory/assets/js/sticky-add-to-cart.min3601.js?ver=2.2.0"
    id="bookory-sticky-add-to-cart-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/frontend/countdown3601.js?ver=2.2.0"
    id="bookory-countdown-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/vendor/spritespin3601.js?ver=2.2.0"
    id="spritespin-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/vendor/jquery.sticky-kit.min3601.js?ver=2.2.0"
    id="sticky-kit-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/woocommerce/single.min3601.js?ver=2.2.0"
    id="bookory-single-product-js"></script>
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


</body>

</html>