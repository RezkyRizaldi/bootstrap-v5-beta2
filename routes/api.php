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

Route::resource("affiliations", "Api\VtuberController");
Route::get("groups", "Api\VtuberController@getGroup");
Route::post("groups", "Api\VtuberController@postGroup");
Route::post("branches", "Api\VtuberController@postBranch");
Route::get("gens", "Api\VtuberController@getGen");
Route::post("gens", "Api\VtuberController@postGen");
Route::get("talents", "Api\VtuberController@getTalent");
Route::post("talents", "Api\VtuberController@postTalent");