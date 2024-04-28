app.controller('eventsController', ['$scope','$http','$location','$sce','$filter','eventsService','angularGridInstance','tagService','taxService','$anchorScroll', function ($scope,$http,$location,$sce,$filter,eventsService, angularGridInstance, tagService, taxService,$anchorScroll) {

    $scope.posts = {};
    $scope.terms = {};
    $scope.loading = false;
    $scope.btnShow = false;
    $scope.nextpagenum = 0;
    $scope.compare = '';
    $scope.titlemonth = [];
    $scope.titlemonth[0] = "";
    $scope.monthchange = false;
    $scope.viewall = {};
    $scope.totalPages = 0;
    $scope.viewall.id = 0;
    $scope.viewall.name = "View All";

    $scope.order = '';
    $scope.orderby = '';

    $scope.post_parent = '';
    $scope.pagenum = 0;

    //Variables for updated lotsController
    $scope.numposts = 10;
    $scope.searchterm = "";
    $scope.tag = { name:'',slug:''};

    if ($location.search()['searchterm']) { 

        $scope.searchterm = $location.search()['searchterm'];
        console.log("url search is : " + $scope.searchterm);
    }

    if ($location.search()['pagenum']) { 

        $scope.pagenum = $location.search()['pagenum'];
        console.log("url pagenum is : " + $scope.pagenum);
    }

    if ($location.search()['tag']) { 

        $scope.tag.slug = $location.search()['tag'];
        console.log("url tag is : " + $scope.tag);

    } 

    if ($location.search()['order']) { 

        $scope.order = $location.search()['order'];
        console.log("url order is : " + $scope.order);

    } 

    if ($location.search()['orderby']) { 

        $scope.orderby = $location.search()['orderby'];
        console.log("url orderby is : " + $scope.orderby);

    } 

    $scope.locationUrl = $location.url().split("/");
    $scope.locationHash = $location.hash();
   
    if($scope.locationUrl[1] == "past")
    {
        $scope.compare = '<';        
    }

    if($scope.locationUrl[1] == "upcoming")
    {
        $scope.compare = '>';        
    }

    $scope.monthName = function (oldmonth,month,index) 
    {
        var oldm =  $filter('date')(oldmonth,'MMMM');
        var newm =  $filter('date')(month,'MMMM');

        if (newm != oldm) 
        {
            $scope.titlemonth[index] = oldm;               
        } 
        else 
        {
            $scope.titlemonth[index] = "oldm";
        }
               
    }
    
    $scope.filtered = "All";

    
    $scope.sortBy = function(order,orderby)
    {

        $scope.order = order;
        $scope.orderby = orderby;

        $scope.orderLabel = $scope.order;

        console.log("Order By: " + $scope.orderby);
        console.log("Order: " + $scope.order);

        if($scope.orderby == 'lot_no')
        {
            $scope.orderbyLabel = "LOTS";
        } 
        else if($scope.orderby == 'lowest')
        {
            $scope.orderbyLabel = "EST";
        } 
       
        if($scope.orderby == 'price' && $scope.order == 'asc')
        {   
            $scope.orderLabel = 'Low to High'; 
        } 
        else if($scope.orderby == 'price' && $scope.order == 'desc')
        {
            $scope.orderLabel = 'High to Low'; 
        }

    
        $scope.loaddata($scope.numposts,1,$scope.searchterm,$scope.tag.slug,$scope.order,$scope.orderby,$scope.compare);


    }

    $scope.clearAll = function()
    {
        $scope.searchterm = '';
        $scope.tag = { name:'',slug:''};
        $scope.order = 'asc';
        $scope.orderby = 'price';
        $scope.orderbyLabel = 'price';
        $scope.orderLabel = 'ASC';

        $scope.numposts = 999;

        $scope.loaddata($scope.numposts,1,$scope.searchterm,$scope.tag.slug,$scope.order,$scope.orderby,$scope.compare);
    }

    $scope.loadtax = function (tax) 
    {
         taxService.loadterms(tax).then(function(data)
         {
           
         });
    }

    $scope.loadtags = function () 
    {
         tagService.loadtags().then(function(data)
         {
            console.log("One");
            $scope.tags = data.data;
         });
    }
   
    $scope.tagquery = function (tag) 
    {
        $scope.tag = tag;
        $scope.loaddata($scope.numposts,1,$scope.searchterm,$scope.tag.slug,$scope.order,$scope.orderby,$scope.compare);
    }

    $scope.loaddata = function (numposts,pagenum,searchterm,tag,order,orderby,compare) {

        $scope.loading = true;
        $scope.btnShow = false;

        $scope.pagenum = pagenum;

        $location.search('pagenum', pagenum);
        $location.search('searchterm',searchterm);
        $location.search('tag', tag);

        $location.search('order', order);
        $location.search('orderby',orderby);

        console.log(" load Pagenum is " + pagenum);

        $location.hash('scroll');

        $anchorScroll();


        if (compare == ">") 
        {
            $location.url('upcoming');
        }

        if (compare == "<") 
        {
            $location.url('past');
        }

        //$location.url('upcoming');

        eventsService.loadData(numposts,pagenum,searchterm,tag,order,orderby,compare).then(function(data){ 

            console.log("Compare is: " + compare);

            $scope.loading = false;

            console.log("Pagenum is " + pagenum);
            
            if (pagenum == 1) 
            {
                $scope.posts = {};
            }
                    
            $scope.nextpagenum = pagenum + 1;
                    
            $scope.posts = data.data;
            //[].push.apply($scope.posts, data.data);

            $scope.loading = false;

            if ($scope.posts.length >  data.headers('X-WP-Total')-1 ){
                    
                $scope.btnShow = false;
           
            } else {

                $scope.btnShow = true;
            }
            
            $scope.totalPages = parseInt(data.headers('X-WP-TotalPages'), 10);  
            $scope.counter = Array;

            /*
             $cookies.put("backlink", $location.absUrl(), {
                expires: new Date(2020, 1, 1),path: "/"
            });
            */

            console.log("Total posts: "+data.headers('X-WP-Total'));
            console.log(data.data.length);
            console.log("Post Length: "+$scope.posts.length);

            
            });

        }

        $scope.loadtags();
        //$scope.sortBy($scope.order,$scope.orderby);
        $scope.loaddata($scope.numposts,1,$scope.searchterm,$scope.tag.slug,$scope.order,$scope.orderby,$scope.compare); 

}]);


