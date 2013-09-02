var manager = angular.module('manager', []).config(function($interpolateProvider){
        $interpolateProvider.startSymbol('[[').endSymbol(']]');
    }
);


manager.controller('TeamListCtrl', function($scope) {
  $scope.teams = [
    {"name": "Real Madrid",
     "img": "http://www.mushofutbol.com/images/users/madrid.png"},
    {"name": "Barcelona",
     "img": "http://www.mushofutbol.com/images/users/mini2.png"},
    {"name": "Atlétivo de Madrid",
     "img": "http://www.mushofutbol.com/images/users/atletico.png"},
    {"name": "Betis",
     "img": "http://www.mushofutbol.com/images/users/atletico.png"},
    {"name": "Valencia",
     "img": "http://www.mushofutbol.com/images/users/atletico.png"}
  ];
});