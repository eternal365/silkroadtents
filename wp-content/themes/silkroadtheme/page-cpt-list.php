<?php get_header(); ?>   


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<a name="main-content">
		<h1 class="main-content"></h1>
	</a>

<div class="container container-narrow pt-4" ng-controller="eventsController" id="scroll">

	<div class="row">
		<div class="col-12 my-2">
			
			<div class="d-flex flex-column justify-content-around justify-content-md-start flex-md-row filter-bar">
			
	            <div class="input-search-fullwidth mr-3" ng-init="searchterm">
			        <span class="input-group-btn">                
			               </span>
			        <input 
			        	id="searchbox" 
			        	name="searchbox"
			        	type="text" 
			        	ng-model="searchterm" 
			        	class="form-control-search-full" 
			        	ng-change="loaddata(numposts,1,searchterm,tag.slug,order,orderby,compare)"
			        	ng-model-options="{debounce:500}"
			        	placeholder="Search...">
			
				</div>

	            <div class="dropdown mr-md-3">
                    <button class="sort-by btn btn-secondary-brand dropdown-toggle" 
							type="button" id="dropdownMenuButton" 
							data-toggle="dropdown" 
							aria-haspopup="true" 
							aria-expanded="false"
					>
                        <span ng-if="!orderby"> Sort By </span> {{ orderby}}  {{order}}
                    </button>
                    <div class="dropdown-menu"  aria-labelledby="dropdownMenuButton">
                       	
						<a class="dropdown-item" ng-click="sortBy('asc','lots')" href="#">Lots ascending</a>
						<div class="dropdown-divider"></div>

                    	<a class="dropdown-item" ng-click="sortBy('desc','lots')" href="#">Lots descending</a>
						<div class="dropdown-divider"></div>

                   	 	<a class="dropdown-item" ng-click="sortBy('desc','price')" href="#">Price high to low</a>
						<div class="dropdown-divider"></div>

                   		<a class="dropdown-item" ng-click="sortBy('asc','price')" href="#">Prices low to high</a> 
                    
                    </div>
                </div>

	            <button type="button" ng-click="clearAll()" class="view-all btn btn-secondary-brand text-uppercase">Clear Filter / View All</button>

	        </div>

            <div class="dropdown hamburger-filter-wrapper mb-3">
                    
                <button class="btn-hamburger-filter dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                	<span class="navbar-toggler-icon-r-1-filter"></span>
                	<span class="navbar-toggler-icon-r-filter"></span>
                	<span class="navbar-toggler-icon-r-small-filter"></span>
                	<span class="text-uppercase Roboto-Light pl-2">Filter:  {{tag.name}}</span>
            	</button>
            	
				


                
                <div class="dropdown-menu pt-3" aria-labelledby="dropdownMenuButton">
                	
					<a ng-repeat="tag in tags" class="dropdown-item" ng-click="tagquery(tag)" href="#">{{tag.name}}</a>
                
				</div>
           
            </div>
	        
			<div class="container" >
				<div class="m-3 text-center" ng-show="loading">
				  <i class="fa fa-cog fa-spin mt-2 fa-3x"></i>
				</div>
				<div ng-repeat="post in posts">  

			        <div class="current-auctions-list">

			        	<div class="auction-wrapper bkg-white">
				        	<div class="row">
				        		<div class="col-lg-6">
				        			<!-- <img src="{{post.acf.image}}" alt="" class="img-fluid">  -->

	 								<!-- Ireland Funds -->
				        			<!--  <img ng-if="post.better_featured_image.source_url!=''" class="img-fluid card-img-bottom mx-auto" 
                                        ng-src="{{post.better_featured_image.media_details.sizes['page-latest-news']['source_url']}}"  alt=""> -->

                                    <img ng-if="post.better_featured_image.source_url!=''" class="img-fluid" 
                                        ng-src="{{post.better_featured_image.media_details.sizes.thumbnail.source_url}}"  alt="">

				        		</div>
				        		<div class="col-lg-6">
					        			
					        		<div class="auction-info Roboto-Light mr-0 mr-lg-2 px-4 px-lg-0 d-flex flex-column justify-content-center justify-content-sm-between text-center text-lg-left">

					        			<div class="auction-info-top">
											<h3 class="">{{post.title.rendered}} {{post.date}}</h3>
											<p class="" ng-bind-html="post.content.rendered"></p>
					        			</div>

					        			<div class="auction-info-bottom">
											<p class="date"><strong class="font-weight-bold">{{post.acf.start_date}} - {{post.acf.end_date}}</strong></p> 
											<p class="price"><strong class="font-weight-bold">Price: �{{post.acf.price}}</strong></p> 
							               	<a class="btn btn-primary-brand btn-lg mr-auto mr-sm-3 mr-md-4 mb-sm-0" href="{{post.link}}" role="button">View Details</a>
							               	<a class="btn btn-secondary-brand bid-button float-lg-right mr-auto mr-lg-3" href="#" role="button">Place a bid</a>
					        			</div>

				        			</div>

				        		</div>
				        	</div>
			        	</div>

			        </div>
				</div>

				<p ng-if="posts.length==0 && !loading ">Sorry, no posts matched your criteria.</p>

			</div>

			GO TO PAGE:
			<?php 
				get_template_part('section', 'pagination');
				//require_once('pagination.php'); 

			?>

		</div>
	</div>

</div><!-- container  -->


<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>