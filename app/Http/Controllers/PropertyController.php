<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Property;
use Response;
use View;
use Auth;
use Redirect;
use Log;
use Validator;
use Exception;


class PropertyController extends Controller
{

	public function __construct(){
		Log::info(__CLASS__.'====>');
	}


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

    	Log::info(__FUNCTION__.'====>');
    	try{
    		$validator = Validator::make($request->all(), [
	            'name' => 'required|max:50',
	            'description' => 'required',
	            'mobile' => 'required|max:20',
	            'email' => 'required|email',
	            'address' => 'required',
	            'city' => 'required',
	            'state' => 'required',
	            'country' => 'required',
	        ]);

	        if ($validator->fails()) {
	            throw new Exception($validator->errors()->all()[0], 1);
	        }else{
		    	$user = Auth::user();
		    	$property = new Property();
		    	$property->user_id = $user->id;
		    	$property->name = $request->name;
		    	$property->description = $request->description;
		    	$property->mobile = $request->mobile;
		    	$property->email = $request->email;
		    	$property->address = $request->address;
		    	$property->city = $request->city;
		    	$property->state = $request->state;
		    	$property->country = $request->country;
		    	$result = $property->save();
	        	
	        	if(!$result):
	            	throw new Exception("Sorry value not stored", 1);
	            else:
					Log::info('Value entered into database');

	            	$response['status']='success';
	            	$response['message']="Successfully value stored";
	            	return Response::json($response);
	            endif;
	        }
    	}catch(Exception $e){
			Log::error("Message :".$e->getMessage());
			Log::error("Line: ".$e->getLine());
			Log::error("File: ".$e->getLine());
			$response['status']='error';
			$response['message']=$e->getMessage();
			return Response::json($response);
		}
    }
}
