
sampleApp.controller('profsController',function ($scope, Upload) {
    $scope.formModel = {};

    $scope.save = function(data, status, headers, config) {
    	

        console.log("Enregistré");

    Upload.upload({
      
      url: 'https://angular-file-upload-cors-srv.appspot.com/upload',
      data: $scope.formModel,
    });
	       $scope.formModel = '';
    }
});