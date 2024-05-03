<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

  <?php if (get_field('header_enabled') !== false): ?>
    <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'feature'); ?>
    <div class="header-image-wrapper">
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

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-content mt-4 mb-8">
          <?php the_content(); ?>
          <?php edit_post_link('edit', '<p>', '</p>'); ?>
          <div class="row">
            <div class="col-12 col-md-6 offset-md-3 my-4">
              <!-- Content -->
              <?php
              $args = [
                'post_type'      => 'page',
                'posts_per_page' => 999,
                'post_parent'    => $post->ID,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'post_status'    => 'publish',
              ];
              // 'orderby' => 'date',
              // 	'order' => 'ASC',

              $parent = new WP_Query($args);
              if ($parent->have_posts()) : ?>
                <?php
                $count = 1;
                while ($parent->have_posts()) : $parent->the_post(); ?>
                  <?php
                  $total_count = $parent->post_count;
                  //echo $count;
                  //echo $total_count;
                  ?>
                  <div class="row">
                    <div class="col-12 my-6">
                      <a class="list" data-toggle="collapse" href="#collapse-<?php echo $post->ID; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $post->ID; ?>">
                        <div class="standard-list bg-dark">
                          <div class="standard-list-title d-flex text-center text-white">
                            <h3><?php the_title(); ?></h3>
                          </div>
                        </div>
                      </a>
                      <div class="collapse" id="collapse-<?php echo $post->ID; ?>">
                        <div class="card card-body">
                          <h3><?php the_title(); ?></h3>
                          <?php the_field('list_page_description'); ?>
                          <hr>
                          <?php
                          $images = get_field('list_page_images');
                          $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                          if ($images): ?>
                            <div class="row">
                              <?php foreach ($images as $image): ?>
                                <div class="col-4">
                                  <?php echo wp_get_attachment_image($image['ID'], $size); ?>
                                </div>
                              <?php endforeach; ?>
                            </div>
                          <?php endif; ?>
                          <hr>
                          <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-block">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php $count++; endwhile; ?>
              <?php endif;
              wp_reset_query(); ?>
              <!-- Content End -->
            </div>
          </div>
          <div class="more">
          </div>
        </div><!-- page-content -->
      </div><!-- col-12 -->
    </div><!-- row -->
  </div><!-- container -->
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
              </div><!-- py-3 -->
            </div><!-- row -->
          </div><!-- /cta container -->
        </div><!-- /call-to-action--main-landing -->
      </div><!-- /container-fluid -->
    </div><!-- row -->
  </section><!-- /section.cta -->
<?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
