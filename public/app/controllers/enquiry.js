
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
            	location.reload();
        	}).error(function(response) {
            	console.log(response);
            	alert('This is embarassing. An error has occured. Please check the log for details');
        	});
     	};

});