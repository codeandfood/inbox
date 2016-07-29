var app=angular.module('EnquiryApp',[],function($interpolateProvider){
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');
});

var edit_delete_offer = angular.module('EditDeleteOfferApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

var create_offer = angular.module('CreateOfferApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

