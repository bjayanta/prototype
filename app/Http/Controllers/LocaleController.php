<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function changeLocale($lang)
    {
        Session::put('locale', $lang);
        return redirect()->back();
    }
}
