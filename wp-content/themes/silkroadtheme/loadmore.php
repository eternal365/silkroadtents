<!-- Original Load More button -->
<div class="text-xs-center">

    <a id="loadbtn" ng-if="btnShow" ng-click="loaddata()" class="btn btn-secondary no-shadow text-uppercase " href="">Load More</a>
    <i ng-if="loading" class="ajax-loader p-4 fa fa-spinner fa-spin fa-fw"></i>
	<span class="sr-only">Loading...</span>

</div>
