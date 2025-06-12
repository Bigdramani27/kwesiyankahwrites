<?php
session_start();
require('controllers/customer_controller.php');
require('controllers/product_controller.php');
require('controllers/cart_controller.php');
$customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "0";
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
  <link
    rel="stylesheet"
    id="dashicons-css"
    href="wp-includes/css/dashicons.mind1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-widgets-style-css"
    href="wp-content/plugins/header-footer-elementor/inc/widgets-css/frontendb95e.css?ver=2.0.3"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-gutenberg-blocks-css"
    href="wp-content/themes/bookory/assets/css/base/gutenberg-blocks3601.css?ver=2.2.0"
    media="all" />

  <link
    rel="stylesheet"
    id="mas-wc-brands-style-css"
    href="wp-content/plugins/mas-woocommerce-brands/assets/css/stylef488.css?ver=1.1.0"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-style-css"
    href="wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementorb95e.css?ver=2.0.3"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-icons-css"
    href="wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min705c.css?ver=5.34.0"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-frontend-css"
    href="wp-content/uploads/elementor/css/custom-frontend.min2420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-4-css"
    href="wp-content/uploads/elementor/css/post-42420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="font-awesome-5-all-css"
    href="wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="font-awesome-4-shim-css"
    href="wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-divider-css"
    href="wp-content/plugins/elementor/assets/css/widget-divider.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="e-animation-wobble-horizontal-css"
    href="wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-wobble-horizontal.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-image-css"
    href="wp-content/plugins/elementor/assets/css/widget-image.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-text-editor-css"
    href="wp-content/plugins/elementor/assets/css/widget-text-editor.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-heading-css"
    href="wp-content/plugins/elementor/assets/css/widget-heading.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-icon-box-css"
    href="wp-content/uploads/elementor/css/custom-widget-icon-box.min2420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-210-css"
    href="wp-content/uploads/elementor/css/post-210152a.css?ver=1742274011"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-125-css"
    href="wp-content/uploads/elementor/css/post-1255db7.css?ver=1742270151"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-329-css"
    href="wp-content/uploads/elementor/css/post-3295db7.css?ver=1742270151"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-751-css"
    href="wp-content/uploads/elementor/css/post-7515db7.css?ver=1742270151"
    media="all" />
  <link
    rel="stylesheet"
    id="woo-variation-swatches-css"
    href="wp-content/plugins/woo-variation-swatches/assets/css/frontend.min63ce.css?ver=1732076616"
    media="all" />

  <link
    rel="stylesheet"
    id="perfect-scrollbar-css"
    href="wp-content/plugins/woo-smart-wishlist/assets/libs/perfect-scrollbar/css/perfect-scrollbar.mind1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="perfect-scrollbar-wpc-css"
    href="wp-content/plugins/woo-smart-wishlist/assets/libs/perfect-scrollbar/css/custom-themed1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="woosw-icons-css"
    href="wp-content/plugins/woo-smart-wishlist/assets/css/icons1845.css?ver=4.9.6"
    media="all" />
  <link
    rel="stylesheet"
    id="woosw-frontend-css"
    href="wp-content/plugins/woo-smart-wishlist/assets/css/frontend1845.css?ver=4.9.6"
    media="all" />

  <link
    rel="stylesheet"
    id="bookory-style-css"
    href="wp-content/themes/bookory/style3601.css?ver=2.2.0"
    media="all" />

  <link
    rel="stylesheet"
    id="slick-css"
    href="wp-content/themes/bookory/assets/css/base/slick3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="slick-theme-css"
    href="wp-content/themes/bookory/assets/css/base/slick-theme3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-fonts-css"
    href="http://fonts.googleapis.com/css?family=Sora:300,400,500,600,700&amp;subset=latin%2Clatin-ext&amp;display=swap"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-dokan-style-css"
    href="wp-content/themes/bookory/assets/css/dokan/dokan3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="magnific-popup-css"
    href="wp-content/themes/bookory/assets/css/libs/magnific-popup3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="woosq-feather-css"
    href="wp-content/plugins/woo-smart-quick-view/assets/libs/feather/featherd1c0.css?ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="woosq-frontend-css"
    href="wp-content/plugins/woo-smart-quick-view/assets/css/frontendeda1.css?ver=4.1.4"
    media="all" />

  <link
    rel="stylesheet"
    id="bookory-elementor-css"
    href="wp-content/themes/bookory/assets/css/base/elementor3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-icons-list-css"
    href="wp-content/plugins/elementor/assets/css/widget-icon-list.min44b4.css?ver=3.24.3"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-social-icons-css"
    href="wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css?ver=3.24.0"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-social-share-icons-brands-css"
    href="wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-social-share-icons-fontawesome-css"
    href="wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="hfe-nav-menu-icons-css"
    href="wp-content/plugins/elementor/assets/lib/font-awesome/css/solid52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="bookory-woocommerce-style-css"
    href="wp-content/themes/bookory/assets/css/woocommerce/woocommerce3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="tooltipster-css"
    href="wp-content/themes/bookory/assets/css/libs/tooltipster.bundle.min3601.css?ver=2.2.0"
    media="all" />
  <link
    rel="stylesheet"
    id="google-fonts-1-css"
    href="https://fonts.googleapis.com/css?family=Sora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.7.2"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-icons-shared-0-css"
    href="wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-icons-fa-brands-css"
    href="wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-icons-fa-regular-css"
    href="wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3"
    media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

  <script
    src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1"
    id="jquery-core-js"></script>
  <script
    src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
    id="jquery-migrate-js"></script>
  <style>
    .home-390 {
      height: 390px !important
    }

    @media (max-width: 1200px) {
      .home-390 {
        height: 190px !important
      }
    }

    @media (min-width: 1210px) and (max-width: 1390px) {
      .home-390 {
        height: 300px !important
      }
    }


    .home-370 {
      height: 370px !important
    }

    @media (max-width: 1200px) {
      .home-370 {
        height: 170px !important
      }
    }

    @media (min-width: 1210px) and (max-width: 1390px) {
      .home-370 {
        height: 280px !important
      }
    }

    .home-120 {
      height: 170px !important;
      width: 200px !important;
    }

    @media (max-width: 720px) {
      .home-120 {
        height: 100px !important;
      }
    }
  </style>
</head>

