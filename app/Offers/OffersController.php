<?php

namespace App\Offers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Offers\OffersModel;
use Log;
use Validator;
use Exception;
use Response;
use Mail;

class OffersController extends Controller
{
	public function __construct(){
		Log::info(__CLASS__.'====>');
	}

	public function index(){
		return view('Offers');
	}

	public function entry(Request $request)
	{
		Log::info(__FUNCTION__.'====>');
		try{

			$validator = Validator::make($request->all(), [
	            'name' => 'required|max:50',
	            'content' => 'required',
	            'startingdate' => 'required|date',
	            'enddate' => 'required|date',
	            'image' => 'required',
	            'price' => 'required',
	            'mobile' => 'required|max:20',
	            'email' => 'required|email',
	        ]);

	        if ($validator->fails()) {
	            throw new Exception($validator->errors()->all()[0], 1);
	        }else{
	            $offers = new OffersModel();
	            $offers->offername = $request['name'];
	            $offers->offercontent = $request['content'];
	            $offers->startingdate = $request['starting date'];
	            $offers->enddate = $request['end date'];
	            $offers->price = $request['price'];
	            $offers->mobile = $request['mobile'];
	            $offers->email = $request['email'];
	            $result = $offers->save();

	            $image=$offers->id.'.'.$request->file('image')->getClientOriginalExtension();

	            $request->file('image')->move(base_path().'/public/images/lailascounty/',$image);
	            if(!$result):
	            	throw new Exception("Sorry value not stored", 1);
	            else:
					Log::info('Value entered into database');

					$maildata['name'] = $request['name'];
					$maildata['user_message'] = $request['message'];
					Mail::send('emails.enquiryUserMail', $maildata, function ($message) {
					    $message->from('codeandfood@gmail.com', 'HotelsPondy WebPage');
					    $message->to('codeandfood@gmail.com')->subject('Someone views the page');
					});

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
