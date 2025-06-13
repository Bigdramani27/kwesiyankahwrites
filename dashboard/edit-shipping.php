<?php
session_start();
require('../controllers/customer_controller.php');
require('../controllers/product_controller.php');
require('../controllers/cart_controller.php');
$customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "0";

$count = count_wishlist_for_user_controller($customer_id);
$cart = count_user_cart_controller($customer_id);
$total = total_amount_controller($customer_id);
if ($customer_id == 0) {
  header("Location: ../my-account/index.php");
}
$shipping = select_one_shipping_userID_controller($customer_id);
$fname = (!empty($shipping['firstName'])) ? $shipping['firstName'] : $_SESSION['firstName'];
$lname = (!empty($shipping['lastName'])) ? $shipping['lastName'] : $_SESSION['lastName'];
$street = (!empty($shipping['street'])) ? $shipping['street'] : "";
$apartment = (!empty($shipping['apartment'])) ? $shipping['apartment'] : "";
$city = (!empty($shipping['city'])) ? $shipping['city'] : "";
$zip = (!empty($shipping['zip'])) ? $shipping['zip'] : "";
$phone = (!empty($shipping['phone'])) ? $shipping['phone'] : "";
$country = (!empty($shipping['country'])) ? $shipping['country'] : "";

?>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <title>Prof Kwesi Yankah Book Store</title>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
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

</head>

