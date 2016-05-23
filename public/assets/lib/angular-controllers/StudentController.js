
sampleApp.controller('StudentController', ['$scope', 'Upload','$http',
   $http.get('Json/filier.json')
.success(function(response){
	$scope.filiers=response.filiers;

});


$scope.formModel={};


$scope.save = function () {
        console.log("Enregistrer");


   Upload.upload({
      url: 'https://angular-file-upload-cors-srv.appspot.com/upload',
      data: $scope.formModel
   


   });
  save();
  $scope.formModel="";

   };
$scope.myForm = false; 
$scope.inscrire = function() {
   $scope.myForm = !$scope.myForm;
 
};  
]);
sampleApp.controller('ControllerListe',function($scope, $http){
	$scope.etudiants = []; //declare an empty array
	$http.get('Json/etudiant.json').success(function(response){ 
		$scope.etudiants = response;  //ajax request to fetch data into $scope.data
	});


		$scope.remove=function(etudiant){
var index=$scope.etudiants.indexOf(etudiant);
alert ("Bien Supprimer, l'Etudiant du ligne :" +index);
$scope.etudiants.splice(index,1);
	};


			
	
	$scope.sort = function(keyname){
		$scope.sortKey = keyname;   //set the sortKey to the param passed
		$scope.reverse = !$scope.reverse; //if true make it false and vice versa
	}
});
sampleApp.controller ('EditController',function($scope,$routeParams,$location){
	
	$scope.etudiants = {};
	
	var id=$routeParams.id;
	
	$scope.etudiant=$scope.etudiants[id];
	
	$scope.save=function(){
		//save to db
		//after saving success promise 
		// redirect 
		$location.path('/'); //main page
	};

