<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

  <?php if (get_field('header_enabled') !== false): ?>
    <?php if ($headerImageUrl = get_field('header_image_url')): ?>
      <div class="header-image-wrapper">
        <div class="header-image" style="background: url('<?php echo $headerImageUrl; ?>') no-repeat center; background-size: cover;"></div>
        <div class="container">
          <div class="feature-caption <?php echo get_field('caption_position'); ?>">
            <div class="feature-caption-text">
              <h2 class="display-4"><?php the_field('header_text'); ?></h2>
              <h4 class="display-5"><?php the_field('header_sub_text'); ?></h4>
            </div>
            <?php if (get_field('header_link_url')): ?>
              <div class="feature-link-btn pb-6">
                <a href="<?php the_field('header_link_url'); ?>" class="btn btn-lg btn-secondary">
                  <?php the_field('header_link_text'); ?>
                </a>
              </div>
            <?php endif; ?>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>

  <div class="container">
    <div class="row">

      <div class="col-12 content my-4">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php edit_post_link('edit', '<p>', '</p>'); ?>
      </div>

      <?php if (get_field('page_gallery')): ?>
        <div class="col-12 mb-4">
          <h2 class="main-intro text-center mt-2 mb-4">
            Look through our Gallery
          </h2>
          <?php the_field('page_gallery'); ?>
        </div>
      <?php endif; ?>

    </div>
  </div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