<body
  class="home page-template page-template-template-homepage page-template-template-homepage-php page page-id-210 wp-custom-logo wp-embed-responsive theme-bookory woocommerce-no-js ehf-header ehf-footer ehf-template-bookory ehf-stylesheet-demo-child woo-variation-swatches wvs-behavior-blur wvs-theme-demo-child wvs-show-label wvs-tooltip group-blog woocommerce-active product-block-style-1 elementor-default elementor-kit-4 elementor-page elementor-page-210 dokan-theme-bookory">
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
                        href="contact/index.php">
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
                        href="index.php">
                        <div class="hfe-site-logo-set">
                          <div class="hfe-site-logo-container">
                            <img
                              class="hfe-site-logo-img elementor-animation-"
                              src="wp-content/uploads/images/logo.png"
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
                              href="cart/index.php"
                              title="View your shopping cart">
                              <?php if ($cart != 0) { ?> <span class="count"><?php echo $cart ?></span> <?php } ?>
                            </a>
                          <?php } else {  ?>
                            <a
                              class="cart-contents"
                              href="my-account/index.php"
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
                                      href="my-account/index.php">
                                      <i class="bookory-icon-account"></i>
                                    </a>
                                  </div>
                                <?php   } ?>


                                <div class="site-header-wishlist">
                                  <?php if ($customer_id != 0) {  ?>
                                    <a
                                      class="header-wishlist"
                                      href="wishlist/index.php">
                                      <i class="bookory-icon-heart-1"></i>
                                      <?php if ($count != 0) { ?> <span class="count"><?php echo $count ?></span> <?php } ?>
                                    </a>
                                  <?php } else { ?>
                                    <a
                                      class="header-wishlist"
                                      href="my-account/index.php">
                                      <i class="bookory-icon-heart-1"></i>
                                    </a>
                                  <?php } ?>
                                </div>

                                <div class="site-header-cart menu">
                                  <?php if ($customer_id != 0) {  ?>
                                    <a
                                      class="cart-contents"
                                      href="cart/index.php"
                                      title="View your shopping cart">
                                      <?php if ($cart != 0) { ?> <span class="count"><?php echo $cart ?></span> <?php } ?>
                                    </a>
                                  <?php } else { ?>
                                    <a
                                      class="cart-contents"
                                      href="my-account/index.php"
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
                              <a href="index.php"><span class="menu-title">Home</span></a>
                            </li>
                            <li
                              id="menu-item-2842"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="shop/index.php"><span class="menu-title">Shop</span></a>
                            </li>
                            <li
                              id="menu-item-1191"
                              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1191">
                              <a href="#"><span class="menu-title">Categories</span></a>
                              <ul class="sub-menu">
                                <li
                                  id="menu-item-5751"
                                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5751">
                                  <a href="categories/index.php?category=<?php echo urlencode('Sole-Authored Books'); ?>"><span class="menu-title">Sole-Authored Books</span></a>
                                </li>
                                <li
                                  id="menu-item-6157"
                                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6157">
                                  <a
                                    href="categories/index.php?category=<?php echo urlencode('Monographs'); ?>"><span class="menu-title">Monographs</span></a>
                                </li>
                                <li
                                  id="menu-item-3154"
                                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3154">
                                  <a href="categories/index.php?category=<?php echo urlencode('Edited Volumes'); ?>"><span class="menu-title">Edited Volumes</span></a>
                                </li>
                                <li
                                  id="menu-item-3156"
                                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
                                  <a href="categories/index.php?category=<?php echo urlencode('On the Author’s Work'); ?>"><span class="menu-title">On the Author’s Work</span></a>
                                </li>
                                <li
                                  id="menu-item-6218"
                                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218">
                                  <a href="categories/index.php?category=<?php echo urlencode('Book Chapters'); ?>"><span class="menu-title">Book Chapters
                                    </span></a>
                                </li>
                                <li
                                  id="menu-item-6218"
                                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218">
                                  <a href="categories/index.php?category=<?php echo urlencode('Journal Articles'); ?>"><span class="menu-title">Journal Articles
                                    </span></a>
                                </li>
                              </ul>
                            </li>
                            <li
                              id="menu-item-2842"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="author/index.php"><span class="menu-title">Author</span></a>
                            </li>
                            <li
                              id="menu-item-2842"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home">
                              <a href="faq/index.php"><span class="menu-title">FAQ</span></a>
                            </li>
                            <li
                              id="menu-item-3150"
                              class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3150">
                              <a href="contact/index.php"><span class="menu-title">Contact</span></a>
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

    <div class="breadcrumb-wrap"></div>
    <div id="content" class="site-content" tabindex="-1">
      <div class="col-full">
        <div class="woocommerce"></div>
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
            <div
              data-elementor-type="wp-page"
              data-elementor-id="210"
              class="elementor elementor-210">
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2110288 elementor-section-full_width elementor-section-stretched elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle"
                data-id="2110288"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d4a1ea"
                    data-id="8d4a1ea"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-2a8067f elementor-widget elementor-widget-slider_revolution"
                        data-id="2a8067f"
                        data-element_type="widget"
                        data-widget_type="slider_revolution.default">
                        <div class="elementor-widget-container">
                          <div class="wp-block-themepunch-revslider">
                            <!-- START Slider 1 REVOLUTION SLIDER 6.7.18 -->
                            <p class="rs-p-wp-fix"></p>
                            <rs-module-wrap
                              id="rev_slider_1_1_wrapper"
                              data-source="gallery"
                              style="
                                  visibility: hidden;
                                  background: transparent;
                                  padding: 0;
                                  margin: 0px auto;
                                  margin-top: 0;
                                  margin-bottom: 0;
                                ">
                              <rs-module
                                id="rev_slider_1_1"
                                style=""
                                data-version="6.7.18">
                                <rs-slides
                                  style="overflow: hidden; position: absolute">
                                  <rs-slide
                                    style="position: absolute"
                                    data-key="rs-1"
                                    data-title="Slide"
                                    data-anim="adpr:false;f:random;"
                                    data-in="o:0;r:ran(-45|45);sx:0;sy:0;row:5;col:5;"
                                    data-out="a:false;">
                                    <img
                                      fetchpriority="high"
                                      decoding="async"
                                      src="wp-content/plugins/revslider/sr6/assets/assets/dummy.png"
                                      alt=""
                                      title="revslider_1"
                                      width="1920"
                                      height="600"
                                      class="rev-slidebg tp-rs-img rs-lazyload"
                                      data-lazyload="wp-content/uploads/images/home.png"
                                      data-parallax="15"
                                      data-panzoom="d:19000ms;ss:130%;se:100%;"
                                      data-no-retina />
                                    <!--						--><rs-zone
                                      id="rrzm_1"
                                      class="rev_row_zone_middle"
                                      style="z-index: 15"><!--

								--><rs-row
                                        id="slider-1-slide-1-layer-0"
                                        data-type="row"
                                        data-xy="xo:50px;yo:50px;"
                                        data-cbreak="1"
                                        data-rsp_bd="off"
                                        data-margin="t:80,80,60,60;r:30,30,30,15;b:80,80,60,60;l:30,30,30,15;"
                                        data-frame_0="o:1;"
                                        data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                        style="z-index: 1"><!--
									--><rs-column
                                          id="slider-1-slide-1-layer-1"
                                          data-type="column"
                                          data-xy="xo:50px;yo:50px;"
                                          data-rsp_bd="off"
                                          data-column="w:60%;"
                                          data-padding="t:10;r:10;b:10;l:10;"
                                          data-frame_0="o:1;"
                                          data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                          style="z-index: 2; width: 100%"><!--									--></rs-column><!--

									--><rs-column
                                          id="slider-1-slide-1-layer-2"
                                          data-type="column"
                                          data-xy="xo:50px;yo:50px;"
                                          data-text="a:center;"
                                          data-rsp_bd="off"
                                          data-column="w:40%;"
                                          data-frame_0="o:1;"
                                          data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                          style="z-index: 3; width: 100%"><!--
										--><rs-layer
                                            id="slider-1-slide-1-layer-4"
                                            data-type="text"
                                            data-color="#999999"
                                            data-xy="xo:50px,33px,25px,15px;yo:50px,33px,25px,15px;"
                                            data-pos="r"
                                            data-text="w:normal;s:12;l:20;a:center;"
                                            data-rsp_bd="off"
                                            data-margin="b:25,25,19,12;"
                                            data-frame_0="rX:70deg;oZ:-50;"
                                            data-frame_0_chars="d:5;y:cyc(-100||100);o:0;"
                                            data-frame_1="oZ:-50;e:power4.inOut;sp:1750;"
                                            data-frame_1_chars="e:power4.inOut;dir:middletoedge;d:10;"
                                            data-frame_999="o:0;st:w;sR:5650;"
                                            style="
                                                z-index: 4;
                                                font-family: 'Sora';
                                                text-transform: uppercase;
                                              ">Your bookshelf starts here</rs-layer><!--

										--><rs-layer
                                            id="slider-1-slide-1-layer-5"
                                            data-type="text"
                                            data-color="#000000"
                                            data-rsp_ch="on"
                                            data-xy="xo:50px,33px,25px,15px;yo:50px,33px,25px,15px;"
                                            data-pos="r"
                                            data-text="w:normal;s:64,52,46,38;l:72,52,55,48;ls:-2px,-1px,0px,0px;fw:600;a:center;"
                                            data-frame_0="x:-50,-33,-25,-15;"
                                            data-frame_1="st:550;sp:1000;"
                                            data-frame_999="o:0;st:w;sR:7450;"
                                            style="
                                                z-index: 5;
                                                font-family: 'Sora';
                                                text-transform: capitalize;
                                              ">Discover. Read. </rs-layer><!--

										--><rs-layer
                                            id="slider-1-slide-1-layer-8"
                                            data-type="text"
                                            data-color="#000000"
                                            data-rsp_ch="on"
                                            data-xy="xo:50px,33px,25px,15px;yo:50px,33px,25px,15px;"
                                            data-pos="r"
                                            data-text="w:normal;s:64,52,46,38;l:72,52,55,48;ls:-2px,-1px,0px,0px;fw:600;a:center;"
                                            data-margin="b:15;"
                                            data-frame_0="x:50,33,25,15;"
                                            data-frame_1="st:550;sp:1000;"
                                            data-frame_999="o:0;st:w;sR:7450;"
                                            style="
                                                z-index: 6;
                                                font-family: 'Sora';
                                                text-transform: capitalize;
                                              "> Repeat. </rs-layer><!--

										--><rs-layer
                                            id="slider-1-slide-1-layer-6"
                                            data-type="text"
                                            data-color="#f65d4e"
                                            data-xy="xo:50px,33px,25px,15px;yo:50px,33px,25px,15px;"
                                            data-pos="r"
                                            data-text="w:normal;s:16;l:24;fw:600;a:center;"
                                            data-rsp_bd="off"
                                            data-margin="b:25;"
                                            data-frame_0="y:50,33,25,15;"
                                            data-frame_1="st:1100;sp:1000;sR:1100;"
                                            data-frame_999="o:0;st:w;sR:6900;"
                                            style="
                                                z-index: 7;
                                                font-family: 'Sora';
                                                text-transform: capitalize;
                                              ">Browse, Buy, and Start Reading </rs-layer><!--

										--><a
                                            id="slider-1-slide-1-layer-7"
                                            class="rs-layer btn-effect rev-btn"
                                            href="shop/index.php"
                                            target="_self"
                                            data-type="button"
                                            data-color="#000000"
                                            data-xy="xo:50px,33px,25px,15px;yo:50px,33px,25px,15px;"
                                            data-pos="r"
                                            data-text="w:normal;s:14;l:17;fw:600;a:center;"
                                            data-dim="minh:0px,none,none,none;"
                                            data-rsp_bd="off"
                                            data-disp="inline-block"
                                            data-padding="t:17,15,15,15;r:30;b:17,15,15,15;l:30;"
                                            data-border="bor:50px,50px,50px,50px;"
                                            data-frame_0="y:50,33,25,15;"
                                            data-frame_1="st:1710;sp:1000;sR:1710;"
                                            data-frame_999="o:0;st:w;sR:6290;"
                                            data-frame_hover="c:#fff;bgc:#000;bor:50px,50px,50px,50px;"
                                            style="
                                                z-index: 8;
                                                background-color: rgba(
                                                  255,
                                                  255,
                                                  255,
                                                  1
                                                );
                                                font-family: 'Sora';
                                                display: inline-block;
                                              ">Shop Now &nbsp;
                                            <i
                                              class="bookory-icon- bookory-icon-angle-right c-primary"
                                              style="font-size: 18px"></i> </a><!--
									--></rs-column><!--
								--></rs-row><!--
							--></rs-zone><!--


-->
                                  </rs-slide>
                                </rs-slides>
                              </rs-module>
                              <script>
                                setREVStartSize({
                                  c: "rev_slider_1_1",
                                  rl: [1240, 1025, 778, 480],
                                  el: [600, 500, 450, 450],
                                  gw: [1550, 1024, 778, 480],
                                  gh: [600, 500, 450, 450],
                                  type: "standard",
                                  justify: "",
                                  layout: "fullwidth",
                                  mh: "0",
                                });
                                if (
                                  window.RS_MODULES !== undefined &&
                                  window.RS_MODULES.modules !== undefined &&
                                  window.RS_MODULES.modules["revslider11"] !==
                                  undefined
                                ) {
                                  window.RS_MODULES.modules[
                                    "revslider11"
                                  ].once = false;
                                  window.revapi1 = undefined;
                                  if (
                                    window.RS_MODULES.checkMinimal !==
                                    undefined
                                  )
                                    window.RS_MODULES.checkMinimal();
                                }
                              </script>
                            </rs-module-wrap>
                            <!-- END REVOLUTION SLIDER -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-176b536 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="176b536"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-29c79a2"
                    data-id="29c79a2"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-5ad6a50 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-left elementor-widget__width-initial elementor-widget-tablet_extra__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile_extra__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-divider"
                        data-id="5ad6a50"
                        data-element_type="widget"
                        data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                              <span
                                class="elementor-divider__text elementor-divider__element">
                                Bestselling books
                              </span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-9849e06 elementor-widget__width-auto button-style-bookory-yes elementor-widget elementor-widget-button"
                        data-id="9849e06"
                        data-element_type="widget"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              class="elementor-button elementor-button-link elementor-size-sm"
                              href="shop/index.php">
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-icon">
                                  <i
                                    aria-hidden="true"
                                    class="bookory-icon- bookory-icon-angle-right"></i>
                                </span>
                                <span class="elementor-button-text">View All</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-f2bb563 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="f2bb563"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ac26f1c"
                    data-id="ac26f1c"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-4e7e260 layout-carousel-3 hidden-border-bottom-product-yes arrow-style-1 elementor-widget elementor-widget-bookory-products"
                        data-id="4e7e260"
                        data-element_type="widget"
                        data-widget_type="bookory-products.default">
                        <div class="elementor-widget-container">
                          <div class="woocommerce columns-1">
                            <div
                              class="woocommerce-carousel"
                              data-settings='{"navigation":"none","autoplayHoverPause":true,"autoplay":true,"autoplayTimeout":"5000","carousel_center":false,"items":"4","items_laptop":"4","items_tablet_extra":"5","items_tablet":"4","items_mobile_extra":"3","items_mobile":"2","loop":true,"initialSlide":0,"breakpoint_laptop":1366,"breakpoint_tablet_extra":1200,"breakpoint_tablet":1024,"breakpoint_mobile_extra":880,"breakpoint_mobile":767}'>
                              <ul class="products columns-1">
                                <?php $products = select_6_products_controller();
                                foreach ($products as $product) { ?>
                                  <li
                                    class="product-style-default product type-product post-111 status-publish first instock product_cat-action-adventure product_cat-activity-books product_cat-contemporary product_cat-cultural product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail featured virtual purchasable product-type-simple">
                                    <div class="product-block">
                                      <div class="product-transition">
                                        <div class="product-image">
                                          <img

                                            decoding="async"
                                            width="600"
                                            height="840"
                                            src="wp-content/uploads/books/<?php echo $product['productImage'] ?>"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail home-390"
                                            alt="" />
                                        </div>
                                        <?php if ($customer_id != 0) { ?>
                                          <div class="group-action">
                                            <div class="shop-action vertical">
                                              <form id='wishlist-<?php echo $product['productID'] ?>'>
                                                <input type="hidden" name="SKU" value="<?php echo $product['productID'] ?>">
                                                <button type="submit"
                                                  class="woosw-btn woosw-btn-111">
                                                  Add to wishlist
                                                </button>
                                              </form>

                                              <div class="opal-add-to-cart-button">
                                                <a
                                                  data-sku="<?php echo $product['productID']; ?>"
                                                  id="sku-<?php echo $product['productID']; ?>"
                                                  href=""
                                                  class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                <span
                                                  id="woocommerce_loop_add_to_cart_link_describedby_111"
                                                  class="screen-reader-text">
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        <?php } else { ?>
                                          <div class="group-action">
                                            <div class="shop-action vertical">
                                              <a href="my-account/index.php"
                                                class="woosw-btn woosw-btn-111">
                                                Add to wishlist
                                              </a>
                                              <div class="opal-add-to-cart-button">
                                                <a
                                                  href="my-account/index.php"
                                                  class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                                <span
                                                  id="woocommerce_loop_add_to_cart_link_describedby_111"
                                                  class="screen-reader-text">
                                                </span>
                                              </div>
                                            </div>
                                          </div>
                                        <?php  } ?>
                                        <a
                                          href="product/index.php?SKU=<?php echo $product['productID'] ?>"
                                          class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                      </div>
                                      <div class="product-caption">
                                        <h3
                                          class="woocommerce-loop-product__title">
                                          <a href="product/index.php?SKU=<?php echo $product['productID'] ?>"><?php echo $product['productName'] ?></a>
                                        </h3>
                                        <div
                                          class="woocommerce-loop-product__author">
                                          <a
                                            href="author/index.php"><?php echo $product['productAuthor'] ?></a>
                                        </div>
                                        <span class="price"><span
                                            class="woocommerce-Price-amount amount"><span
                                              class="woocommerce-Price-currencySymbol">₵</span><?php echo number_format($product['productPrice'], 2) ?></span></span>
                                      </div>
                                    </div>
                                  </li>
                                <?php  } ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-3dfd7d5 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3dfd7d5"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90f7617"
                    data-id="90f7617"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-43d83dd elementor-widget-divider--view-line_text elementor-widget-divider--element-align-left elementor-widget__width-initial elementor-widget-tablet_extra__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile_extra__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-divider"
                        data-id="43d83dd"
                        data-element_type="widget"
                        data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                              <span
                                class="elementor-divider__text elementor-divider__element">
                                Deals Of The Week
                              </span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-a81fd4f elementor-widget__width-auto button-style-bookory-yes elementor-widget elementor-widget-button"
                        data-id="a81fd4f"
                        data-element_type="widget"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              class="elementor-button elementor-button-link elementor-size-sm"
                              href="shop/index.php">
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-icon">
                                  <i
                                    aria-hidden="true"
                                    class="bookory-icon- bookory-icon-angle-right"></i>
                                </span>
                                <span class="elementor-button-text">View All</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2418067 elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="2418067"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-86a4d5a"
                    data-id="86a4d5a"
                    data-element_type="column"
                    data-settings='{"background_background":"classic"}'>
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-3727bc1 elementor-widget elementor-widget-image"
                        data-id="3727bc1"
                        data-element_type="widget"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                          <img
                            loading="lazy"
                            decoding="async"
                            width="578"
                            height="332"
                            src="wp-content/uploads/images/h1-img1.png"
                            class="elementor-animation-wobble-horizontal attachment-full size-full wp-image-554"
                            alt=""
                            srcset="
                                wp-content/uploads/images/h1-img1.png         578w,
                                wp-content/uploads/images/h1-img1-300x172.png 300w
                              "
                            sizes="(max-width: 578px) 100vw, 578px" />
                        </div>
                      </div>
                      <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-8e084a5 elementor-section-content-bottom elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="8e084a5"
                        data-element_type="section">
                        <div
                          class="elementor-container elementor-column-gap-no">
                          <div
                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-51fd7c0"
                            data-id="51fd7c0"
                            data-element_type="column">
                            <div
                              class="elementor-widget-wrap elementor-element-populated">
                              <div
                                class="elementor-element elementor-element-16a411e elementor-widget elementor-widget-text-editor"
                                data-id="16a411e"
                                data-element_type="widget"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                  new year, new books
                                </div>
                              </div>
                              <div
                                class="elementor-element elementor-element-7eca195 elementor-widget elementor-widget-heading"
                                data-id="7eca195"
                                data-element_type="widget"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                  <h2
                                    class="elementor-heading-title elementor-size-default">
                                    The Best New<br />
                                    Books of the Month
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-028e8d7"
                    data-id="028e8d7"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-c1120f4 layout-list-product-style-1 arrow-style-1 elementor-widget elementor-widget-bookory-products"
                        data-id="c1120f4"
                        data-element_type="widget"
                        data-widget_type="bookory-products.default">
                        <div class="elementor-widget-container">
                          <div
                            class="woocommerce columns-1 woocommerce-product-list-1 woocommerce-overflow columns-tablet-1 columns-mobile-1">
                            <ul class="products columns-1">
                              <?php $products = select_3_products_controller();
                              foreach ($products as $product) { ?>
                                <li
                                  class="product type-product post-111 status-publish first instock product_cat-action-adventure product_cat-activity-books product_cat-contemporary product_cat-cultural product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail featured virtual purchasable product-type-simple">
                                  <div
                                    class="product-block-list product-block-list-1">
                                    <div class="left">
                                      <a href="../product/index.php?SKU=<?php echo $product['productID'] ?>" class="menu-thumb">
                                        <img
                                          src="wp-content/uploads/books/<?php echo $product['productImage'] ?>"
                                          class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail home-120"
                                          alt="" />
                                      </a>
                                    </div>
                                    <div class="right">
                                      <h3
                                        class="woocommerce-loop-product__title">
                                        <a href="product/index.php?SKU=<?php echo $product['productID'] ?>"><?php echo $product['productName'] ?></a>
                                      </h3>
                                      <div
                                        class="woocommerce-loop-product__author">
                                        <a
                                          href="author/index.php"><?php echo $product['productAuthor'] ?></a>
                                      </div>
                                      <span class="price"><span
                                          class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">₵</span><?php echo number_format($product['productPrice'], 2) ?></span></span>
                                    </div>
                                  </div>
                                </li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-e399435 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="e399435"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-93c449a"
                    data-id="93c449a"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-5428964 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-left elementor-widget__width-initial elementor-widget-tablet_extra__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile_extra__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-divider"
                        data-id="5428964"
                        data-element_type="widget"
                        data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                              <h2
                                class="elementor-divider__text elementor-divider__element">
                                Genres Books
                              </h2>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-6a55cf5 elementor-widget__width-auto button-style-bookory-yes elementor-widget elementor-widget-button"
                        data-id="6a55cf5"
                        data-element_type="widget"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              class="elementor-button elementor-button-link elementor-size-sm"
                              href="#">
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-icon">
                                  <i
                                    aria-hidden="true"
                                    class="bookory-icon- bookory-icon-angle-right"></i>
                                </span>
                                <span class="elementor-button-text">View All</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-d627a5d elementor-categories-layout-1 arrow-style-1 elementor-widget elementor-widget-bookory-product-categories"
                        data-id="d627a5d"
                        data-element_type="widget"
                        data-widget_type="bookory-product-categories.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-categories-item-wrapper">
                            <div
                              class="row bookory-carousel"
                              data-settings='{"navigation":"arrows","autoplayHoverPause":true,"autoplay":true,"autoplaySpeed":"5000","items":"3","items_laptop":"3","items_tablet_extra":"3","items_tablet":"2","items_mobile_extra":"2","items_mobile":"1","loop":true,"breakpoint_laptop":1366,"breakpoint_tablet_extra":1200,"breakpoint_tablet":1024,"breakpoint_mobile_extra":880,"breakpoint_mobile":767}'>
                              <div
                                class="column-item elementor-categories-item">
                                <div
                                  class="product-cat elementor-repeater-item-5079faa">
                                  <a
                                    class="product-cat-link"
                                    href="genre/index.php?genre=<?php echo urlencode('Academics '); ?>">
                                    <div class="category-product-img">
                                      <img
                                        decoding="async"
                                        src="wp-content/uploads/images//academic.jpg"
                                        alt="Action &amp; Adventure" />
                                    </div>
                                    <div class="product-cat-caption">
                                      <div class="cat-title">
                                        <span> Academics </span>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div
                                class="column-item elementor-categories-item">
                                <div
                                  class="product-cat elementor-repeater-item-ca39d09">
                                  <a
                                    class="product-cat-link"
                                    href="genre/index.php?genre=<?php echo urlencode('Media'); ?>">
                                    <div class="category-product-img">
                                      <img
                                        decoding="async"
                                        src="wp-content/uploads/images/media.jpg"
                                        alt="Activity Books" />
                                    </div>
                                    <div class="product-cat-caption">
                                      <div class="cat-title">
                                        <span> Media </span>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <div
                                class="column-item elementor-categories-item">
                                <div
                                  class="product-cat elementor-repeater-item-e95e207">
                                  <a
                                    class="product-cat-link"
                                    href="genre/index.php?genre=<?php echo urlencode('Edited Work '); ?>">
                                    <div class="category-product-img">
                                      <img
                                        decoding="async"
                                        src="wp-content/uploads/images/edited.jpg"
                                        alt="Arts &amp; Literature" />
                                    </div>
                                    <div class="product-cat-caption">
                                      <div class="cat-title">
                                        <span> Edited Work </span>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-891dfbf elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="891dfbf"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f7391f7"
                    data-id="f7391f7"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-6f3a262 elementor-widget-divider--view-line_text elementor-widget-divider--element-align-left elementor-widget__width-initial elementor-widget-tablet_extra__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile_extra__width-initial elementor-widget-mobile__width-auto elementor-widget elementor-widget-divider"
                        data-id="6f3a262"
                        data-element_type="widget"
                        data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                              <span
                                class="elementor-divider__text elementor-divider__element">
                                Popular Books
                              </span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-dfb3328 elementor-widget__width-auto button-style-bookory-yes elementor-widget elementor-widget-button"
                        data-id="dfb3328"
                        data-element_type="widget"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              class="elementor-button elementor-button-link elementor-size-sm"
                              href="shop/index.php">
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-icon">
                                  <i
                                    aria-hidden="true"
                                    class="bookory-icon- bookory-icon-angle-right"></i>
                                </span>
                                <span class="elementor-button-text">View All</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2d4b1d8 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="2d4b1d8"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4ef63b2"
                    data-id="4ef63b2"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-e175a88 hidden-border-bottom-product-yes arrow-style-1 elementor-widget elementor-widget-bookory-products"
                        data-id="e175a88"
                        data-element_type="widget"
                        data-widget_type="bookory-products.default">
                        <div class="elementor-widget-container">
                          <div
                            class="woocommerce columns-3 woocommerce-overflow columns-tablet-extra-3 columns-tablet-3 columns-mobile-extra-2 columns-mobile-2">
                            <ul class="products columns-3">
                              <?php $products = select_6_products_controller();
                              foreach ($products as $product) { ?>
                                <li
                                  class="product-style-default product type-product post-111 status-publish first instock product_cat-action-adventure product_cat-activity-books product_cat-contemporary product_cat-cultural product_tag-books product_tag-fiction product_tag-romance-contemporary has-post-thumbnail featured virtual purchasable product-type-simple">
                                  <div class="product-block">
                                    <div class="product-transition">
                                      <div class="product-image">
                                        <img
                                          src="wp-content/uploads/books/<?php echo $product['productImage'] ?>"
                                          class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail  home-370"
                                          alt="" />
                                      </div>
                                      <?php if ($customer_id != 0) { ?>
                                        <div class="group-action">
                                          <div class="shop-action vertical">
                                            <form id='wishlist-<?php echo $product['productID'] ?>'>
                                              <input type="hidden" name="SKU" value="<?php echo $product['productID'] ?>">
                                              <button type="submit"
                                                class="woosw-btn woosw-btn-111">
                                                Add to wishlist
                                              </button>
                                            </form>

                                            <div class="opal-add-to-cart-button">
                                              <a
                                                data-sku="<?php echo $product['productID']; ?>"
                                                id="sku-<?php echo $product['productID']; ?>"
                                                href=""
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                              <span
                                                id="woocommerce_loop_add_to_cart_link_describedby_111"
                                                class="screen-reader-text">
                                              </span>
                                            </div>
                                          </div>
                                        </div>
                                      <?php } else { ?>
                                        <div class="group-action">
                                          <div class="shop-action vertical">
                                            <a href="my-account/index.php"
                                              class="woosw-btn woosw-btn-111">
                                              Add to wishlist
                                            </a>
                                            <div class="opal-add-to-cart-button">
                                              <a
                                                href="my-account/index.php"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                              <span
                                                id="woocommerce_loop_add_to_cart_link_describedby_111"
                                                class="screen-reader-text">
                                              </span>
                                            </div>
                                          </div>
                                        </div>
                                      <?php  } ?>
                                      <a
                                        href="product/index.php?SKU=<?php echo $product['productID'] ?>"
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                                    </div>
                                    <div class="product-caption">
                                      <h3
                                        class="woocommerce-loop-product__title">
                                        <a href="product/index.php?SKU=<?php echo $product['productID'] ?>"><?php echo $product['productName'] ?></a>
                                      </h3>
                                      <div
                                        class="woocommerce-loop-product__author">
                                        <a
                                          href="author/index.php"><?php echo $product['productAuthor'] ?></a>
                                      </div>
                                      <span class="price"><span
                                          class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">₵</span><?php echo number_format($product['productPrice'], 2) ?></span></span>
                                    </div>
                                  </div>
                                </li>
                              <?php } ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-55dae18"
                    data-id="55dae18"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-b7667f9 button-banner-style-bookory-default elementor-bg-transform elementor-bg-transform-zoom-in elementor-widget elementor-widget-bookory-banner"
                        data-id="b7667f9"
                        data-element_type="widget"
                        data-widget_type="bookory-banner.default">
                        <div class="elementor-widget-container">
                          <a
                            href="shop/index.php"
                            class="elementor-cta--skin-cover elementor-cta elementor-bookory-banner">
                            <div class="elementor-cta__bg-wrapper">
                              <div
                                class="elementor-cta__bg elementor-bg"
                                style="
                                    background-image: url(wp-content/uploads/images/h1-banner1.jpg);
                                  "></div>
                              <div class="elementor-cta__bg-overlay"></div>
                            </div>
                            <div class="elementor-cta__content">
                              <div class="elementor-cta__content_inner">
                                <div
                                  class="elementor-cta__subtitle elementor-cta__content-item elementor-content-item">
                                  <span>best offer</span>
                                </div>

                                <h3
                                  class="elementor-cta__title elementor-cta__content-item elementor-content-item">
                                  save ₵15
                                </h3>

                                <div
                                  class="elementor-cta__description elementor-cta__content-item elementor-content-item">
                                  on selected items
                                </div>

                                <div
                                  class="elementor-cta__button-wrapper elementor-cta__content-item elementor-content-item">
                                  <span
                                    class="elementor-cta__button elementor-button">
                                    See More<i
                                      class="bookory-icon-angle-right"></i>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-ff91ead elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="ff91ead"
                data-element_type="section"
                data-settings='{"stretch_section":"section-stretched"}'>
                <div class="elementor-container elementor-column-gap-no">
                  <div
                    class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-252c100"
                    data-id="252c100"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-6015a56 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                        data-id="6015a56"
                        data-element_type="widget"
                        data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon">
                              <span
                                class="elementor-icon elementor-animation-">
                                <i
                                  aria-hidden="true"
                                  class="bookory-icon- bookory-icon-book"></i>
                              </span>
                            </div>

                            <div class="elementor-icon-box-content">
                              <h3 class="elementor-icon-box-title">
                                <span> 40+ </span>
                              </h3>

                              <p class="elementor-icon-box-description">
                                total books
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-b740e6c"
                    data-id="b740e6c"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-4db4fb4 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                        data-id="4db4fb4"
                        data-element_type="widget"
                        data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon">
                              <span
                                class="elementor-icon elementor-animation-">
                                <i
                                  aria-hidden="true"
                                  class="bookory-icon- bookory-icon-author"></i>
                              </span>
                            </div>

                            <div class="elementor-icon-box-content">
                              <h3 class="elementor-icon-box-title">
                                <span> 2M+ </span>
                              </h3>

                              <p class="elementor-icon-box-description">
                                Readers
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9272649"
                    data-id="9272649"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-f8788a0 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                        data-id="f8788a0"
                        data-element_type="widget"
                        data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon">
                              <span
                                class="elementor-icon elementor-animation-">
                                <i
                                  aria-hidden="true"
                                  class="bookory-icon- bookory-icon-sold"></i>
                              </span>
                            </div>

                            <div class="elementor-icon-box-content">
                              <h3 class="elementor-icon-box-title">
                                <span> 10.5K+ </span>
                              </h3>

                              <p class="elementor-icon-box-description">
                                books sold
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8ad8037"
                    data-id="8ad8037"
                    data-element_type="column">
                    <div
                      class="elementor-widget-wrap elementor-element-populated">
                      <div
                        class="elementor-element elementor-element-5e69c57 elementor-view-stacked elementor-position-left elementor-vertical-align-middle elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                        data-id="5e69c57"
                        data-element_type="widget"
                        data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon">
                              <span
                                class="elementor-icon elementor-animation-">
                                <i
                                  aria-hidden="true"
                                  class="bookory-icon- fa fa-smile"></i>
                              </span>
                            </div>

                            <div class="elementor-icon-box-content">
                              <h3 class="elementor-icon-box-title">
                                <span> 100% </span>
                              </h3>

                              <p class="elementor-icon-box-description">
                                happy customer
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                          href="dashboard/index.php"
                          class="elementor-icon elementor-animation-"
                          tabindex="-1">
                          <i
                            aria-hidden="true"
                            class="bookory-icon- bookory-icon-account"></i>
                        </a>
                      </div>

                      <div class="elementor-icon-box-content">
                        <h3 class="elementor-icon-box-title">
                          <a href="dashboard/index.php"> Account </a>
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
                                src="wp-content/uploads/images/logo1.png"
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
                          <a href="index.php">
                            <span class="elementor-icon-list-text">Home</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="shop/index.php">
                            <span class="elementor-icon-list-text">Shop</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="author/index.php">
                            <span class="elementor-icon-list-text">
                              Author
                            </span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="faq/index.php">
                            <span class="elementor-icon-list-text">FAQ</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="contact/index.php">
                            <span class="elementor-icon-list-text">Contact</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="privacy.html">
                            <span class="elementor-icon-list-text">Privacy</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="terms.html">
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
                            href="genre/index.php?genre=<?php echo urlencode('Academics'); ?>">
                            <span class="elementor-icon-list-text">Academics</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a
                            href="genre/index.php?genre=<?php echo urlencode('Media'); ?>">
                            <span class="elementor-icon-list-text">
                              Media</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="genre/index.php?genre=<?php echo urlencode('Edited Works'); ?>">
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
                          <a href="categories/index.php?category=<?php echo urlencode('Sole-Authored Books'); ?>">
                            <span class="elementor-icon-list-text">Sole-Authored Books
                            </span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a
                            href="categories/index.php?category=<?php echo urlencode('Monographs'); ?>">
                            <span class="elementor-icon-list-text">Monographs</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="categories/index.php?category=<?php echo urlencode('Edited Volumes'); ?>">
                            <span class="elementor-icon-list-text">Edited Volumes</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="categories/index.php?category=<?php echo urlencode('On the Author’s Work'); ?>">
                            <span class="elementor-icon-list-text">On the Author’s Work</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="categories/index.php?category=<?php echo urlencode('Book Chapters'); ?>">
                            <span class="elementor-icon-list-text">Book Chapters</span>
                          </a>
                        </li>
                        <li class="elementor-icon-list-item">
                          <a href="categories/index.php?category=<?php echo urlencode('Journal Articles'); ?>">
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
                        src="wp-content/uploads/images/footer_img.png"
                        class="attachment-full size-full wp-image-593"
                        alt=""
                        srcset="
                            wp-content/uploads/images/footer_img.png        348w,
                           wp-content/uploads/images/footer_img-300x22.png 300w
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
            <a href="dashboard/index.php" title="Orders">Orders</a>
          </li>
          <li>
            <a href="dashboard/downloads.php" title="Downloads">Downloads</a>
          </li>
          <li>
            <a href="dashboard/address.php" title="Edit Address">Edit Address</a>
          </li>
          <li>
            <a href="dashboard/account-details.php" title="Account Details">Account Details</a>
          </li>
          <li>
            <a
              title=""
              class="tips"
              href="logout.php"
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
                  id="menu-item-5751"
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5751">
                  <a href="categories/index.php?category=<?php echo urlencode('Sole-Authored Books'); ?>"><span class="menu-title">Sole-Authored Books</span></a>
                </li>
                <li
                  id="menu-item-6157"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6157">
                  <a
                    href="categories/index.php?category=<?php echo urlencode('Monographs'); ?>"><span class="menu-title">Monographs</span></a>
                </li>
                <li
                  id="menu-item-3154"
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3154">
                  <a href="categories/index.php?category=<?php echo urlencode('Edited Volumes'); ?>"><span class="menu-title">Edited Volumes</span></a>
                </li>
                <li
                  id="menu-item-3156"
                  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3156">
                  <a href="categories/index.php?category=<?php echo urlencode('On the Author’s Work'); ?>"><span class="menu-title">On the Author’s Work</span></a>
                </li>
                <li
                  id="menu-item-6218"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218">
                  <a href="categories/index.php?category=<?php echo urlencode('Book Chapters'); ?>"><span class="menu-title">Book Chapters
                    </span></a>
                </li>
                <li
                  id="menu-item-6218"
                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6218">
                  <a href="categories/index.php?category=<?php echo urlencode('Journal Articles'); ?>"><span class="menu-title">Journal Articles
                    </span></a>
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
                  href="action/delete_from_cart.php?cart=<?php echo $all['cartID'] ?>"
                  class="remove remove_from_cart_button"
                  data-product_sku="B87309287">×</a>
                <a href="product/index.php?SKU=<?php echo $all['productID'] ?>"><img
                    style="height: 85px;"
                    src="wp-content/uploads/books/<?php echo $all['productImage'] ?>"
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
            <a href="cart/index.php" class="button wc-forward">View cart</a><a href="checkout/index.php" class="button checkout wc-forward">Checkout</a>
          </p>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="cart-side-overlay"></div>

  <link
    rel="stylesheet"
    id="wc-blocks-style-css"
    href="wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksfbdf.css?ver=wc-9.5.1"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-icon-list-css"
    href="wp-content/uploads/elementor/css/custom-widget-icon-list.min2420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="e-animation-shrink-css"
    href="wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="widget-social-icons-css"
    href="wp-content/plugins/elementor/assets/css/widget-social-icons.min42e3.css?ver=3.26.0"
    media="all" />
  <link
    rel="stylesheet"
    id="e-apple-webkit-css"
    href="wp-content/uploads/elementor/css/custom-apple-webkit.min2420.css?ver=1742270149"
    media="all" />
  <link
    rel="stylesheet"
    id="elementor-post-3161-css"
    href="wp-content/uploads/elementor/css/post-3161206e.css?ver=1742270152"
    media="all" />
  <link
    rel="stylesheet"
    id="rs-plugin-settings-css"
    href="wp-content/plugins/revslider/sr6/assets/css/rs6efd5.css?ver=6.7.18"
    media="all" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script>
    $(document).ready(function() {
      $('[id^="sku-"]').click(function(e) {
        e.preventDefault();

        const sku = $(this).data('sku');
        const quantity = 1;

        $.ajax({
          type: 'POST',
          url: 'action/add_to_cart.php',
          dataType: 'json',
          data: {
            SKU: sku,
            quantity: quantity
          },
          success: function(response) {
            if (response.success) {
              Swal.fire('Success!', response.message, 'success').then(() => {
                location.reload();
              });
            } else {
              Swal.fire('Error', 'Could not add item to cart.', 'error');
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
  <script
    src="wp-content/plugins/contact-form-7/includes/js/index37ad.js?ver=6.0.1"
    id="contact-form-7-js"></script>
  <script
    src="wp-content/plugins/revslider/sr6/assets/js/rbtools.minefd5.js?ver=6.7.18"
    defer
    async
    id="tp-tools-js"></script>
  <script
    src="wp-content/plugins/revslider/sr6/assets/js/rs6.minefd5.js?ver=6.7.18"
    defer
    async
    id="revmin-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/vendor/slick.min3601.js?ver=2.2.0"
    id="slick-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/tooltipster.bundle3601.js?ver=2.2.0"
    id="tooltipster-js"></script>
  <script
    src="wp-includes/js/api-request.mind1c0.js?ver=6.7.2"
    id="wp-api-request-js"></script>
  <script
    src="wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0"
    id="wp-polyfill-js"></script>
  <script
    src="wp-includes/js/dist/url.min9481.js?ver=e87eb76272a3a08402d2"
    id="wp-url-js"></script>
  <script
    src="wp-includes/js/dist/api-fetch.min53e9.js?ver=d387b816bc1ed2042e28"
    id="wp-api-fetch-js"></script>
  <script
    src="wp-content/plugins/woo-variation-swatches/assets/js/frontend.min63ce.js?ver=1732076616"
    id="woo-variation-swatches-js"></script>
  <script
    src="wp-content/plugins/woo-smart-wishlist/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min1845.js?ver=4.9.6"
    id="perfect-scrollbar-js"></script>
  <script
    src="wp-content/plugins/woo-smart-wishlist/assets/js/frontend1845.js?ver=4.9.6"
    id="woosw-frontend-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/frontend/main3601.js?ver=2.2.0"
    id="bookory-theme-js"></script>
  <script
    src="wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0"
    id="imagesloaded-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/skip-link-focus-fix.min08e0.js?ver=20130115"
    id="bookory-skip-link-focus-fix-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/frontend/search-popup3601.js?ver=2.2.0"
    id="bookory-search-popup-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/frontend/text-editor3601.js?ver=2.2.0"
    id="bookory-text-editor-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/frontend/nav-mobile3601.js?ver=2.2.0"
    id="bookory-nav-mobile-js"></script>
  <script
    src="wp-content/themes/bookory/inc/megamenu/assets/js/frontend3601.js?ver=2.2.0"
    id="bookory-megamenu-frontend-js"></script>
  <script
    src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min0c46.js?ver=9.5.1"
    id="wc-add-to-cart-variation-js"
    data-wp-strategy="defer"></script>
  <script
    src="wp-content/themes/bookory/assets/js/vendor/jquery.magnific-popup.min3601.js?ver=2.2.0"
    id="magnific-popup-js"></script>
  <script
    src="wp-content/plugins/woo-smart-quick-view/assets/js/frontendeda1.js?ver=4.1.4"
    id="woosq-frontend-js"></script>
  <script
    src="wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min0c46.js?ver=9.5.1"
    id="sourcebuster-js-js"></script>
  <script
    src="wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min0c46.js?ver=9.5.1"
    id="wc-order-attribution-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/woocommerce/header-cart.min3601.js?ver=2.2.0"
    id="bookory-header-cart-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/woocommerce/product-ajax-search.min3601.js?ver=2.2.0"
    id="bookory-products-ajax-search-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/woocommerce/main.min3601.js?ver=2.2.0"
    id="bookory-products-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/woocommerce/quantity.min3601.js?ver=2.2.0"
    id="bookory-input-quantity-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/woocommerce/off-canvas.min3601.js?ver=2.2.0"
    id="bookory-off-canvas-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/woocommerce/cart-canvas.min3601.js?ver=2.2.0"
    id="bookory-cart-canvas-js"></script>
  <script
    src="wp-content/plugins/elementor/assets/js/webpack.runtime.min42e3.js?ver=3.26.0"
    id="elementor-webpack-runtime-js"></script>
  <script
    src="wp-content/plugins/elementor/assets/js/frontend-modules.min42e3.js?ver=3.26.0"
    id="elementor-frontend-modules-js"></script>
  <script
    src="wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3"
    id="jquery-ui-core-js"></script>
  <script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
      environmentMode: {
        edit: false,
        wpPreview: false,
        isScriptDebug: false,
      },
      i18n: {
        shareOnFacebook: "Share on Facebook",
        shareOnTwitter: "Share on Twitter",
        pinIt: "Pin it",
        download: "Download",
        downloadImage: "Download image",
        fullscreen: "Fullscreen",
        zoom: "Zoom",
        share: "Share",
        playVideo: "Play Video",
        previous: "Previous",
        next: "Next",
        close: "Close",
        a11yCarouselPrevSlideMessage: "Previous slide",
        a11yCarouselNextSlideMessage: "Next slide",
        a11yCarouselFirstSlideMessage: "This is the first slide",
        a11yCarouselLastSlideMessage: "This is the last slide",
        a11yCarouselPaginationBulletMessage: "Go to slide",
      },
      is_rtl: false,
      breakpoints: {
        xs: 0,
        sm: 480,
        md: 768,
        lg: 1025,
        xl: 1440,
        xxl: 1600
      },
      responsive: {
        breakpoints: {
          mobile: {
            label: "Mobile Portrait",
            value: 767,
            default_value: 767,
            direction: "max",
            is_enabled: true,
          },
          mobile_extra: {
            label: "Mobile Landscape",
            value: 880,
            default_value: 880,
            direction: "max",
            is_enabled: true,
          },
          tablet: {
            label: "Tablet Portrait",
            value: 1024,
            default_value: 1024,
            direction: "max",
            is_enabled: true,
          },
          tablet_extra: {
            label: "Tablet Landscape",
            value: 1200,
            default_value: 1200,
            direction: "max",
            is_enabled: true,
          },
          laptop: {
            label: "Laptop",
            value: 1366,
            default_value: 1366,
            direction: "max",
            is_enabled: true,
          },
          widescreen: {
            label: "Widescreen",
            value: 2400,
            default_value: 2400,
            direction: "min",
            is_enabled: false,
          },
        },
        hasCustomBreakpoints: true,
      },
      version: "3.26.0",
      is_static: false,
      experimentalFeatures: {
        additional_custom_breakpoints: true,
        e_swiper_latest: true,
        e_nested_atomic_repeaters: true,
        e_onboarding: true,
        e_css_smooth_scroll: true,
        home_screen: true,
        "landing-pages": true,
        "nested-elements": true,
        editor_v2: true,
        e_element_cache: true,
        "link-in-bio": true,
        "floating-buttons": true,
      },
      urls: {
        assets: "https:\/\/demo2.pavothemes.com\/bookory\/wp-content\/plugins\/elementor\/assets\/",
        ajaxurl: "https:\/\/demo2.pavothemes.com\/bookory\/wp-admin\/admin-ajax.php",
        uploadUrl: "https:\/\/demo2.pavothemes.com\/bookory\/wp-content\/uploads",
      },
      nonces: {
        floatingButtonsClickTracking: "d040e22a7e"
      },
      swiperClass: "swiper",
      settings: {
        page: [],
        editorPreferences: []
      },
      kit: {
        active_breakpoints: [
          "viewport_mobile",
          "viewport_mobile_extra",
          "viewport_tablet",
          "viewport_tablet_extra",
          "viewport_laptop",
        ],
        global_image_lightbox: "yes",
        lightbox_enable_counter: "yes",
        lightbox_enable_fullscreen: "yes",
        lightbox_enable_zoom: "yes",
        lightbox_enable_share: "yes",
        lightbox_title_src: "title",
        lightbox_description_src: "description",
      },
      post: {
        id: 210,
        title: "Bookory%20%E2%80%93%20Book%20Store%20WooCommerce%20Theme",
        excerpt: "",
        featuredImage: false,
      },
    };
  </script>
  <script
    src="wp-content/plugins/elementor/assets/js/frontend.min42e3.js?ver=3.26.0"
    id="elementor-frontend-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/elementor/author-list3601.js?ver=2.2.0"
    id="bookory-elementor-author-list-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/elementor/countdown3601.js?ver=2.2.0"
    id="bookory-elementor-countdown-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/elementor/product-categories3601.js?ver=2.2.0"
    id="bookory-elementor-product-categories-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/elementor/products3601.js?ver=2.2.0"
    id="bookory-elementor-products-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/elementor/testimonial3601.js?ver=2.2.0"
    id="bookory-elementor-testimonial-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/elementor-frontend3601.js?ver=2.2.0"
    id="bookory-elementor-frontend-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/vendor/jquery.sticky3601.js?ver=2.2.0"
    id="elementor-sticky-js"></script>
  <script
    src="wp-content/themes/bookory/assets/js/vendor/sticky3601.js?ver=2.2.0"
    id="bookory-elementor-sticky-js"></script>

  <script id="rs-initialisation-scripts">
    var tpj = jQuery;

    var revapi1;

    if (window.RS_MODULES === undefined) window.RS_MODULES = {};
    if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider11"] = {
      once: RS_MODULES.modules["revslider11"] !== undefined ?
        RS_MODULES.modules["revslider11"].once : undefined,
      init: function() {
        window.revapi1 =
          window.revapi1 === undefined ||
          window.revapi1 === null ||
          window.revapi1.length === 0 ?
          document.getElementById("rev_slider_1_1") :
          window.revapi1;
        if (
          window.revapi1 === null ||
          window.revapi1 === undefined ||
          window.revapi1.length == 0
        ) {
          window.revapi1initTry =
            window.revapi1initTry === undefined ?
            0 :
            window.revapi1initTry + 1;
          if (window.revapi1initTry < 20)
            requestAnimationFrame(function() {
              RS_MODULES.modules["revslider11"].init();
            });
          return;
        }
        window.revapi1 = jQuery(window.revapi1);
        if (window.revapi1.revolution == undefined) {
          revslider_showDoubleJqueryError("rev_slider_1_1");
          return;
        }
        revapi1.revolutionInit({
          revapi: "revapi1",
          DPR: "dpr",
          sliderLayout: "fullwidth",
          visibilityLevels: "1240,1025,778,480",
          gridwidth: "1550,1024,778,480",
          gridheight: "600,500,450,450",
          lazyType: "smart",
          perspective: 600,
          perspectiveType: "global",
          editorheight: "600,500,450,450",
          responsiveLevels: "1240,1025,778,480",
          progressBar: {
            disableProgressBar: true
          },
          navigation: {
            onHoverStop: false,
          },
          parallax: {
            levels: [
              5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 80, 30,
            ],
            type: "scroll",
            origo: "slidercenter",
            speed: 0,
          },
          viewPort: {
            global: true,
            globalDist: "-200px",
            enable: false,
          },
          fallbacks: {
            allowHTML5AutoPlayOnAndroid: true,
          },
        });
      },
    }; // End of RevInitScript

    if (window.RS_MODULES.checkMinimal !== undefined) {
      window.RS_MODULES.checkMinimal();
    }
  </script>

</body>

</html>