app.service('eventsService',['$q','$http',function($q,$http){
    
    this.loadData = function(numposts,pagenum,searchterm,tag,order,orderby,compare){

        var today = new Date();
        var dd = today.getDate();
        var dd =   ("0" + today.getDate()).slice(-2);
        var mm = today.getMonth()+1; //January is 0! 
        var mm = ("0" + (today.getMonth() + 1)).slice(-2);
        var yyyy = today.getFullYear();
        var todaydate = yyyy+""+mm+""+dd;

        var postType = "event";

        if (order == "") {

            order = "desc";
        }
       
        if (compare == ">") {

            order = "asc";
        }

        if (compare == "<") {

            order = "desc";
        }



        var url = "/wp-json/pb/v2/multiple-post-type?_embed&per_page="+numposts+"&page="+pagenum+"&type[]="+postType+"&tag="+tag;


        if (compare=="") {

            if (orderby!="") {
                url = url + "&meta_key="+orderby;

                url = url + "&orderby=meta_value_num";

                url = url + "&order="+order;
            }


        }  
            
        if (compare!="") {

            url = url + "&meta_key=start_date";

            url = url + "&meta_value="+todaydate;

            url = url + "&orderby=meta_value_num";

            url = url + "&order="+order;

            url = url + "&compare="+compare;


        }  
            
           


        if(searchterm != "")  {
            
            url = url + "&meta_value="+orderby;

            url = url + "&orderby=meta_value_num";

            url = url + "&order="+order;

            url = url + "&search="+searchterm;
        }

        console.log("URL is:" + url);
             
        return $http.get(url);
        
    };
}]);


app.service('searchService',['$q','$http',function($q,$http){
    
    this.loadData = function(searchterm,numposts,pagenum){
        
        return $http.get("/wp-json/pb/v2/multiple-post-type?&per_page="+numposts+"&page="+pagenum+"&search="+searchterm);

    };
}]);


// url for search with custom endpoint : http://irelandfunds.pointblank.ie/wp-json/websiteje/v2/multiple-post-type?per_page=10&orderby=date&search=boston

app.service('tagService',['$q','$http',function($q,$http){
    this.loadtags = function(){
        
        console.log("Two");
        
        return $http.get("/wp-json/wp/v2/tags?per_page=100&hide_empty=true");

    };

}]);


app.service('taxService',['$q','$http',function($q,$http){
    this.loadterms = function(tax){
        
        return $http.get("/wp-json/wp/v2/"+tax+"?per_page=100");
    };

}]);