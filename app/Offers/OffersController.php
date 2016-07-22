<?php

namespace App\Offers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Offers\OffersModel;
use App\Model\Properties;
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
		return view('Offers');
	}

	public function store(Request $request)
	{
		Log::info(__FUNCTION__.'====>');
		try{

			$validator = Validator::make($request->all(), [
	            'name' => 'required|max:50',
	            'content' => 'required',
	            'start_date' => 'required|date',
	            'end_date' => 'required|date',
	            'image' => 'required',
	            'price' => 'required',
	            'mobile' => 'required|max:20',
	            'email' => 'required|email',
	        ]);

	        if ($validator->fails()) {
	            throw new Exception($validator->errors()->all()[0], 1);
	        }else{
	            $offers = new OffersModel();
	            $offers->offer_name = $request['name'];
	            $offers->offer_content = $request['content'];
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

	function show(request $request){
		$offer = OffersModel::where('id', $request->id)->get();
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

    		if($time < $edata)
    		{
	    		$response[$key]['offer_name'] = $value['offer_name'];
	    		$response[$key]['offer_content'] = $value['offer_content'];
	    		$response[$key]['offer_price'] = $value['price'];
	    		$response[$key]['offer_start_date'] = $value['start_date'];
	    		$response[$key]['offer_end_date'] = $value['end_date'];
	    		$response[$key]['offer_contact'] = $value['mobile'];
	    		$response[$key]['offer_image'] = $value['image_name'];
    		}
    	}
    	return Response::json($response);
    }

    function edit($id){
    	$offer = OffersModel::where('id',$id)->first();
    	return View::make('edit_offer')->with('offer',$offer);
    }

    function update(request $request){
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
	    		$offers= OffersModel::where('id',$request->id)->first();
	    		$offers->offer_name = $request['name'];
	            $offers->offer_content = $request['content'];
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

    function delete(request $request){
    	OffersModel::where('id',$request->id)->delete();
    }

    function offerList(){
    	$user = Auth::user();
    	$property = Properties::where('user_id', $user->id)->first();
    	$offer = OffersModel::where('property_id',$property->id)->get();
    	return View::make('Offer_list')->with('offer',$offer);
    }
}


