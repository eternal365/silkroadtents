<?php

/**
 * Theme.
 */

// Set content width (oEmbeds and plugins use it)
if (!isset($content_width)) {
  $content_width = 840;
}

// Include options framework
define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/');

require_once(TEMPLATEPATH . '/admin/options-framework.php');

// Include REST API class
//require_once('restapi/pbcustomapiclass.php');

// Include custom navigation walkers
require_once('wp_navwalkers.php');

// Register custom menus and toggle features support
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_editor_style();

  set_post_thumbnail_size(900, 273, true);
  add_image_size('feature', 2000, 1000, true);
  add_image_size('page-list', 9999, 200, true);

  register_nav_menus([
    'primary' => __('Primary Menu', 'silkroadtheme'),
    'footer'  => __('Footer Menu', 'silkroadtheme'),
  ]);
});

// Register custom widget areas
add_action('widgets_init', function () {
  register_sidebar([
    'name'          => __('Footer Content Left', 'silkroadtheme'),
    'id'            => 'sidebar-1',
    'description'   => __('An optional widget area', 'silkroadtheme'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s unstyled">',
    'after_widget'  => "</aside>",
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ]);

  register_sidebar([
    'name'          => __('Footer Content Centre', 'silkroadtheme'),
    'id'            => 'sidebar-2',
    'description'   => __('Second optional widget area', 'silkroadtheme'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s unstyled text-right">',
    'after_widget'  => "</aside>",
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ]);
});

// Change the "read more" link
add_filter('excerpt_more', function () {
  return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('&rarr;', 'silkroadtheme') . '</a>';
});

// Enqueue assets
add_action('wp_enqueue_scripts', function () {
  $scriptsUrl = get_template_directory_uri();
  $stylesUrl = get_stylesheet_directory_uri();
  $version = '1.0.0';

  // Bootstrap tooltips require Tether / Bootstrap dropdowns require Popper
  wp_enqueue_script('tether', $scriptsUrl . '/js/tether.min.js', ['jquery'], $version, true);
  wp_enqueue_script('popper', $scriptsUrl . '/js/popper.min.js', ['jquery'], $version, true);
  wp_enqueue_script('bootstrap', $scriptsUrl . '/js/bootstrap.min.js', ['jquery'], $version, true);
  wp_enqueue_script('jquery-cookies', $scriptsUrl . '/js/jquery.cookiesdirective.js', ['jquery'], $version, true);
  wp_enqueue_script('jquery-mobile', $scriptsUrl . '/js/jquery.mobile.custom.min.js', ['jquery'], $version, true);
  //wp_enqueue_script('angular', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js', array(), $version, true);
  //wp_enqueue_script('angular-sanitize', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-sanitize.min.js', array(), $version, true);
  //wp_enqueue_script('angular-grid', $scriptsUrl . '/js/angular/angulargrid.min.js', array(), $version, true);
  //wp_enqueue_script('angular-animate', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-animate.min.js', array(), $version, true);
  //wp_enqueue_script('angular-bootstrap', 'https://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.2.4.js', array(), $version, true);
  //wp_enqueue_script('angular-bootstrap', $scriptsUrl . '/js/angular/ui-bootstrap-tpls-1.2.4.min.js', array(), $version, true);
  //wp_enqueue_script('angular-angucomplete', $scriptsUrl . '/js/angular/angucomplete-alt.min.js', array(), $version, true);
  //wp_enqueue_script('angular-show-errors', $scriptsUrl . '/js/angular/showErrors.min.js', array(), $version, true);
  //wp_enqueue_script('angular-truncate', $scriptsUrl . '/js/angular/truncate.min.js', array(), $version, true);
  //wp_enqueue_script('angular-file-upload', $scriptsUrl . '/js/angular/ng-file-upload.min.js', array(), $version, true);
  //wp_enqueue_script('angular-recaptcha', $scriptsUrl . '/js/angular/angular-recaptcha.min.js', array(), $version, true);
  //wp_enqueue_script('angular-infinite-scroll', $scriptsUrl . '/js/angular/ng-infinite-scroll.min.js', array(), $version, true);
  //wp_enqueue_script('angular-app', $scriptsUrl . '/js/angular/app.js', array(), $version, true);
  //wp_enqueue_script('angular-services', $scriptsUrl . '/js/angular/services.js', array(), $version, true);
  //wp_enqueue_script('angular-controllers', $scriptsUrl . '/js/angular/controllers.js', array(), $version, true);
  //wp_enqueue_script('angular-directives', $scriptsUrl . '/js/angular/directives.js', array(), $version, true);

  //wp_localize_script('angular-app', 'wpApiSettings', array(
  //	'nonce' => wp_create_nonce( 'wp_rest' ),
  //	'userid' => get_current_user_id()
  //));

  wp_enqueue_style('styles', $stylesUrl . '/style.css');
});

/**
 * WooCommerce.
 */

// Add custom sorting options (asc/desc)
function custom_woocommerce_catalog_orderby($sortby) {
  $sortby['order_list'] = 'Sort by type';

  return $sortby;
}

add_filter('woocommerce_default_catalog_orderby_options', 'custom_woocommerce_catalog_orderby');
add_filter('woocommerce_catalog_orderby', 'custom_woocommerce_catalog_orderby');

add_filter('woocommerce_get_catalog_ordering_args', function ($args) {
  $orderby = isset($_GET['orderby'])
    ? wc_clean($_GET['orderby'])
    : apply_filters('woocommerce_default_catalog_orderby', get_option('woocommerce_default_catalog_orderby'));

  if ('order_list' == $orderby) {
    $args['orderby'] = 'menu_order';
    $args['order'] = 'ASC';
    $args['meta_key'] = '';
  }

  return $args;
});

// Show cart contents / total ajax
add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
  ob_start();

  ?>
  <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your cart'); ?>">
    <?php echo sprintf(_n('%d item', '%d items', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?> - <?php echo WC()->cart->get_cart_total(); ?>
    <i class="fa fa-shopping-cart fa-2x"></i>
  </a>
  <?php

  $fragments['a.cart-customlocation'] = ob_get_clean();

  return $fragments;
});

// Force showing subcategories on a category page
add_action('woocommerce_shortcode_before_products_loop', function () {
  wc_set_loop_prop('is_shortcode', false);
});