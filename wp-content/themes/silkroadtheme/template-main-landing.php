<?php 
/*
Template Name: Main Landing Page
*/
?>
<?php get_header(); ?>

<section id="header-image">
    <!-- Header Image Sectoin-->
    <?php get_template_part('section-main', 'headerImage'); ?>
</section>
<div class="container">
    <h2 class="main-intro text-center mt-4 mb-1">
        <?php the_field('services_main_title'); ?>
    </h2>
    <?php if( have_rows('main_services') ): ?>
        <div class="row">
			<?php while( have_rows('main_services') ): the_row(); 
			    // vars
				$image = get_sub_field('services_image');
				$link = get_sub_field('services_url');
            ?>
            <div class="col-sm my-4">
				<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
				<?php endif; ?>
					<?php if( $image ): ?>
					<div class="services-img" style="background:url('<?php echo $image["url"]; ?>') no-repeat center;background-size: cover;">
						<div class="services-title text-center text-white">
							<?php the_sub_field('services_title'); ?>
						</div>	
					</div>
					<?php endif; ?>	
				<?php if( $link ): ?>
				</a>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>					
        </div>
        <?php endif; ?>	
        <div class="row">
            <div class="col-12 intro">
                <?php if ( get_field('main_intro_header') ) { ?>
                    <h2 class="main-intro text-center my-4">
                        <?php the_field('main_intro_header');?>
                    </h2>
                <?php } ?>
                <?php if ( get_field('main_intro_text') ) { ?>
                    <h6 class="text-left my-4">
                        <?php the_field('main_intro_text');?>
                    </h6>
                <?php } ?>
            </div>
            <div class="col-12">   
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>
                    <?php edit_post_link('edit', '<p>', '</p>'); ?>

                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, this page does not exist.'); ?></p>
                <?php endif; ?>
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

<?php get_footer(); ?>