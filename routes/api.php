<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Credential route
Route::post('login', 'Api\CredentialController@login');
Route::post('register', 'Api\CredentialController@register');

Route::group(['middleware' => 'auth:api'], function() {
    // User route
    Route::get('/get-user', 'Api\UserController@getUser');
});

