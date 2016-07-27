<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Property;
use Response;
use View;
use Auth;
use Redirect;


class PropertyController extends Controller
{
    function getOffers(){
    	$Properties = Properties::get();
    	return Response::json($Properties);
    }

    function index(){

    	$user = Auth::user();
    	$property = Property::where('user_id', $user->id)->get();
    	$data['is_property_available'] = ($property)?true:false;
    	$data['property'] = $property;
    	return View::make('property')->with('data',$data);
    }

    function store(Request $request){

    	$user = Auth::user();
    	$property = new Property();
    	$property->user_id = $user->id;
    	$property->name = $request->name;
    	$property->description = $request->description;
    	$result = $property->save();

    	if($result)
    		return Redirect::to('/property');
    	else
    		return Redirect::to('/property');
    }
}
