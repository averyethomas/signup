var app = angular.module('angularApp', []);

app.controller('mainCtrl', ['$scope', function($scope){
    $scope.hello = 'Hi!';
}]);

$(document).ready(function(){
    var visibility = $('.hero').visible(true, false, 'both');
  
    if (visibility == true) {
      $('nav').removeClass('fixed');
    } else {
      $('nav').addClass('fixed');
    }
});


$( window ).scroll(function() {
  var visibility = $('.hero').visible(true, false, 'both');
  
  if (visibility == true) {
    $('nav').removeClass('fixed');
  } else {
    $('nav').addClass('fixed');
  }
});