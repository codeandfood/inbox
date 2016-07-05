<?php

namespace App\Enquiry;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Enquiry\EnquiryModel;
use Log;
use Validator;
use Exception;
use Response;

class EnquiryController extends Controller
{
	public function __construct(){
		Log::info(__CLASS__.'====>');
	}

	public function index(){
		return view('admins.enquiry.home');
	}

	public function entry(Request $request)
	{
		Log::info(__FUNCTION__.'====>');
		try{

			$validator = Validator::make($request->all(), [
	            'name' => 'required|max:50',
	            'email' => 'required',
	            'mobile' => 'required|max:20',
	            'message' => 'required',
	        ]);

	        if ($validator->fails()) {
	            throw new Exception($validator->errors()->all()[0], 1);
	        }else{
	            $enquiry = new EnquiryModel();
	            $enquiry->name = $request['name'];
	            $enquiry->email = $request['email'];
	            $enquiry->mobile = $request['mobile'];
	            $enquiry->message = $request['message'];
	            $result = $enquiry->save();
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
