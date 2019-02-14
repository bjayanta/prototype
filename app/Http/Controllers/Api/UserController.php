<?php

namespace App\Http\Controllers\Api;

use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller {
    /**
     * header options
     * Authorization: Bearer <Token>
     * Accept: application/json
     *
     */


    public function getUser() {
        $user = Auth::user();
        return response()->json(['success' => $user], 200);
    }

}
