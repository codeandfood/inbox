var app = angular.module('enquiryApp', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');
});

var edit_offer = angular.module('editofferApp', [], function($interpolateProvider) {
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

edit_offer.controller('EditOffersController',function($scope,$http){

    $scope.offer = {};

    $scope.edit = function(){
        $http.put('offer',{
            name: $scope.offer.name,
            content: $scope.offer.content,
            start_date: $scope.offer.start_date,
            end_date: $scope.offer.end_date,
            price: $scope.offer.price,
            mobile: $scope.offer.mobile
            email: $scope.offer.email,
        }).success(function(data,status,headers,config){
            console.log(data);
        });
    };
});