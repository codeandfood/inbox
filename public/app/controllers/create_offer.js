create_offer.controller('CreateOfferController',function($scope,$http){
    $scope.offer={};

    $scope.create=function(){
        
        $http({
                method: 'POST',
                url:'http://localhost/hotelspondy/offers',
                data: $.param($scope.offer),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(response) {
                if(response.status=='success'){
                    $scope.success = true;
                    $scope.error = false;
                    $scope.message = response.message;
                }else if(response.status=='error'){
                    $scope.error = true;
                    $scope.success = false;
                    $scope.message = response.message;
                }
            }).error(function(response) {
                console.log(response);
                alert('This is embarassing. An error has occured. Please check the log for details');
            });
    };

});