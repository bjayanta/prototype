<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\System\Appdata;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

	public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index() {
        dd(Appdata::all());
    	return view('admin.home');
    }
}
