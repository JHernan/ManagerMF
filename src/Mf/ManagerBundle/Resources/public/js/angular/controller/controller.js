var manager = angular.module('manager', []).config(function($interpolateProvider){
        $interpolateProvider.startSymbol('[[').endSymbol(']]');
    }
);

manager.controller('TeamListCtrl', function($scope, $http) {
    $http.get('http://manager.local/app_dev.php/api/players.json').success(function(data) {
        $scope.teams = data;
    });
});