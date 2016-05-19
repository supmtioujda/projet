
var sampleApp = angular.module('sampleApp', ['ngFileUpload','ngMask','ngRoute']);
sampleApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: '/resources/views/supmti/pages/home.html',
        controller: 'HomeController'
    }).
      when('/students', {
        templateUrl: '/resources/views/supmti/pages/students.html',
        controller: 'StudentController'
      }).
	  when('/profs', {
        templateUrl: '/resources/views/supmti/pages/profs.html',
        controller: 'profsController'
      }).
	      when('/modules', {
        templateUrl: '/resources/views/supmti/pages/modules.html',
        controller: 'modulesController'
      }).
	      when('/salarier', {
        templateUrl: '/resources/views/supmti/pages/salarier.html',
        controller: 'salarierController'
      }).
	      when('/addpanels', {
        templateUrl: '/resources/views/supmti/pages/panels.html',
        controller: 'panelsController'
      }).
	    when('/addicons', {
        templateUrl: '/resources/views/supmti/pages/icons.html',
        controller: 'iconsController'
      }).
	  
      otherwise({
        redirectTo: '/'
      });
}]);


 
 
