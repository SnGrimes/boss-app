var testApp = angular.module('testing',[]);


testApp.controller('GetUserController', ['$scope','$http',
            function($scope,$http) {
            $http.get('http://localhost/BossApp/api/index.php').success(function(data) {
                
                $scope.users = data;
                
            });
        }
]);
   
 
