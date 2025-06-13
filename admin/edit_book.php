<?php
session_start();
require('../controllers/customer_controller.php');
require('../controllers/product_controller.php');
require('../controllers/cart_controller.php');
$customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "0";
$user_role = isset($_SESSION['userRole']) ? $_SESSION['userRole'] : "";
if ($user_role != 'admin') {
  header("Location: ../404.php");
}
$productID = $_GET['product'];
$product = select_one_product_controller($productID);

if (!is_numeric($productID) || empty($productID) || !$product) {
  header("Location: ../404.php");
}
$count = count_wishlist_for_user_controller($customer_id);
$cart = count_user_cart_controller($customer_id);
?>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <title>Prof Kwesi Yankah Book Store - Edit Book</title>
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

</head>


<body
  class="page-template-default page page-id-10 logged-in wp-custom-logo wp-embed-responsive theme-bookory woocommerce-account woocommerce-page woocommerce-edit-account woocommerce-js ehf-header ehf-footer ehf-template-bookory ehf-stylesheet-demo-child woo-variation-swatches wvs-behavior-blur wvs-theme-demo-child wvs-show-label wvs-tooltip group-blog woocommerce-active product-block-style-1 elementor-default elementor-kit-4 dokan-theme-bookory has-scrollbar e--ua-blink e--ua-edge e--ua-webkit"
  style="--scroll-bar: 15px"
  data-elementor-device-mode="mobile_extra">
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
                                      href="">
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
                                  <a
                                    class="cart-contents"
                                    href="../../cart/index.php"
                                    title="View your shopping cart">
                                    <span class="count">3</span>
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
      <div
        data-elementor-type="wp-post"
        data-elementor-id="3100"
        class="elementor elementor-3100">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-1ece023 elementor-section-height-min-height elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
          data-id="1ece023"
          data-element_type="section"
          data-settings='{"stretch_section":"section-stretched","background_background":"classic"}'
          style="width: 753px; left: 0.1px">
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
                    <div class="bookory-woocommerce-title">Editing Book</div>
                    <nav class="woocommerce-breadcrumb">
                      <a href="../index.php">Home</a><i class="bookory-icon-right-arrow"></i><a href="">Admin</a><i class="bookory-icon-right-arrow"></i>Edit Book
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
                  <nav
                    class="woocommerce-MyAccount-navigation"
                    aria-label="Account pages">
                    <ul>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard ">
                        <a
                          href="index.php"
                          aria-current="page">
                          Dashboard
                        </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads ">
                        <a href="add_book.php"> Add a Book </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads  is-active">
                        <a href="view_all_books.php"> View All Books </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                        <a href="orders.php" aria-current="page"> Orders </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders ">
                        <a href="requested_books.php" aria-current="page"> Requested Books </a>
                      </li>
                      <li
                        class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                        <a href="../logout.php"> Log out </a>
                      </li>
                    </ul>
                  </nav>

                  <div class="woocommerce-MyAccount-content">
                    <div class="woocommerce-notices-wrapper"></div>
                    <form id="edit_book"
                      class="woocommerce-EditAccountForm edit-account">
                      <p
                        class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                        <label>Book title&nbsp;<span class="required">*</span></label>
                        <input
                          type="text"
                          class="woocommerce-Input woocommerce-Input--text input-text"
                          name="productName" required value="<?php echo $product['productName'] ?>" />
                      </p>
                      <input type="hidden" name="product" value="<?php echo $product['productID'] ?>">
                      <p
                        class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                        <label>Book Author&nbsp;<span class="required">*</span></label>
                        <input
                          type="text"
                          class="woocommerce-Input woocommerce-Input--text input-text"
                          name="productAuthor" required value="<?php echo $product['productAuthor'] ?>" />
                      </p>
                      <div class="clear"></div>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                        <label>Book Category&nbsp;<span class="required">*</span></label>
                        <select name="productCategory" style="border-radius: 50px;" required>
                          <option disabled value="">Select category</option>
                          <option value="Sole-Authored Books" <?php if ($product['productCategory'] == 'Sole-Authored Books') echo 'selected'; ?>>Sole-Authored Books</option>
                          <option value="Monographs" <?php if ($product['productCategory'] == 'Monographs') echo 'selected'; ?>>Monographs</option>
                          <option value="Edited Volumes" <?php if ($product['productCategory'] == 'Edited Volumes') echo 'selected'; ?>>Edited Volumes</option>
                          <option value="On the Author’s Work" <?php if ($product['productCategory'] == 'On the Author’s Work') echo 'selected'; ?>>On the Author’s Work</option>
                          <option value="Book Chapters" <?php if ($product['productCategory'] == 'Book Chapters') echo 'selected'; ?>>Book Chapters</option>
                          <option value="Journal Articles" <?php if ($product['productCategory'] == 'Journal Articles') echo 'selected'; ?>>Journal Articles</option>
                        </select>

                      </p>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                        <label>Book Genre&nbsp;<span class="required">*</span></label>
                        <select name="productGenre" style="border-radius: 50px;" required>
                          <option disabled value="">Select genre</option>
                          <option value="Academics" <?php if ($product['productGenre'] == 'Academics') echo 'selected'; ?>>Academics</option>
                          <option value="Media" <?php if ($product['productGenre'] == 'Media') echo 'selected'; ?>>Media</option>
                          <option value="Edited Works" <?php if ($product['productGenre'] == 'Edited Works') echo 'selected'; ?>>Edited Works</option>
                        </select>

                      </p>
                      <div class="clear"></div>

                      <p
                        class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                        <label>Book Language&nbsp;<span class="required">*</span></label>
                        <select name="productLanguage" style="border-radius: 50px;" required>
                          <option disabled value="">Select language</option>
                          <option value="English" <?php if ($product['productLanguage'] == 'English') echo 'selected'; ?>>English</option>
                          <option value="French" <?php if ($product['productLanguage'] == 'French') echo 'selected'; ?>>French</option>
                          <option value="Spanish" <?php if ($product['productLanguage'] == 'Spanish') echo 'selected'; ?>>Spanish</option>
                        </select>

                      </p>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                        <label>Book Publish Date&nbsp;<span class="required">*</span></label>
                        <input
                          type="date"
                          class="woocommerce-Input woocommerce-Input--text input-text"
                          name="publishedDate" required value="<?php echo $product['publishedDate'] ?>" />
                      <div class="clear"></div>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                        <label>Book Price (₵)&nbsp;<span class="required">*</span></label>
                        <input
                          type="number"
                          class="woocommerce-Input woocommerce-Input--text input-text"
                          name="productPrice" required value="<?php echo number_format($product['productPrice'], 2) ?>" />
                      </p>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                        <label>Books Available&nbsp;<span class="required">*</span></label>
                        <input
                          type="number"
                          class="woocommerce-Input woocommerce-Input--text input-text"
                          name="productAvailable" required value="<?php echo $product['productAvailable'] ?>" />
                      </p>
                      <div class="clear"></div>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                        <label>Book Image&nbsp;<span class="required">*</span></label>
                        <img src="../wp-content/uploads/books/<?php echo $product['productImage']; ?>" width="120" height="120" style="margin-bottom:10px">
                        <input
                          type="file"
                          class="woocommerce-Input woocommerce-Input--text input-text"
                          accept="image/*" name="productImage" />
                      </p>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                        <label>Book File&nbsp;<span class="required">*</span></label>
                      <div style="margin-bottom:30px">
                        <?php echo $product['productFileLocation']; ?>
                      </div>
                      <input
                        type="file"
                        class="woocommerce-Input woocommerce-Input--text input-text" accept=".pdf" name="productFileLocation" />
                      </p>
                      <div class="clear"></div>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                        <label>Book Weight (KG)&nbsp;<span class="required">*</span></label>
                        <input
                          type="number"
                          class="woocommerce-Input woocommerce-Input--text input-text"
                          name="productWeight" required value="<?php echo $product['productWeight'] ?>" />
                      </p>
                      <p
                        class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <label for="account_email">Book Description&nbsp;<span class="required">*</span></label>
                        <textarea name="productDescription" class="woocommerce-Input woocommerce-Input--email input-text" placeholder="Write here..." required><?php echo $product['productDescription'] ?></textarea>
                      </p>

                      <div class="clear"></div>
                      <p>
                        <button
                          type="submit"
                          class="woocommerce-Button button">
                          Update Book
                        </button>
                      </p>
                    </form>
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

  <div class="site-header-cart-side">
    <div class="cart-side-heading">
      <span class="cart-side-title">Shopping cart</span>
      <a href="#" class="close-cart-side">close</a>
    </div>
    <div class="widget woocommerce widget_shopping_cart">
      <div class="widget_shopping_cart_content">
        <div class="woocommerce-mini-cart-scroll">
          <ul class="woocommerce-mini-cart cart_list product_list_widget">
            <li class="woocommerce-mini-cart-item mini_cart_item">
              <a
                href=""
                class="remove remove_from_cart_button"
                aria-label="Remove this item"
                data-product_id="99"
                data-cart_item_key="ac627ab1ccbdb62ec96e702f07f6425b"
                data-product_sku="B87309287">×</a>
              <a href=""><img
                  width="600"
                  height="840"
                  src="../wp-content/uploads/images/29.jpg"
                  class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                  alt=""
                  decoding="async" />Treachery: Alpha Colony Book 8</a>
              <dl class="variation">
                <dt class="variation-Vendor">Vendor:</dt>
                <dd class="variation-Vendor">
                  <p>Gregstore</p>
                </dd>
              </dl>
              <span class="quantity">1 ×
                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₵</span>569.00</bdi></span></span>
            </li>
          </ul>
        </div>

        <p class="woocommerce-mini-cart__total total">
          <strong>Subtotal:</strong>
          <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₵</span>569.00</bdi></span>
        </p>

        <p class="woocommerce-mini-cart__buttons buttons">
          <a href="../cart/index.php" class="button wc-forward">View cart</a><a href="../../checkout/index.php" class="button checkout wc-forward">Checkout</a>
        </p>
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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script>
    $(document).ready(function() {
      $('#edit_book').submit(function(event) {
        event.preventDefault();

        // Validate image size before sending
        const imageInput = $('input[name="productImage"]')[0];
        const maxSize = 1 * 1024 * 1024; // 1 MB

        if (imageInput.files.length > 0 && imageInput.files[0].size > maxSize) {
          Swal.fire({
            icon: 'error',
            title: 'Image Too Large!',
            text: 'Please upload an image smaller than 1MB.'
          });
          return;
        }

        // All good, send form via AJAX
        $.ajax({
          type: 'POST',
          url: '../action/update_book.php',
          dataType: 'json',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(response) {
            if (response.success) {
              Swal.fire('Success!', response.message, 'success').then(() => {
                window.location.href = "view_all_books.php";
              });
            } else {
              Swal.fire('Error', response.message, 'error');
            }
          },
          error: function(xhr) {
            Swal.fire('Oops!', 'Something went wrong. Please try again later.', 'error');
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
    src="../wp-content/plugins/woo-variation-swatches/assets/js/frontend.min63ce.js?ver=1732076616"
    id="woo-variation-swatches-js"></script>
  <script
    src="../wp-content/plugins/woo-smart-wishlist/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min1845.js?ver=4.9.6"
    id="perfect-scrollbar-js"></script>
  <script
    src="../wp-content/themes/bookory/assets/js/frontend/main3601.js?ver=2.2.0"
    id="bookory-theme-js"></script>

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