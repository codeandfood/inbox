<?php

namespace App\Offers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Offers\OffersModel;
use App\Model\Property;
use Log;
use Validator;
use Exception;
use Response;
use Mail;
use View;
use Auth;
use File;

class OffersController extends Controller
{
	public function __construct(){
		Log::info(__CLASS__.'====>');
	}

	public function index(){

		$user = Auth::user();
		$properties = Property::where('user_id', $user->id)->get();
		$data['properties'] = $properties;
		return view('Offers')->with('data', $data);
	}

	public function store(Request $request)
	{
		Log::info(__FUNCTION__.'====>');
		try{

			$validator = Validator::make($request->all(), [
	            'name' => 'required|max:50',
	            'property_id' => 'required|integer',
	            'content' => 'required',
	            'start_date' => 'required|date',
	            'end_date' => 'required|date|after:start_date',
	            'image' => 'required',
	            'price' => 'required',
	            'mobile' => 'required|max:20',
	            'email' => 'required|email',
	        ]);

	        if ($validator->fails()) {
	            throw new Exception($validator->errors()->all()[0], 1);
	        }else{
	            $offers = new OffersModel();
	            $offers->property_id = $request['property_id'];
	            $offers->name = $request['name'];
	            $offers->content = $request['content'];
	            $offers->start_date = $request['start_date'];
	            $offers->end_date = $request['end_date'];
	            $offers->price = $request['price'];
	            $offers->mobile = $request['mobile'];
	            $offers->email = $request['email'];
	            $offers->image_name = $request->name.'.'.$request->file('image')->getClientOriginalExtension();	
	            $result = $offers->save();

	            $image=$request->file('image');
	            $imagename=$request->name.'.'.$image->getClientOriginalExtension();	
	            $request->file('image')->move(base_path().'/public/images/lailascounty/',$imagename);

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

	function show($id){
		$offer = OffersModel::where('id', $id)->get();
		return View::make('show')->with('offer',$offer);
	}

	/**
	* 
	*/
	function getOffers(Request $request){
    	$offers = OffersModel::where('property_id', $request->id)->get();
    	foreach ($offers as $key => $value) 
    	{
    		$time = time();
    		$edata = strtotime($value['end_date']);

    		$response['count'] = count($offers);
    		if($time < $edata)
    		{
	    		$response['offers'][$key]['offer_name'] = $value['name'];
	    		$response['offers'][$key]['offer_content'] = $value['content'];
	    		$response['offers'][$key]['offer_price'] = $value['price'];
	    		$response['offers'][$key]['offer_start_date'] = $value['start_date'];
	    		$response['offers'][$key]['offer_end_date'] = $value['end_date'];
	    		$response['offers'][$key]['offer_contact'] = $value['mobile'];
	    		$response['offers'][$key]['offer_image'] = $value['image_name'];
    		}
    		else{
    			$response['count'] = 0;
    			$response['message'] = 'No offers found.';
    		}
    	}
    	return Response::json($response);
    }

    function edit($id){
    	Log::info(__FUNCTION__.'====>');

    	$offer = OffersModel::where('id',$id)->first();
    	return View::make('edit_offer')->with('offer',$offer);
    }

    function update($id,request $request){

    	Log::info(__FUNCTION__.'====>');
    	$rules=array(
    		'name' => 'required|max:50',
	        'content' => 'required',
	        'start_date' => 'required|date',
	        'end_date' => 'required|date',
	        // 'image' => 'required',
	        'price' => 'required',
	        'mobile' => 'required|max:20',
	        'email' => 'required|email'
    		);
    	try{
    		$validator=Validator::make($request->all(),$rules);
    		if ($validator->fails()) {
	            throw new Exception($validator->errors()->all()[0], 1);
	        }
	    	else{
	    		$offers= OffersModel::where('id',$id)->first();
	    		$offers->name = $request['name'];
	            $offers->content = $request['content'];
	            $offers->start_date = $request['start_date'];
	            $offers->end_date = $request['end_date'];
	            $offers->price = $request['price'];
	            $offers->mobile = $request['mobile'];
	            $offers->email = $request['email'];
	            // if we have a new image then delete then uplaod new one
	            if ($request->hasFile('image')){
	            	// var_dump(__DIR__."/../../public/images/lailascounty/".$offers->image_name);exit();
	            	File::delete(base_path()."/public/images/lailascounty/".$offers->image_name);
			        $image=$request->file('image');
		        	$offers->image_name = $request->name.'.'.$request->file('image')->getClientOriginalExtension();	
			        $imagename=$request->name.'.'.$image->getClientOriginalExtension();	
			        $request->file('image')->move(base_path().'/public/images/lailascounty/',$imagename);
	            }
	            $result = $offers->save();

	            if(!$result):
	            	throw new Exception("Sorry value not edited", 1);
	            	Log::info('Edited values not entered into database');
	            else:
					Log::info('Edited values entered into database');
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

    function destroy($id){
    	Log::info(__FUNCTION__.'====>');
    	
    	OffersModel::where('id',$id)->delete();
    }

    function offerList(){

    	try{
	    	$user = Auth::user();
	    	$property = Property::where('user_id', $user->id)->with('offers')->get();
	    	// $offer = OffersModel::where('property_id',$property->id)->get();
	    	$data['properties'] = $property;
	    	// return ($property);exit();
	    	return View::make('Offer_list')->with('data',$data);
    	}catch(Exception $e){
	    	return View::make('Offer_list')->with('offer',[]);
    	}
    	
    }
}


