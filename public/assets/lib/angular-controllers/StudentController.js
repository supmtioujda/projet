
sampleApp.controller('StudentController', ['$scope', '$http',
    function ($scope, $http) {

        var resget = $http.get('http://localhost/supmti-Gabsence/public/allStudents.json');
        resget.success(function(data, status, headers, config) {
            $scope.data = data;
        });
        resget.error(function(data, status, headers, config) {
            alert( "erreur message: " + JSON.stringify({data: data}));
        });

        $scope.save = function () {
            var student = {
                "nom" : $scope.nom,
                "prenom" : $scope.prenom,
                "dateN" : $scope.dateN,
                "lieuN" : $scope.lieuN,
                "tel" : $scope.tel,
                "email" : $scope.email,
                "situationFam" : $scope.situationFam,
                "nomT" : $scope.nomT,
                "adresseT" : $scope.adresseT,
                "teleF" : $scope.teleF,
                "profPere" : $scope.profPere,
                "profMere" : $scope.profMere,
                "photo" : $scope.photo,
                "adresse" : $scope.adresse
            };
            var res = $http.post('http://localhost/supmti-Gabsence/public/addStudent', student);
            res.success(function(data, status, headers, config) {
                $scope.msg = data;
                $scope.data.push(student);
            });
            res.error(function(data, status, headers, config) {
                alert( "failure message: " + JSON.stringify({data: data}));
            });
        };
    }
]);

