<?php

namespace App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function __construct(){
		$this->middleware('role:owner');
	}
	public function index(){
		return view('admins.users.home');
	}
}
