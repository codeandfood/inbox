<?php

namespace App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function index(){
		return view('admins.posts.home');
	}
}
