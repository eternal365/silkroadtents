<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" />
  <!-- JSON-LD Markup For Google Local Business. -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "image": [
        "https://silkroadtents.com/wp-content/uploads/2018/12/cropped-srt-fav-270x270.jpg"
      ],
      "@id": "https://silkroadtents.com/",
      "name": "Silk Road Tents",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Philpostown",
        "addressLocality": "Garlow Cross",
        "addressRegion": "Co. Meath",
        "postalCode": "C15 E9KK",
        "addressCountry": "Ireland"
      },
      "url": "https://silkroadtents.com/",
      "telephone": "(049) 9050869",
      "priceRange": "€ 100.00",
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],
          "opens": "24:00",
          "closes": "23:00"
        }
      ]
    }
  </script>
</head>
<body <?php body_class(); ?> data-ng-app="bs4App">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-5 text-left text-white">
        <ul class="icons unstyled nav-pills pl-0">
          <?php if ($url = of_get_option('facebook_adr')): ?>
            <li>
              <a href="<?php echo $url; ?>" target="_blank" rel="nofollow"><i class="fa fa-facebook-official fa-2x"></i></a>
            </li>
          <?php endif; ?>
          <?php if ($url = of_get_option('instagram_adr')): ?>
            <li><a href="<?php echo $url; ?>" target="_blank" rel="nofollow"><i class="fa fa-instagram fa-2x"></i></a>
            </li>
          <?php endif; ?>
          <?php if ($url = of_get_option('pinterest_adr')): ?>
            <li>
              <a href="<?php echo $url; ?>" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square fa-2x"></i></a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="col-7 text-right">
        <ul class="icons unstyled nav-pills pl-0 call-bar">
          <li>
            <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your cart'); ?>">
              <?php echo sprintf(_n('%d item', '%d items', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?> - <?php echo WC()->cart->get_cart_total(); ?>
              <i class="fa fa-shopping-cart fa-2x"></i>
            </a>
          </li>
          <li>
            <a href="tel:+353879244044" title="<?php _e('Call Now'); ?>"><i class="fa fa-phone-square fa-2x"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<a class="navbar-brand" href="<?php echo site_url(); ?>">Silk Road Tents</a>
<nav class="navbar navbar-expand-lg sticky-top p-0">
  <div class="container">
    <button id="toggle-menu" class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbar">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>
    <div class="collapse navbar-collapse nav" id="navbar">
      <?php wp_nav_menu(['menu' => 'main-menu', 'menu_class' => 'navbar-nav justify-content-between', 'container' => false, 'walker' => new wp_bootstrap_navwalker()]); ?>
    </div>
  </div>
</nav>