<body
  class="page-template-default page page-id-10 logged-in wp-custom-logo wp-embed-responsive theme-bookory woocommerce-account woocommerce-page woocommerce-edit-address woocommerce-js ehf-header ehf-footer ehf-template-bookory ehf-stylesheet-demo-child woo-variation-swatches wvs-behavior-blur wvs-theme-demo-child wvs-show-label wvs-tooltip group-blog woocommerce-active product-block-style-1 elementor-default elementor-kit-4 dokan-theme-bookory has-scrollbar e--ua-blink e--ua-edge e--ua-webkit"
  style="--scroll-bar: 15px" data-elementor-device-mode="mobile_extra">

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
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="index.php"><span class="menu-title">Shop</span></a>
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
      <div data-elementor-type="wp-post" data-elementor-id="3100" class="elementor elementor-3100">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-1ece023 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
          data-id="1ece023" data-element_type="section"
          data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}"
          style="width: 753px; left: 0.1px;">
          <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9ef6efd"
              data-id="9ef6efd" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-59103fb hidden-bookory-title-single-yes elementor-widget elementor-widget-bookory-woocommerce-breadcrumb"
                  data-id="59103fb" data-element_type="widget"
                  data-widget_type="bookory-woocommerce-breadcrumb.default">
                  <div class="elementor-widget-container">
                    <div class="bookory-woocommerce-title">Addresses</div>
                    <nav class="woocommerce-breadcrumb"><a
                        href="../index.php">Home</a><i
                        class="bookory-icon-right-arrow"></i><a
                        href="">My account</a><i
                        class="bookory-icon-right-arrow"></i>Addresses</nav>
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

            <article id="post-10" class="post-10 page type-page status-publish hentry">
              <div class="entry-content">
                <div class="woocommerce">
                  <nav class="woocommerce-MyAccount-navigation" aria-label="Account pages">
                    <ul>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders ">
                        <a
                          href="index.php"
                          aria-current="page">
                          Orders
                        </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads is-active">
                        <a
                          href="downloads.php">
                          Downloads
                        </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                        <a
                          href="address.php">
                          Addresses
                        </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                        <a
                          href="account-details.php">
                          Account details
                        </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                        <a
                          href="../logout.php">
                          Log out
                        </a>
                      </li>
                    </ul>
                  </nav>


                  <div class="woocommerce-MyAccount-content">
                    <div class="woocommerce-notices-wrapper"></div>

                    <form id="add_shipping">

                      <h2>Shipping address</h2>
                      <div class="woocommerce-address-fields">

                        <div class="woocommerce-address-fields__field-wrapper">
                          <p class="form-row form-row-first validate-required"
                            id="shipping_first_name_field" data-priority="10"><label
                              for="shipping_first_name" class="">First name&nbsp;<abbr
                                class="required" title="required">*</abbr></label><span
                              class="woocommerce-input-wrapper">
                              <input type="text"
                                class="input-text " name="firstName"
                                value="<?php echo $fname ?>" required></span>
                          </p>
                          <p class="form-row form-row-last validate-required"
                            id="shipping_last_name_field" data-priority="20"><label
                              for="shipping_last_name" class="">Last name&nbsp;<abbr
                                class="required" title="required">*</abbr></label><span
                              class="woocommerce-input-wrapper">
                              <input type="text"
                                class="input-text " name="lastName"
                                value="<?php echo $lname ?>" required></span>
                          </p>
                          <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                            id="shipping_country_field" data-priority="40"><label
                              for="shipping_country" class="">Country / Region&nbsp;<abbr
                                class="required" title="required">*</abbr></label><span
                              class="woocommerce-input-wrapper"><select style="border-radius: 50px;"
                                name="country"
                                required
                                class="country_to_state country_select select2-hidden-accessible">
                                <?php if (empty($country)) { ?> <option value="" disabled selected>
                                    Select a country / region…
                                  </option>
                                <?php } else { ?>
                                  <option value="<?php echo $country ?>" selected>
                                    <?php echo $country ?>
                                  </option>
                                <?php } ?>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>

                              </select></p>
                          <p class="form-row address-field validate-required form-row-wide"
                            id="shipping_address_1_field" data-priority="50"><label
                              for="shipping_address_1" class="">Street address&nbsp;<abbr
                                class="required" title="required">*</abbr></label><span
                              class="woocommerce-input-wrapper"><input type="text"
                                class="input-text " name="street"
                                value="<?php echo $street ?>" required></span>
                          </p>
                          <p class="form-row address-field form-row-wide"
                            id="shipping_address_2_field" data-priority="60"><label
                              for="shipping_address_2"
                              class="screen-reader-text">Apartment, suite, unit,
                              etc.&nbsp;<span
                                class="optional">(optional)</span></label><span
                              class="woocommerce-input-wrapper"><input type="text"
                                class="input-text " name="apartment"
                                placeholder="Apartment, suite, unit, etc. (optional)"
                                value="<?php echo $apartment ?>"></span>
                          </p>
                          <p class="form-row address-field validate-required form-row-wide"
                            id="shipping_city_field" data-priority="70"
                            data-o_class="form-row form-row-wide address-field validate-required">
                            <label for="shipping_city" class="">City / State&nbsp;<abbr
                                class="required" title="required">*</abbr></label><span
                              class="woocommerce-input-wrapper"><input type="text"
                                class="input-text " name="city"
                                value="<?php echo $city ?>"></span>
                          </p>
                          <p
                            class="form-row address-field validate-required validate-postcode form-row-wide"
                            id="billing_postcode_field"
                            data-priority="90"
                            data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                            <label for="billing_postcode" class="">ZIP Code&nbsp;<abbr
                                class="required"
                                title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input
                                type="text"
                                class="input-text"
                                name="zip"
                                value="<?php echo $zip ?>" required /></span>
                          </p>
                          <p
                            class="form-row form-row-wide validate-required validate-phone"
                            id="billing_phone_field"
                            data-priority="100">
                            <label for="billing_phone">Phone&nbsp;<abbr
                                class="required"
                                title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input
                                type="tel"
                                class="input-text"
                                name="phone[main]"
                                id="phone"
                                size="100"
                                maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                value="<?php echo $phone ?>" required /></span>
                          </p>
                        </div>


                        <p>
                          <button type="submit" class="button" name="save_address"
                            value="Save address">Save address</button>
                          <input type="hidden" id="woocommerce-edit-address-nonce"
                            name="woocommerce-edit-address-nonce" value="41481d3a22"><input
                            type="hidden" name="_wp_http_referer"
                            value="/bookory/my-account/edit-address/shipping/"> <input
                            type="hidden" name="action" value="edit_address">
                        </p>
                      </div>

                    </form>


                  </div>
                </div>
              </div><!-- .entry-content -->
            </article><!-- #post-## -->

          </main><!-- #main -->
        </div><!-- #primary -->


      </div><!-- .col-full -->
    </div><!-- #content -->

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
                          <a href="../privacy.php">
                            <span class="elementor-icon-list-text">Privacy</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="../terms.php">
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

  </div><!-- #page -->
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
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="../author/index.php">Author</a>
            </li>
            <li
              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
              <a href="faq/index.php">FAQ</a>
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
            <a href="../cart/index.php" class="button wc-forward">View cart</a><a href="../../checkout/index.php" class="button checkout wc-forward">Checkout</a>
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
  <script src="../wp-content/intlTelInput.js"></script>
  <script>
    var phone_number = window.intlTelInput(document.querySelector("#phone"), {
      separateDialCode: true,
      preferredCountries: ["gh"],
      hiddenInput: "full",
      utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });

    $("#add_shipping").submit(function() {
      var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
      $("input[name='phone[full]'").val(full_number)
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script>
    $(document).ready(function() {
      $('#add_shipping').submit(function(event) {
        event.preventDefault();
        $.ajax({
          type: 'POST',
          url: '../action/add_shipping.php',
          dataType: 'json',
          data: $(this).serialize(),
          success: function(response) {
            if (response.success) {
              // Show success sweet alert
              Swal.fire('Success!', response.message, 'success').then((result) => {
                location.href = "../dashboard/address.php"
              });
            }
          },
          error: function() {
            // Show error sweet alert
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
  <script
    src="../wp-content/plugins/contact-form-7/includes/swv/js/index37ad.js?ver=6.0.1"
    id="swv-js"></script>
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
    src="../wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3"
    id="jquery-ui-core-js"></script>
  <script
    src="../wp-includes/js/jquery/ui/mouse.minb37e.js?ver=1.13.3"
    id="jquery-ui-mouse-js"></script>
  <script
    src="../wp-includes/js/jquery/ui/slider.minb37e.js?ver=1.13.3"
    id="jquery-ui-slider-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min0c46.js?ver=9.5.1"
    id="wc-jquery-ui-touchpunch-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/accounting/accounting.minaffb.js?ver=0.4.2"
    id="accounting-js"></script>
  <script
    src="../wp-content/plugins/woocommerce/assets/js/frontend/price-slider.min0c46.js?ver=9.5.1"
    id="wc-price-slider-js"></script>
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
    src="../wp-content/themes/bookory/assets/js/vendor/sticky3601.js?ver=2.2.0"
    id="bookory-elementor-sticky-js"></script>
</body>

</html>