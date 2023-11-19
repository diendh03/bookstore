$domain = "http://localhost:81/";
var myApp = angular
  .module("myApp", ["angularUtils.directives.dirPagination"])
  .constant("API", $domain);
function OtherController($scope) {}
