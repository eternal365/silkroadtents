<footer class="pt-12 pb-4">
  <div class="to-top">
    <a href="#" class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-12 col-md-4">
        <h5 class="widget-title text-left">Contact:</h5>
        <?php if (is_active_sidebar('sidebar-1')): ?>
          <?php dynamic_sidebar('sidebar-1'); ?>
        <?php endif; ?>
      </div>
      <div class="col-12 col-md-4">
        <a class="navbar-brand text-center" href="<?php echo site_url(); ?>">Silk Road Tents</a>
        <div class="logo"></div>
      </div>
      <div class="col-12 col-md-4">
        <h5 class="widget-title text-md-right text-sm-left">Office:</h5>
        <div class="text-md-right text-sm-left">
          <?php if (is_active_sidebar('sidebar-2')): ?>
            <?php dynamic_sidebar('sidebar-2'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-6">
        <!-- Social Icons -->
        <h5 class="widget-title text-left">Social:</h5>
        <ul class="icons unstyled nav-pills pl-0">
          <?php if ($url = of_get_option('facebook_adr')): ?>
            <li><a href="<?php echo $url; ?>" target="_blank" rel="nofollow"><i class="fa fa-facebook-official fa-4x"></i></a></li>
          <?php endif; ?>
          <?php if ($url = of_get_option('instagram_adr')): ?>
            <li><a href="<?php echo $url; ?>" target="_blank" rel="nofollow"><i class="fa fa-instagram fa-4x"></i></a></li>
          <?php endif; ?>
          <?php if ($url = of_get_option('pinterest_adr')): ?>
            <li><a href="<?php echo $url; ?>" target="_blank" rel="nofollow"><i class="fa fa-pinterest-square fa-4x"></i></a></li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="col-12 col-md-6">
        <h5 class="widget-title text-md-right text-sm-left">More:</h5>
        <div class="row">
          <div class="col d-flex flex-wrap justify-content-md-end justify-content-sm-start ">
            <a href="<?php echo site_url(); ?>/contact" class="icon-link">
              <div class="srt-icon">
                Contact Us
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 text-md-right text-sm-left">
          <small>Our <a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a> and
            <a href="<?php echo site_url(); ?>/terms-and-conditions">Terms & Conditions</a></small>
        </div>
      </div>
    </div>
    <div class="text-center py-4 font-weight-bold">
      &copy; Silk Road Tents <?php echo date('Y') ?>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

<?php if ($scripts = of_get_option('footer_scripts')): ?>
  <script><?php echo stripslashes($scripts); ?></script>
<?php endif; ?>

<script>
  jQuery(document).ready(function () {
    jQuery.cookiesDirective({
      explicitConsent: false, // false allows implied consent
      position: 'bottom', // top or bottom of viewport
      duration: 10, // display time in seconds
      limit: 0, // limit disclosure appearances, 0 is forever
      message: null, // customise the disclosure message
      cookieScripts: null, // disclose cookie settings scripts
      privacyPolicyUri: '/privacy-statement/',   // uri of your privacy policy
      scriptWrapper: function () {
      }, // wrapper function for cookie setting scripts
      fontFamily: 'helvetica', // font style for disclosure panel
      fontColor: '#ffffff', // font color for disclosure panel
      fontSize: '14px', // font size for disclosure panel
      backgroundColor: '#000000', // background color of disclosure panel
      backgroundOpacity: '60', // opacity of disclosure panel
      linkColor: '#cccccc', // link color in disclosure panel
    });

    jQuery('.sidebar .dropdown-menu a').click(function (e) {
      e.stopPropagation();
    });

    jQuery('[data-toggle="tooltip"]').tooltip();

    jQuery('.navbar-toggler').click(function () {
      jQuery(this).toggleClass('open'); //add class to navbar-toggler to use transition (bars to X )
    });

    jQuery(function () {
      jQuery('.back-to-top').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, 400);
        return false;
      });

      // Scroll Down
      function scrollToAnchor(aid) {
        if (this.hash !== '') {
          // Prevent default anchor click behavior
          event.preventDefault();
          var aTag = jQuery('a[name=\'' + aid + '\']');
          jQuery('html,body').animate({ scrollTop: aTag.offset().top }, '800');
        }
      }

      jQuery('.inactiveUntilOnLoad').removeClass('inactiveUntilOnLoad');

      jQuery('.navbar .dropdown > a').click(function () {
        if (!jQuery(this).hasClass('parent-clicked')) {
          jQuery(this).addClass('parent-clicked');
        } else {
          location.href = this.href;
        }
      });

      jQuery(function () {
        if (jQuery(window).width() > 769) {
          jQuery('.navbar .dropdown').hover(function () {
            jQuery(this).find('.dropdown-menu').first().stop().slideDown();
          }, function () {
            jQuery(this).find('.dropdown-menu').first().stop().slideUp();
          });

          jQuery('.navbar .dropdown > a').click(function () {
            location.href = this.href;
          });
        }
      });
    });
  });
</script>

<!-- Google Tag Manager (gtag.js) -->
<script src="https://www.googletagmanager.com/gtag/js?id=G-P6VQN6Y2D6" async></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-P6VQN6Y2D6');
</script>

</body>
</html>