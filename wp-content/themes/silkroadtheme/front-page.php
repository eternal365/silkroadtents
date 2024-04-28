<?php get_header(); ?>

<section class="header">
  <?php echo do_shortcode('[rolo_slider name="main-slider"]'); ?>
</section>

<section class="intro">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if (get_field('intro_text')): ?>
          <h1 class="home-intro text-center mt-4 mb-1">
            <?php the_field('intro_text'); ?>
          </h1>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <div class="content my-2">
          <?php the_content(); ?>
          <?php edit_post_link('edit', '<p>', '</p>'); ?>
          <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-panels mb-8">
  <div class="container">
    <h2 class="text-center mb-4"><?php the_field('panels_title'); ?> </h2>
    <p><?php the_field('panels_intro'); ?></p>
  </div>
  <?php get_template_part('section-home', 'panels'); ?>
</section>

<section class="about">
  <div class="container">
    <h2 class="text-center mt-6 mb-0"><?php the_field('about_title'); ?></h2>
    <div class="row">
      <div class="col-12">
        <p class="text-left my-4">
          <?php the_field('about_text'); ?>
        </p>
      </div>
      <div class="col-12 mt-2">
        <div class="row">
          <div class="col-md-4">
            <a href="<?php echo site_url(); ?>/about-us">
              <div class="srt-team my-4 bg-dark">
                <div class="about-hover text-white">
                  About Us
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo site_url(); ?>/our-adventures">
              <div class="srt-testimony my-4 bg-dark">
                <div class="about-hover text-white">
                  Our Adventures
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo site_url(); ?>/galleries">
              <div class="srt-trips my-4 bg-dark">
                <div class="about-hover text-white">
                  Galleries
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="boutique">
  <div class="container">
    <h2 class="text-center mt-6 mb-1"><?php the_field('boutique_section_title'); ?></h2>
    <?php if (have_rows('boutique_festivals')): ?>
    <div class="row no-gutters">
      <?php while (have_rows('boutique_festivals')): ?>
        <?php the_row(); ?>
        <?php $image = get_sub_field('boutique_image'); ?>
        <?php $link = get_sub_field('boutique_url'); ?>
        <div class="col-md-4 my-4">
          <?php if ($link): ?>
          <a href="<?php echo $link; ?>">
            <?php endif; ?>
            <?php if ($image): ?>
              <div class="boutique-item">
                <img
                  class="boutique-img"
                  src="<?php echo $image["url"]; ?>"
                  alt="<?php echo $image["alt"]; ?>"
                  loading="lazy"
                />
                <div class="boutique-title text-white">
                  Book Now
                </div>
              </div>
            <?php endif; ?>
            <?php if ($link): ?>
          </a>
        <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <?php endif; ?>
</section>

<section id="cta">
  <div class="container-fluid">
    <div class="row">
      <?php if ($image = get_field('call_to_action_image')): ?>
        <div class="call-to-action text-center mt-3" style="background: url('<?php echo $image["url"]; ?>') no-repeat center bottom; background-size: cover;">
          <div class="cta-container mt-2">
            <div class="py-3">
              <h2 class="display-4"><?php the_field('call_to_action_header'); ?></h2>
            </div>
            <div class="py-2">
              <p class="cta m-0"><?php the_field('call_to_action_text'); ?></p>
            </div>
            <div class="p-b-2 cta-btn pb-4">
              <a href="<?php the_field('call_to_action_button_link'); ?>" class="btn btn-lg btn-secondary">
                <?php the_field('call_to_action_button_text'); ?>
              </a>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<script>
  // Carousel touch slide on mobile
  jQuery(document).ready(function () {
    jQuery('.carousel-inner').swiperight(function () {
      jQuery(this).parent().carousel('prev');
    });

    jQuery('.carousel-inner').swipeleft(function () {
      jQuery(this).parent().carousel('next');
    });
  });
</script>

<?php get_footer(); ?>
