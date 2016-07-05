var app = angular.module('enquiryApp', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');
});

app.controller('enquiryController', function($scope, $http){

	$scope.enquiry = {};

	$scope.submitForm = function() {
    // Posting data to php file
    // $http({
    //   method  : 'POST',
    //   url     : 'enquiry',
    //   data    : { name: $scope.enquiry.name,email: $scope.enquiry.email,mobile: $scope.enquiry.mobile,message: $scope.enquiry.message}, //forms user object
    //   headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
    //  })
    //   .success(function(data) {
    //   	console.log(data);
    //     if (data.errors) {
    //       // Showing errors.
    //       $scope.errorName = data.errors.name;
    //       $scope.errorUserName = data.errors.username;
    //       $scope.errorEmail = data.errors.email;
    //     } else {
    //       $scope.message = data.message;
    //     }
    //   });
    //   
        $http.post('enquiry', {
        	name: $scope.enquiry.name,
        	email: $scope.enquiry.email,
        	mobile: $scope.enquiry.mobile,
        	message: $scope.enquiry.message
        }).success(function(data, status, headers, config) {
        	console.log(data);
        });

    };
});