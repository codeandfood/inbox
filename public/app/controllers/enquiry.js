
app.controller('EnquiryController',function($scope,$http){
	$scope.enquiry={};

	$scope.submitform=function(){
		$http({
        	    method: 'POST',
            	url:'enquiry' ,
            	data: $.param($scope.enquiry),
            	headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        	}).success(function(response) {
            	console.log(response);
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