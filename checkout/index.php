<?php
session_start();
require('../controllers/customer_controller.php');
require('../controllers/product_controller.php');
require('../controllers/cart_controller.php');
$customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "0";
$count = count_wishlist_for_user_controller($customer_id);
$cart = count_user_cart_controller($customer_id);
$total = total_amount_controller($customer_id);
if (empty($cart)) {
  header("Location: ../cart/index.php");
}
if ($customer_id == 0) {
  header("Location: ../my-account/index.php");
}
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
    id="bookory-gutenberg-blocks-css"
    href="../wp-content/themes/bookory/assets/css/base/gutenberg-blocks3601.css?ver=2.2.0"
    media="all" />

  <link
    rel="stylesheet"
    id="mas-wc-brands-style-css"
    href="../wp-content/plugins/mas-woocommerce-brands/assets/css/stylef488.css?ver=1.1.0"
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
    id="widget-divider-css"
    href="../wp-content/plugins/elementor/assets/css/widget-divider.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="e-animation-wobble-horizontal-css"
    href="../wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-wobble-horizontal.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-image-css"
    href="../wp-content/plugins/elementor/assets/css/widget-image.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-text-editor-css"
    href="../wp-content/plugins/elementor/assets/css/widget-text-editor.min42e3.css?ver=3.26.0"
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
    id="elementor-post-210-css"
    href="../wp-content/uploads/elementor/css/post-210152a.css?ver=1742274011"
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

</head>

