
	<div class="header-image-wrapper">	
		<div class="header-image" style="background: url('<?php the_field("header_image_url") ?>') no-repeat <?php the_field('header_image_position'); ?>; background-size: cover;">	
		</div><!-- header image -->
		<div class="container">
					<?php
					// This allows the user to choose the positioning of the featured text box
					/*
					*  Displaying a single value's Label
					*/

					$field = get_field_object('caption_position');
					$value = get_field('caption_position');
					$label = $field['choices'][ $value ];

					?>
					<?php $placement = get_field('caption_position'); ?>

				
						<div class="feature-caption <?php echo $placement ?>">
							<div class="feature-caption-text">
								<h2 class="display-4"><?php the_field('header_text');?></h2>
								<h4 class="display-5"><?php the_field('header_sub_text');?></h4>
							</div><!-- feature-caption-text -->
							<?php if ( get_field('header_link_url') ) { ?>
								<div class="feature-link-btn pb-6">
									<a href="<?php the_field('header_link_url');?>" class="btn btn-lg btn-secondary"><?php the_field('header_link_text');?></a>
								</div><!-- feature-link -->
							<?php } ?>
							<div class="clearfix"></div>
						</div><!-- feature-caption -->
		</div><!-- container -->
	</div><!-- header image wrapper -->		