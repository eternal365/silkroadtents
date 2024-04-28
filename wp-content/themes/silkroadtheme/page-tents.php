<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

  <div class="header-image-wrapper">
    <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'feature'); ?>
    <div class="header-image" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat center bottom; background-size: cover;"></div>
    <div class="container">
      <?php

      $field = get_field_object('caption_position');
      $value = get_field('caption_position');
      $label = $field['choices'][$value];
      $placement = get_field('caption_position');

      ?>
      <div class="feature-caption <?php echo $placement ?>">
        <div class="feature-caption-text">
          <h2 class="display-4"><?php the_field('header_text'); ?></h2>
          <h4 class="display-5"><?php the_field('header_sub_text'); ?></h4>
        </div>
        <?php if (get_field('header_link_url')) { ?>
          <div class="feature-link-btn pb-6">
            <a href="<?php the_field('header_link_url'); ?>" class="btn btn-lg btn-secondary"><?php the_field('header_link_text'); ?></a>
          </div>
        <?php } ?>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-content mt-4 mb-8">

          <?php the_content(); ?>
          <?php edit_post_link('edit', '<p>', '</p>'); ?>

          <?php

          $parent = new WP_Query([
            'post_type'      => 'page',
            'post_parent'    => $post->ID,
            'posts_per_page' => -1,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            'post_status'    => 'publish',
          ]);

          ?>

          <?php if ($parent->have_posts()): while ($parent->have_posts()): $parent->the_post(); ?>
            <?php

            $title = get_the_title();
            $image = get_field("header_image_url");
            $link = get_permalink();

            ?>
            <div class="tents-item row py-6">
              <div class="col-12 col-md-6">
                <a href="<?php esc_attr_e($link); ?>">
                  <img class="tents-item-image" src="<?php esc_attr_e($image); ?>" alt="<?php esc_attr_e($title); ?>" />
                </a>
              </div>
              <div class="col-12 col-md-6">
                <h3 class="mb-4 mt-6 mt-md-0">
                  <a class="text-body" href="<?php esc_attr_e($link); ?>">
                    <?php esc_html_e($title); ?>
                  </a>
                </h3>
                <div class="mb-4">
                  <?php the_field('list_page_description'); ?>
                </div>
                <a href="<?php esc_attr_e($link); ?>">View More &rarr;</a>
              </div>
            </div>
          <?php endwhile; endif; ?>

          <?php wp_reset_query(); ?>

        </div>
      </div>
    </div>
  </div>

  <section id="cta">
    <div class="container-fluid">
      <div class="row">
        <div class="call-to-action--main-landing text-white text-center mt-3 bg-dark py-8">
          <div class="container mt-2">
            <div class="row">
              <div class="col-sm-6 py-2 cta--main-landing">
                <h4 class=" m-0">Tell us everything about your Event</h4>
              </div>
              <div class="col-sm-6 py-2">
                <a href="<?php echo site_url(); ?>/contact" class="btn btn-md btn-secondary">Get in Touch</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