<body
  class="page-template-default page page-id-9 wp-custom-logo wp-embed-responsive theme-bookory woocommerce-checkout woocommerce-page woocommerce-js ehf-header ehf-footer ehf-template-bookory ehf-stylesheet-demo-child woo-variation-swatches wvs-behavior-blur wvs-theme-demo-child wvs-show-label wvs-tooltip group-blog woocommerce-active product-block-style-1 bookory-product-laptop-3 bookory-product-tablet-2 bookory-product-mobile-2 elementor-default elementor-kit-4 dokan-theme-bookory e--ua-blink e--ua-edge e--ua-webkit"
  data-elementor-device-mode="tablet"
  style="">
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
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home ">
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
          data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
          style="width: 1024px; left: 0px">
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
                    <div class="bookory-woocommerce-title">Checkout</div>
                    <nav class="woocommerce-breadcrumb">
                      <a href="../index.php">Home</a><i class="bookory-icon-right-arrow"></i>Checkout
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
        <div id="primary">
          <main id="main" class="site-main" role="main">
            <article
              id="post-9"
              class="post-9 page type-page status-publish hentry">
              <div class="entry-content">
                <div class="woocommerce">
                  <div class="woocommerce-notices-wrapper"></div>

                  <div class="woocommerce-notices-wrapper"></div>
                  <form id="paymentForms"
                    class="checkout woocommerce-checkout">
                    <div class="col2-set" id="customer_details">
                      <div class="col-1">
                        <div class="woocommerce-billing-fields">
                          <h3>Shipping details</h3>
                          <div
                            class="woocommerce-billing-fields__field-wrapper">
                            <?php $shipping = select_one_shipping_userID_controller($customer_id);
                            $fname = (!empty($shipping['firstName'])) ? $shipping['firstName'] : $_SESSION['firstName'];
                            $lname = (!empty($shipping['lastName'])) ? $shipping['lastName'] : $_SESSION['lastName'];
                            $street = (!empty($shipping['street'])) ? $shipping['street'] : "";
                            $apartment = (!empty($shipping['apartment'])) ? $shipping['apartment'] : "";
                            $city = (!empty($shipping['city'])) ? $shipping['city'] : "";
                            $zip = (!empty($shipping['zip'])) ? $shipping['zip'] : "";
                            $phone = (!empty($shipping['phone'])) ? $shipping['phone'] : "";
                            $country = (!empty($shipping['country'])) ? $shipping['country'] : "";
                            ?>
                            <input type="hidden" id="email" value=<?php echo $_SESSION['email'] ?>>
                            <input type="hidden" id="amount" value=<?php echo $total['Amount'] ?>>
                            <p
                              class="form-row form-row-first validate-required"
                              id="billing_first_name_field"
                              data-priority="10">
                              <label for="billing_first_name" class="">First name&nbsp;<abbr
                                  class="required"
                                  title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input
                                  type="text"
                                  class="input-text"
                                  name="fname"
                                  id="firstName"
                                  value="<?php echo $fname ?>" required /></span>
                            </p>
                            <p
                              class="form-row form-row-last validate-required"
                              id="billing_last_name_field"
                              data-priority="20">
                              <label for="billing_last_name" class="">Last name&nbsp;<abbr
                                  class="required"
                                  title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input
                                  type="text"
                                  class="input-text" id="lastName"
                                  name="lname"
                                  value="<?php echo $lname ?>" required /></span>
                            </p>
                            <p
                              class="form-row form-row-wide address-field update_totals_on_change validate-required"
                              id="billing_country_field"
                              data-priority="40">
                              <label for="billing_country" class="">Country &nbsp;<abbr
                                  class="required"
                                  title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                                <select style="border-radius: 50px;"
                                  name="country"
                                  class="country_to_state country_select select2-hidden-accessible">
                                  <?php if (empty($country)) { ?> <option value="" disabled selected>
                                      Select a country / region…
                                    </option>
                                  <?php } else { ?>
                                    <option value="<?php echo $country ?>" selected>
                                      <?php echo $country ?>
                                    </option>
                                  <?php } ?>
                                  <option value="AF">Afghanistan</option>
                                  <option value="AX">Åland Islands</option>
                                  <option value="AL">Albania</option>
                                  <option value="DZ">Algeria</option>
                                  <option value="AS">American Samoa</option>
                                  <option value="AD">Andorra</option>
                                  <option value="AO">Angola</option>
                                  <option value="AI">Anguilla</option>
                                  <option value="AQ">Antarctica</option>
                                  <option value="AG">
                                    Antigua and Barbuda
                                  </option>
                                  <option value="AR">Argentina</option>
                                  <option value="AM">Armenia</option>
                                  <option value="AW">Aruba</option>
                                  <option value="AU">Australia</option>
                                  <option value="AT">Austria</option>
                                  <option value="AZ">Azerbaijan</option>
                                  <option value="BS">Bahamas</option>
                                  <option value="BH">Bahrain</option>
                                  <option value="BD">Bangladesh</option>
                                  <option value="BB">Barbados</option>
                                  <option value="BY">Belarus</option>
                                  <option value="PW">Belau</option>
                                  <option value="BE">Belgium</option>
                                  <option value="BZ">Belize</option>
                                  <option value="BJ">Benin</option>
                                  <option value="BM">Bermuda</option>
                                  <option value="BT">Bhutan</option>
                                  <option value="BO">Bolivia</option>
                                  <option value="BQ">
                                    Bonaire, Saint Eustatius and Saba
                                  </option>
                                  <option value="BA">
                                    Bosnia and Herzegovina
                                  </option>
                                  <option value="BW">Botswana</option>
                                  <option value="BV">Bouvet Island</option>
                                  <option value="BR">Brazil</option>
                                  <option value="IO">
                                    British Indian Ocean Territory
                                  </option>
                                  <option value="BN">Brunei</option>
                                  <option value="BG">Bulgaria</option>
                                  <option value="BF">Burkina Faso</option>
                                  <option value="BI">Burundi</option>
                                  <option value="KH">Cambodia</option>
                                  <option value="CM">Cameroon</option>
                                  <option value="CA">Canada</option>
                                  <option value="CV">Cape Verde</option>
                                  <option value="KY">Cayman Islands</option>
                                  <option value="CF">
                                    Central African Republic
                                  </option>
                                  <option value="TD">Chad</option>
                                  <option value="CL">Chile</option>
                                  <option value="CN">China</option>
                                  <option value="CX">Christmas Island</option>
                                  <option value="CC">
                                    Cocos (Keeling) Islands
                                  </option>
                                  <option value="CO">Colombia</option>
                                  <option value="KM">Comoros</option>
                                  <option value="CG">
                                    Congo (Brazzaville)
                                  </option>
                                  <option value="CD">Congo (Kinshasa)</option>
                                  <option value="CK">Cook Islands</option>
                                  <option value="CR">Costa Rica</option>
                                  <option value="HR">Croatia</option>
                                  <option value="CU">Cuba</option>
                                  <option value="CW">Curaçao</option>
                                  <option value="CY">Cyprus</option>
                                  <option value="CZ">Czech Republic</option>
                                  <option value="DK">Denmark</option>
                                  <option value="DJ">Djibouti</option>
                                  <option value="DM">Dominica</option>
                                  <option value="DO">
                                    Dominican Republic
                                  </option>
                                  <option value="EC">Ecuador</option>
                                  <option value="EG">Egypt</option>
                                  <option value="SV">El Salvador</option>
                                  <option value="GQ">
                                    Equatorial Guinea
                                  </option>
                                  <option value="ER">Eritrea</option>
                                  <option value="EE">Estonia</option>
                                  <option value="SZ">Eswatini</option>
                                  <option value="ET">Ethiopia</option>
                                  <option value="FK">Falkland Islands</option>
                                  <option value="FO">Faroe Islands</option>
                                  <option value="FJ">Fiji</option>
                                  <option value="FI">Finland</option>
                                  <option value="FR">France</option>
                                  <option value="GF">French Guiana</option>
                                  <option value="PF">French Polynesia</option>
                                  <option value="TF">
                                    French Southern Territories
                                  </option>
                                  <option value="GA">Gabon</option>
                                  <option value="GM">Gambia</option>
                                  <option value="GE">Georgia</option>
                                  <option value="DE">Germany</option>
                                  <option value="GH">Ghana</option>
                                  <option value="GI">Gibraltar</option>
                                  <option value="GR">Greece</option>
                                  <option value="GL">Greenland</option>
                                  <option value="GD">Grenada</option>
                                  <option value="GP">Guadeloupe</option>
                                  <option value="GU">Guam</option>
                                  <option value="GT">Guatemala</option>
                                  <option value="GG">Guernsey</option>
                                  <option value="GN">Guinea</option>
                                  <option value="GW">Guinea-Bissau</option>
                                  <option value="GY">Guyana</option>
                                  <option value="HT">Haiti</option>
                                  <option value="HM">
                                    Heard Island and McDonald Islands
                                  </option>
                                  <option value="HN">Honduras</option>
                                  <option value="HK">Hong Kong</option>
                                  <option value="HU">Hungary</option>
                                  <option value="IS">Iceland</option>
                                  <option value="IN">India</option>
                                  <option value="ID">Indonesia</option>
                                  <option value="IR">Iran</option>
                                  <option value="IQ">Iraq</option>
                                  <option value="IE">Ireland</option>
                                  <option value="IM">Isle of Man</option>
                                  <option value="IL">Israel</option>
                                  <option value="IT">Italy</option>
                                  <option value="CI">Ivory Coast</option>
                                  <option value="JM">Jamaica</option>
                                  <option value="JP">Japan</option>
                                  <option value="JE">Jersey</option>
                                  <option value="JO">Jordan</option>
                                  <option value="KZ">Kazakhstan</option>
                                  <option value="KE">Kenya</option>
                                  <option value="KI">Kiribati</option>
                                  <option value="KW">Kuwait</option>
                                  <option value="KG">Kyrgyzstan</option>
                                  <option value="LA">Laos</option>
                                  <option value="LV">Latvia</option>
                                  <option value="LB">Lebanon</option>
                                  <option value="LS">Lesotho</option>
                                  <option value="LR">Liberia</option>
                                  <option value="LY">Libya</option>
                                  <option value="LI">Liechtenstein</option>
                                  <option value="LT">Lithuania</option>
                                  <option value="LU">Luxembourg</option>
                                  <option value="MO">Macao</option>
                                  <option value="MG">Madagascar</option>
                                  <option value="MW">Malawi</option>
                                  <option value="MY">Malaysia</option>
                                  <option value="MV">Maldives</option>
                                  <option value="ML">Mali</option>
                                  <option value="MT">Malta</option>
                                  <option value="MH">Marshall Islands</option>
                                  <option value="MQ">Martinique</option>
                                  <option value="MR">Mauritania</option>
                                  <option value="MU">Mauritius</option>
                                  <option value="YT">Mayotte</option>
                                  <option value="MX">Mexico</option>
                                  <option value="FM">Micronesia</option>
                                  <option value="MD">Moldova</option>
                                  <option value="MC">Monaco</option>
                                  <option value="MN">Mongolia</option>
                                  <option value="ME">Montenegro</option>
                                  <option value="MS">Montserrat</option>
                                  <option value="MA">Morocco</option>
                                  <option value="MZ">Mozambique</option>
                                  <option value="MM">Myanmar</option>
                                  <option value="NA">Namibia</option>
                                  <option value="NR">Nauru</option>
                                  <option value="NP">Nepal</option>
                                  <option value="NL">Netherlands</option>
                                  <option value="NC">New Caledonia</option>
                                  <option value="NZ">New Zealand</option>
                                  <option value="NI">Nicaragua</option>
                                  <option value="NE">Niger</option>
                                  <option value="NG">Nigeria</option>
                                  <option value="NU">Niue</option>
                                  <option value="NF">Norfolk Island</option>
                                  <option value="KP">North Korea</option>
                                  <option value="MK">North Macedonia</option>
                                  <option value="MP">
                                    Northern Mariana Islands
                                  </option>
                                  <option value="NO">Norway</option>
                                  <option value="OM">Oman</option>
                                  <option value="PK">Pakistan</option>
                                  <option value="PS">
                                    Palestinian Territory
                                  </option>
                                  <option value="PA">Panama</option>
                                  <option value="PG">Papua New Guinea</option>
                                  <option value="PY">Paraguay</option>
                                  <option value="PE">Peru</option>
                                  <option value="PH">Philippines</option>
                                  <option value="PN">Pitcairn</option>
                                  <option value="PL">Poland</option>
                                  <option value="PT">Portugal</option>
                                  <option value="PR">Puerto Rico</option>
                                  <option value="QA">Qatar</option>
                                  <option value="RE">Reunion</option>
                                  <option value="RO">Romania</option>
                                  <option value="RU">Russia</option>
                                  <option value="RW">Rwanda</option>
                                  <option value="BL">Saint Barthélemy</option>
                                  <option value="SH">Saint Helena</option>
                                  <option value="KN">
                                    Saint Kitts and Nevis
                                  </option>
                                  <option value="LC">Saint Lucia</option>
                                  <option value="SX">
                                    Saint Martin (Dutch part)
                                  </option>
                                  <option value="MF">
                                    Saint Martin (French part)
                                  </option>
                                  <option value="PM">
                                    Saint Pierre and Miquelon
                                  </option>
                                  <option value="VC">
                                    Saint Vincent and the Grenadines
                                  </option>
                                  <option value="WS">Samoa</option>
                                  <option value="SM">San Marino</option>
                                  <option value="ST">
                                    São Tomé and Príncipe
                                  </option>
                                  <option value="SA">Saudi Arabia</option>
                                  <option value="SN">Senegal</option>
                                  <option value="RS">Serbia</option>
                                  <option value="SC">Seychelles</option>
                                  <option value="SL">Sierra Leone</option>
                                  <option value="SG">Singapore</option>
                                  <option value="SK">Slovakia</option>
                                  <option value="SI">Slovenia</option>
                                  <option value="SB">Solomon Islands</option>
                                  <option value="SO">Somalia</option>
                                  <option value="ZA">South Africa</option>
                                  <option value="GS">
                                    South Georgia/Sandwich Islands
                                  </option>
                                  <option value="KR">South Korea</option>
                                  <option value="SS">South Sudan</option>
                                  <option value="ES">Spain</option>
                                  <option value="LK">Sri Lanka</option>
                                  <option value="SD">Sudan</option>
                                  <option value="SR">Suriname</option>
                                  <option value="SJ">
                                    Svalbard and Jan Mayen
                                  </option>
                                  <option value="SE">Sweden</option>
                                  <option value="CH">Switzerland</option>
                                  <option value="SY">Syria</option>
                                  <option value="TW">Taiwan</option>
                                  <option value="TJ">Tajikistan</option>
                                  <option value="TZ">Tanzania</option>
                                  <option value="TH">Thailand</option>
                                  <option value="TL">Timor-Leste</option>
                                  <option value="TG">Togo</option>
                                  <option value="TK">Tokelau</option>
                                  <option value="TO">Tonga</option>
                                  <option value="TT">
                                    Trinidad and Tobago
                                  </option>
                                  <option value="TN">Tunisia</option>
                                  <option value="TR">Turkey</option>
                                  <option value="TM">Turkmenistan</option>
                                  <option value="TC">
                                    Turks and Caicos Islands
                                  </option>
                                  <option value="TV">Tuvalu</option>
                                  <option value="UG">Uganda</option>
                                  <option value="UA">Ukraine</option>
                                  <option value="AE">
                                    United Arab Emirates
                                  </option>
                                  <option value="GB">
                                    United Kingdom (UK)
                                  </option>
                                  <option value="US">
                                    United States (US)
                                  </option>
                                  <option value="UM">
                                    United States (US) Minor Outlying Islands
                                  </option>
                                  <option value="UY">Uruguay</option>
                                  <option value="UZ">Uzbekistan</option>
                                  <option value="VU">Vanuatu</option>
                                  <option value="VA">Vatican</option>
                                  <option value="VE">Venezuela</option>
                                  <option value="VN">Vietnam</option>
                                  <option value="VG">
                                    Virgin Islands (British)
                                  </option>
                                  <option value="VI">
                                    Virgin Islands (US)
                                  </option>
                                  <option value="WF">
                                    Wallis and Futuna
                                  </option>
                                  <option value="EH">Western Sahara</option>
                                  <option value="YE">Yemen</option>
                                  <option value="ZM">Zambia</option>
                                  <option value="ZW">Zimbabwe</option>
                                </select>

                            </p>
                            <p
                              class="form-row address-field validate-required form-row-wide"
                              id="billing_address_1_field"
                              data-priority="50">
                              <label for="billing_address_1" class="">Street address&nbsp;<abbr
                                  class="required"
                                  title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input
                                  type="text"
                                  class="input-text"
                                  name="street"
                                  id="street"
                                  value="<?php echo $street ?>" required /></span>
                            </p>
                            <p
                              class="form-row address-field form-row-wide"
                              id="billing_address_2_field"
                              data-priority="60">
                              <label
                                for="billing_address_2"
                                class="screen-reader-text">Apartment, suite, unit, etc.&nbsp;<span
                                  class="optional">(optional)</span></label><span class="woocommerce-input-wrapper"><input
                                  type="text"
                                  class="input-text"
                                  name="apartment"
                                  id="apartment"
                                  placeholder="Apartment, suite, unit, etc. (optional)"
                                  value="<?php echo $apartment ?>" /></span>
                            </p>
                            <p
                              class="form-row address-field validate-required form-row-wide"
                              id="billing_city_field"
                              data-priority="70"
                              data-o_class="form-row form-row-wide address-field validate-required">
                              <label for="billing_city" class="">City / State&nbsp;<abbr
                                  class="required"
                                  title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input
                                  type="text"
                                  class="input-text"
                                  name="city"
                                  id="city"
                                  value="<?php echo $city ?>" required /></span>
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
                                  id="zip"
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
                        </div>
                      </div>

                      <div class="col-2">
                        <div class="woocommerce-shipping-fields"></div>
                        <div class="woocommerce-additional-fields">
                          <h3>Additional information</h3>

                          <div
                            class="woocommerce-additional-fields__field-wrapper">
                            <p
                              class="form-row notes"
                              id="order_comments_field"
                              data-priority="">
                              <label for="order_comments" class="">Order notes&nbsp;<span class="optional">(optional)</span></label><span class="woocommerce-input-wrapper">
                                <textarea
                                  name="order_comments"
                                  class="input-text"
                                  id="order_comments"
                                  placeholder="Notes about your order, e.g. special notes for delivery."
                                  rows="2"
                                  cols="5"></textarea>
                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      id="order_review"
                      class="woocommerce-checkout-review-order">
                      <h3 id="order_review_heading">Your order</h3>
                      <div class="checkout-review-order-table-wrapper">
                        <table
                          class="shop_table woocommerce-checkout-review-order-table">
                          <thead>
                            <tr>
                              <th class="product-name">Product</th>
                              <th class="product-total">Subtotal</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $checkouts = select_user_cart_controller($customer_id);
                            foreach ($checkouts as $all) {
                            ?>
                              <tr class="cart_item">
                                <td class="product-name">
                                  <?php echo $all['productName'] ?>&nbsp;
                                  <strong class="product-quantity">×&nbsp;<?php echo $all['quantity'] ?></strong>
                                  <dl class="variation">
                                    <dt class="variation-Vendor">Category:</dt>
                                    <dd class="variation-Vendor">
                                      <p><?php echo $all['productCategory'] ?></p>
                                    </dd>
                                  </dl>
                                </td>
                                <td class="product-total">
                                  <span class="woocommerce-Price-amount amount"><span
                                      class="woocommerce-Price-currencySymbol">₵</span><?php echo number_format($all['productPrice'] * $all['quantity'], 2) ?></span>
                                </td>
                              </tr>
                            <?php } ?>

                          </tbody>
                          <tfoot>
                            <tr class="cart-subtotal">
                              <th>Subtotal</th>
                              <td>
                                <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">₵</span><?php echo $total['Amount'] ?></span>
                              </td>
                            </tr>

                            <tr class="order-total">
                              <th>Total</th>
                              <td>
                                <strong><span
                                    class="woocommerce-Price-amount amount"><span
                                      class="woocommerce-Price-currencySymbol">₵</span><?php echo $total['Amount'] ?></span></strong>
                              </td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <div id="payment" class="woocommerce-checkout-payment">
                        <div class="form-row place-order">
                          <div
                            class="woocommerce-terms-and-conditions-wrapper">
                            <div class="woocommerce-privacy-policy-text">
                              <p>
                                Your personal data will be used to process
                                your order, support your experience throughout
                                this website, and for other purposes described
                                in our
                                <a
                                  href=""
                                  class="woocommerce-privacy-policy-link"
                                  target="_blank">Privacy policy</a>.
                              </p>
                            </div>
                          </div>

                          <button type="submit" class="button alt" name="woocommerce_checkout_place_order">Place order</button>

                        </div>
                      </div>
                    </div>
                  </form>
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
  </div>
  <!-- #page -->

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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <script>
    const paymentForm = document.getElementById('paymentForms');
    paymentForm.addEventListener("submit", payWithPaystack, false);

    // PAYMENT FUNCTION
    function payWithPaystack(e) {
      e.preventDefault();
      let handler = PaystackPop.setup({
        key: 'pk_test_9a66f0be5bdc776def0d8776416b637dc1060720', // Replace with your public key
        email: document.getElementById("email").value,
        amount: document.getElementById("amount").value * 100,
        currency: 'GHS',
        onClose: function() {
          Swal.fire({
            title: 'Cancellation!',
            text: 'You are choosing to stop placing your order!',
            icon: 'warning',
            button: 'OK'
          })
        },
        callback: function(response) {
          window.location = `../action/add_payment.php?email=${document.getElementById("email").value}&amount=${document.getElementById("amount").value}&firstName=${document.getElementById("firstName").value}&lastName=${document.getElementById("lastName").value}&phone=${document.getElementById("phone").value}&street=${document.getElementById("street").value}&country=${document.getElementById("country").value}&apartment=${document.getElementById("apartment").value}&city=${document.getElementById("city").value}&reference=${response.reference}`
          Swal.fire({
            title: 'Please Wait !',
            html: 'Payment processing',
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => {
              Swal.showLoading()
            },
          });
        }
      });
      handler.openIframe();
    }
  </script>
  <script src="../wp-content/intlTelInput.js"></script>
  <script>
    var phone_number = window.intlTelInput(document.querySelector("#phone"), {
      separateDialCode: true,
      preferredCountries: ["gh"],
      hiddenInput: "full",
      utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });

    $("#paymentForms").submit(function() {
      var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
      $("input[name='phone[full]'").val(full_number)
    });
  </script>
  <link rel='stylesheet' id='wc-blocks-style-css'
    href='../wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksfbdf.css?ver=wc-9.5.1' media='all' />
  <link rel='stylesheet' id='widget-icon-list-css'
    href='../wp-content/uploads/elementor/css/custom-widget-icon-list.min2420.css?ver=1742270149' media='all' />
  <link rel='stylesheet' id='e-animation-shrink-css'
    href='../wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.min42e3.css?ver=3.26.0'
    media='all' />
  <link rel='stylesheet' id='widget-social-icons-css'
    href='../wp-content/plugins/elementor/assets/css/widget-social-icons.min42e3.css?ver=3.26.0' media='all' />
  <link rel='stylesheet' id='e-apple-webkit-css'
    href='../wp-content/uploads/elementor/css/custom-apple-webkit.min2420.css?ver=1742270149' media='all' />
  <link rel='stylesheet' id='elementor-post-3161-css'
    href='../wp-content/uploads/elementor/css/post-3161206e.css?ver=1742270152' media='all' />
  <link rel='stylesheet' id='widget-icon-box-css'
    href='../wp-content/uploads/elementor/css/custom-widget-icon-box.min2420.css?ver=1742270149' media='all' />
  <link rel='stylesheet' id='rs-plugin-settings-css'
    href='../wp-content/plugins/revslider/sr6/assets/css/rs6efd5.css?ver=6.7.18' media='all' />
  <script src="../wp-content/plugins/revslider/sr6/assets/js/rbtools.minefd5.js?ver=6.7.18" defer async
    id="tp-tools-js"></script>
  <script src="../wp-content/plugins/revslider/sr6/assets/js/rs6.minefd5.js?ver=6.7.18" defer async
    id="revmin-js"></script>
  <script src="../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0" id="wp-polyfill-js"></script>
  <script src="../wp-includes/js/dist/url.min9481.js?ver=e87eb76272a3a08402d2" id="wp-url-js"></script>
  <script src="../wp-content/plugins/woo-variation-swatches/assets/js/frontend.min63ce.js?ver=1732076616"
    id="woo-variation-swatches-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/frontend/main3601.js?ver=2.2.0" id="bookory-theme-js"></script>
  <script src="../wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/skip-link-focus-fix.min08e0.js?ver=20130115"
    id="bookory-skip-link-focus-fix-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/frontend/search-popup3601.js?ver=2.2.0"
    id="bookory-search-popup-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/frontend/text-editor3601.js?ver=2.2.0"
    id="bookory-text-editor-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/frontend/nav-mobile3601.js?ver=2.2.0"
    id="bookory-nav-mobile-js"></script>
  <script src="../wp-content/themes/bookory/inc/megamenu/assets/js/frontend3601.js?ver=2.2.0"
    id="bookory-megamenu-frontend-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/frontend/login3601.js?ver=2.2.0"
    id="bookory-ajax-login-js"></script>
  <script src="../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min0c46.js?ver=9.5.1"
    id="wc-add-to-cart-variation-js" data-wp-strategy="defer"></script>
  <script src="../wp-content/themes/bookory/assets/js/vendor/slick.min3601.js?ver=2.2.0" id="slick-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/vendor/jquery.magnific-popup.min3601.js?ver=2.2.0"
    id="magnific-popup-js"></script>
  <script src="../wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min0c46.js?ver=9.5.1"
    id="sourcebuster-js-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/woocommerce/header-cart.min3601.js?ver=2.2.0"
    id="bookory-header-cart-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/tooltipster.bundle3601.js?ver=2.2.0"
    id="tooltipster-js"></script>

  <script src="../wp-content/themes/bookory/assets/js/woocommerce/main.min3601.js?ver=2.2.0"
    id="bookory-products-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/woocommerce/quantity.min3601.js?ver=2.2.0"
    id="bookory-input-quantity-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/woocommerce/off-canvas.min3601.js?ver=2.2.0"
    id="bookory-off-canvas-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/woocommerce/cart-canvas.min3601.js?ver=2.2.0"
    id="bookory-cart-canvas-js"></script>
  <script src="../wp-content/plugins/elementor/assets/js/webpack.runtime.min42e3.js?ver=3.26.0"
    id="elementor-webpack-runtime-js"></script>
  <script src="../wp-content/plugins/elementor/assets/js/frontend-modules.min42e3.js?ver=3.26.0"
    id="elementor-frontend-modules-js"></script>
  <script src="../wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/elementor-frontend3601.js?ver=2.2.0"
    id="bookory-elementor-frontend-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/vendor/jquery.sticky3601.js?ver=2.2.0"
    id="elementor-sticky-js"></script>
  <script src="../wp-content/themes/bookory/assets/js/vendor/sticky3601.js?ver=2.2.0"
    id="bookory-elementor-sticky-js"></script>
  <script src="../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min0c46.js?ver=9.5.1"
    id="wc-cart-fragments-js" defer data-wp-strategy="defer"></script>

</body>

</html>