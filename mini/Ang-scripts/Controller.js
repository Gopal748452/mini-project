app.controller('Boot_Controller', ['$scope', function($scope){
}]);


app.controller('List_Train_Controller',['$scope','$http',function($scope,$http){
$scope.train_no;
$scope.loaded = false;
$scope.url = '/php_Scripts/trains.php';
$scope.get_route = function () {
  $scope.loaded = true;
$http({
        method: 'POST',
        cache  : true,
        url : '/php_Scripts/trains.php',
        data : 'train_no='+$scope.train_no+"&fun="+'train_route',
        headers : {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(response){
        console.log(response);
        $scope.loaded = false;
        $scope.train_name = response.train.name;
        $scope.trains_records = response.route;
  });
};
}]);

app.controller('show_maps',['$http','$scope','$timeout',function($http,$scope,$timeout){
    $scope.loading = false;
            var latlng = new google.maps.LatLng(21.0000,78.0000);
            var myOptions = {
                zoom: 4,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            $scope.map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            $scope.train_no;
            $scope.places = [];
            $scope.set_map_path = function  () {
     $scope.loading =true;
            $http({
              method: 'POST',
              url : 'php_Scripts/trains.php',
              data : 'train_no='+$scope.train_no+"&fun="+'train_route',
              headers : {'Content-Type': 'application/x-www-form-urlencoded'}
                  }).success(function(response){
           for(var i=0;i<response.route.length;i++){
            if(!response.route[i].lat == 0){
             $scope.places.push({'lat': response.route[i].lat,'lng' : response.route[i].lng });
                 }
               $scope.train_station = response.route;  
               }
              console.log($scope.places);
   $timeout(function(){
$scope.loading =false;
$scope.map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
 for(var i=0;i<response.route.length;i++){
           if(!response.route[i].lat == 0){
           var marker = new google.maps.Marker({
             position: {'lat': response.route[i].lat,'lng' : response.route[i].lng } ,
             title : response.route[i].fullname+response.route[i].scharr+response.route[i].schdep,
             map: $scope.map,
             animation: google.maps.Animation.DROP,
              });
             marker.setPosition({'lat': response.route[i].lat,'lng' : response.route[i].lng });
    }
 }
var flightPath = new google.maps.Polyline({
                  path: $scope.places,
                  geodesic: true,
                  strokeColor: '#FFFF00',
                  strokeOpacity: 1.0,
                  strokeWeight: 2
                        }); 
      
                flightPath.setMap($scope.map);

                         });
                  });

    };
            $scope.coordinates = {
                  x1 : '',
                  x2 :''
             };
    navigator.geolocation.getCurrentPosition(coordinates);
function coordinates(position) {
    
$scope.coordinates.x1 =  position.coords.latitude;
$scope.coordinates.x2 =  position.coords.longitude;
    //$scope.show_map();
    
    // body...
console.log($scope.coordinates.x1,$scope.coordinates.x2);

}

$scope.clicked_place = 'Not selected yet';
    $scope.map;


        $scope.markers = [];
        $scope.markerId = 1;

}]);