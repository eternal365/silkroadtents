<?php get_header(); ?>
<?php
$cur_cat_id = get_cat_id( single_cat_title("",false) );
?>
  <!-- Start the Content here -->
   <!-- change the second param in loaddata function to set how many posts per page -->
    <div class="container" ng-controller="loadMoreController" ng-init="loaddata(<?php echo $cur_cat_id;?>,2,1,year)" ;>
      <div class="row">
          <div class="col-md-12">

          <?php if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<div class="breadcrumb">','</div>');
        } ?>



          <?php  
          //$attachment_id = get_field("pb_category_image", "category_".$cur_cat_id);
          //$image_attributes = wp_get_attachment_image_src( $attachment_id, '1110x230' ); // returns an array
          ?>
        

          <?php if ( !empty($attachment_id) ) { ?>

          <div class="image-box sub1">
            <img src="<?php echo $image_attributes[0]; ?>" >
          <div class="image-box-content">
            <h1 class="pull-left"><?php single_cat_title(); ?></h1>
          </div><!--image-box-content-->
          </div><!-- image-box -->

          <?php } else { ?>
          <div class="image-box-content">
            <h1><?php single_cat_title(); ?></h1>
          </div><!--image-box-content-->

          <?php } ?>  

          <?php
          if (category_description()) {
            echo '<p>';
            echo category_description(); 
            echo '</p>';
          }
          ?>
        
          </div>
        </div>

      <div class="row">
          
        <div class="col-md-3">
         

          <?php get_sidebar(); ?> 
          

        </div><!-- col 3 -->


        <div class="col-md-9">

          <div class="content">
          
              <div class="row" ng-repeat="post in posts" ng-cloak>
               

                  <a ng-if="post.better_featured_image.source_url!=''" href="{{post.link}}">
                    <div class="image-box sub1">
                    <img  ng-cloak ng-src="{{post.better_featured_image.source_url}}" class="img-responsive">
                     <div class="image-box-content">
                      <h1>{{post.title.rendered}}</h1>
                     </div><!--image-box-content-->
                    </div><!-- image-box -->
                  </a>

                  
                  <div  ng-if="post.better_featured_image.source_url==''" class="image-box-content">
                    <a href="{{post.link}}">
                    <h1>{{post.title.rendered}}</h1>
                    </a>
                  </div><!--image-box-content-->

             
               
               <div ng-bind-html="post.content.rendered"></div>
              

           
            </div> 
           
                                
          </div>

          <div id="calendar"></div>

			<div class="text-xs-center">
                <!-- change the second param in loaddata function to set how many posts per page -->
	            <a id="loadbtn"  ng-if="btnShow"  ng-click="loaddata(<?php echo $cur_cat_id;?>,2,nextpagenum,year)" class="btn btn-primary btn-lg btn-load-more" href="#">Load More</a>
	            <i ng-if="loading" class="ajax-loader  p-4 fa fa-spinner fa-spin fa-fw"></i>
				<span class="sr-only">Loading...</span>
			</div>

        </div><!-- col 9 -->

    </div><!-- row -->  
        
  

</div><!-- container -->



<?php get_footer(); ?>
