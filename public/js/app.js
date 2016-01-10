var myApp = angular.module('myApp', ['ngRoute', 'ngCookies']);
//# sourceMappingURL=app.js.map

myApp.config(['$routeProvider','$locationProvider',
	function($routeProvider,$locationProvider) {
		$routeProvider.when('/', {
			templateUrl: 'templates/users/login.html',
			controller: 'userController'
		});
		$routeProvider.when('/dashboard', {
			templateUrl: 'templates/users/dashboard.html',
			controller: 'userController'
		});
		$routeProvider.when('/logout', {
			templateUrl: 'templates/users/logout.html',
			controller: 'userController'
		});
}])
