<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Properties;
use Response;


class PropertyController extends Controller
{
    function getOffers(){
    	$Properties = Properties::get();
    	return Response::json($Properties);
    }
}
