<ul class="pagination" id="pagination" ng-cloak ng-show="!loading" ng-if="totalPages > 1 ">
<li ng-if="pagenum >1 " class="page-item">
    <!--<a ng-click="loaddata('categories',<?php echo $cur_cat_id;?>,20,pagenum-1)"-->
    <a ng-click="loaddata(numposts,pagenum-1,searchterm,tag.slug,order,orderby,compare)" 
        class="prev page-numbers" href="">«
    </a>
</li>
 
<li class="page-item" ng-repeat="i in counter(totalPages) track by $index">
    
    <span ng-if="pagenum == $index+1" 
        class="page-numbers current">{{$index+1}}</span>

    <!-- ng-click="loaddata('categories',<?php echo $cur_cat_id;?>,20,$index+1)"-->
    <a class="page-numbers"  ng-if="pagenum != $index+1" 
      ng-click="loaddata(numposts,$index+1,searchterm,tag.slug,order,orderby,compare)"
      href="">{{$index+1}}
    </a>

     
</li>

<li class="page-item" ng-if="pagenum < counter(totalPages).length">
    <!-- ng-click="loaddata('categories',<?php echo $cur_cat_id;?>,20,pagenum+1)" -->
    <a class="next page-numbers" 
        href=""
        ng-click="loaddata(numposts,pagenum+1,searchterm,tag.slug,order,orderby,compare)"
        >»</a>
</li>
</ul>

        