edit_delete_offer.controller('EditDeleteOfferController',function($scope,$http){
    $scope.offer={};

    $scope.edit=function(id){
        
        $http({
                method: 'PUT',
                url:'http://localhost/hotelspondy/offers/'+ id,
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

    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: 'http://localhost/hotelspondy/offers/'+id,
            }).
                    success(function(data) {
                        console.log(data);
                        location.reload();
                    }).
                    error(function(data) {
                        console.log(data);
                        alert('Unable to delete');
                    });
        } else {
            return false;
        }
    }

});