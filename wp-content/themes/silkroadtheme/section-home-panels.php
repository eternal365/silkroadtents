<?php $keys = ['wedding', 'festival', 'corporate']; ?>

<?php foreach ($keys as $index => $key): ?>
  <?php if ($image = get_field($key . '_image')): ?>
    <section id="<?php echo $key; ?>" class="py-4">
      <a href="<?php the_field($key . '_link'); ?>" class="anchor-black">
        <div class="container">
          <div class="row no-gutters <?php echo ($index % 2 !== 0) ? 'flex-row-reverse' : ''; ?>">
            <div class="col-sm-6">
              <div class="hp-event-panel">
                <img
                  class="hp-event-panel-image"
                  src="<?php echo $image["url"]; ?>"
                  alt="<?php echo $key; ?>"
                  loading="lazy"
                />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel" style="background-color: <?php the_field($key . '_bg'); ?>">
                <div class="hp-event-panel-text text-center">
                  <h2 class="panel-title"><?php the_field($key . '_title'); ?></h2>
                  <p><?php the_field($key . '_text'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </section>
  <?php endif; ?>
<?php endforeach; ?>
