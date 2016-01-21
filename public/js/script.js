
var app = angular.module('TestApp', ['ngMaterial']);
var app1 = angular.module('LoginApp', ['ngMaterial', 'ngMdIcons']);
var app2 = angular.module('AdminApp', ['ngMaterial', 'ngMdIcons']);
var app3 = angular.module('ResultApp', ['ngMaterial', 'ngMdIcons']);


app3.config(function($mdThemingProvider) {
  $mdThemingProvider.theme('default')
    .primaryPalette('green')
    .accentPalette('orange');
});


app.controller('AppCtrl', ['$scope', function($scope){}]);
app1.controller('AppCtrl', ['$scope', function($scope){}]);
app2.controller('AppCtrl', ['$scope', function($scope){}]);
app3.controller('AppCtrl', ['$scope', function($scope){}]);


//app.config(function($mdThemingProvider) {
//  $mdThemingProvider.theme('default')
//    .primaryPalette('green')
//    .accentPalette('indigo');
//};