app.controller('searchController', ['$scope', '$http','$sce','searchService','angularGridInstance','taxService', function ($scope, $http, $sce, searchService, angularGridInstance, taxService) {

    $scope.posts = {};
    $scope.terms = {};
    $scope.loading = false;
    $scope.btnShow = false;
    $scope.nextpagenum = 0;

    $scope.filtered = "All";

    $scope.loaddata = function (searchterm,numposts,pagenum) {
        
        console.log("Seaching...." + searchterm);
        
        $scope.loading = true;
        $scope.btnShow = false;
        
        searchService.loadData(searchterm,numposts,pagenum).then(function(data){
            //console.log("data is "+JSON.stringify(data.data));
           // $scope.posts = data.data;

            $scope.loading = false;

            console.log("pagenum is "+pagenum);
            
            if (pagenum==1) {
                
                $scope.posts = {};
                //angularGridInstance.gallery.refresh();
            }
                    
                    
            $scope.nextpagenum = pagenum+1;
           
                    
                    
            [].push.apply($scope.posts, data.data);
            //$scope.posts = data.data;

            

            $scope.loading = false;

            if ($scope.posts.length >  data.headers('X-WP-Total')-1 ){
                    
                $scope.btnShow = false;
           
            } else {

                $scope.btnShow = true;
            }

            if(!searchterm) {
                $scope.posts = {};
                $scope.btnShow = false;

            }

            console.log("total posts "+data.headers('X-WP-Total'));
            console.log(data.data.length);
            console.log("post length  "+$scope.posts.length);
      
            
            });

        }
        

}]);

app.filter('decoded', function() {
  "use strict";

  function htmlDecode(input) {
    var e = document.createElement('div');
    e.innerHTML = input;
    return e.childNodes[0].nodeValue;
  }

  return function(input) {
    return htmlDecode(input);
  }
});



 
       

   


