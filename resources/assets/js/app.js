app = angular.module('app',[]);
app.controller('comment_controller',function($scope,$http) {
    $scope.data = {
        comment : '',
        email : '',
        name : ''
    };
    $scope.comments = [];
     $scope.postComment = function() {
         $scope.data.post_id = $scope.post_id;
         $http({
             method:"POST",
             url:"/api/comments",
             data:$scope.data
         }).then(function(data) {
             if(data.data.success == 0) {
                 $scope.errors = data.data.errors;
             }
             else {
                 $scope.comments_count++;
                 $scope.comments.push($scope.data);
                 $scope.data = {
                     comment: '',
                     email: '',
                     name: ''
                 };
             }
         });
     };
    $scope.md5 = function(email) {
        return md5(email);
    }
});