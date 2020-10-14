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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/nmw/debug', 'api\TestController@test');

Route::get('/nmw/cgssproducerexp', 'api\CGSSController@getProducerExpDataList');
Route::get('/nmw/cgsssong', 'api\CGSSController@getSongDataList');
Route::get('/nmw/cgsscharacter', 'api\CGSSController@getCharacterDataList');
Route::get('/nmw/cgssplayer', 'api\CGSSController@getPlayerDataList');

