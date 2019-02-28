<?php

namespace App\Http\Controllers;

// use Cookie;
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
        // set cookie
        // Cookie::queue('key', 'value', 10080); // for 7 days = 10080 mins

        // get cookie
        // Cookie::get('freebee');

        return view('home');
    }

    public function generateToken() {
        return view('generate-token');
    }
}
