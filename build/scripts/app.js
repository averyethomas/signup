var app = angular.module('angularApp', []);

app.controller('mainCtrl', ['$scope', function($scope){}]);

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

$(document).ready(function() {
   $(form)[0].reset();  
});