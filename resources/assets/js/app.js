app = angular.module('commentApp',[]);
app.controller('comment_controller',function($scope,$http) {
    $scope.data = {};
     $scope.postComment = function() {
         $http({
             method:"POST",
             url:"/api/comments",
             data:$scope.data
         }).then(function(response) {
             alert('success');
         });
     };
});