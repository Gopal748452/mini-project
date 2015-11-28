var app = angular.module('myapp',['ngRoute'],function($httpProvider) {
 $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
  });
app.config(['$routeProvider',function($routeProvider) {
	$routeProvider.when('/',{
		templateUrl : 'templates/Landing.html',
		controller : 'Boot_Controller'
	}).when('/show_route',{
	templateUrl : 'templates/train_btw_stations.html',
	controller: 'show_maps'	
	}).when('/show_trains',{
		templateUrl : 'templates/train_search.html',
  	controller: 'List_Train_Controller'
	});
}]);