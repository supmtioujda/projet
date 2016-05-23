
var sampleApp = angular.module('sampleApp', ['ngFileUpload','ngMask','ngRoute','ngFileUpload','ngMask']);
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
		when('/listeetudiant',{
		templateUrl:'/resources/views/supmti/pages/partial/ListeEtudiant.html',
		controller:'ControllerListe'
	}).when('/EditEtudiant/:id',{
		templateUrl:'/resources/views/supmti/pages/partial/EditeEtudiant.html',
		controller:'EditController'
	}).otherwise({
        redirectTo: '/'
      }).when('/formetudiant',{
		templateUrl:'/resources/views/supmti/pages/partial/FormEtudiant.html',
		controller:'Controller'
			}).
      otherwise({
        redirectTo: '/'
      });
}]);


 
 
