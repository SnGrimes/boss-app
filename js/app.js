var bossApp = angular.module('boss',['ngResource', 'ngRoute']);

bossApp.controller("TabController", function() {
   this.tab = 1;
   
   this.selectTab=function(setTab){
        this.tab=setTab;    
   };
   
   this.isSelected = function(checkTab) {
        return this.tab === checkTab;
   };
});

bossApp.controller('CharacterListController', [
    '$scope', '$http',
        function($scope,$http) {
            $http.get('api/index.php').success(function(data) {
                
                $scope.characters = data;
            });
        }
]);

//bossApp.factory('Character', ['$resource', function($resource) {
    //return $resource( '/test/:charId',
     //                {charId: '@charId'}, {
     //                   active: {
     //                       method:'POST',
     //                       params:{charId: '@charId'}
     //                   }
    //                 });
    
    
//}]);