<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = \Auth::user();
        // dd($user->hasRole('owner'));
        // dd($user->hasRole('admin'));
        // dd($user->can('edit-user'));

        return view('home');
    }


    public function clientDashboard(){
        return view('dashboard');
    }
}
