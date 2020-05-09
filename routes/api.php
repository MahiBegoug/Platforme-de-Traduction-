<?php

use App\Http\Controllers\AccueilController;
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

//Route::get('get-wilaya-list','DemandeDevisController@getCommunesList');

Route::get('get-wilaya-list-registration','Auth\RegisterController@getCommunesList');

Route::get('get-wilaya-list','Auth\RegisterController@getCommunesList');

Route::get('get-wilaya-list-traducteurProfiling','TraducteurControllers\ProfilTraducteurController@getCommunesList');

Route::get('getListTraducteurAssermente','ClientControllers\DemandeDevisController@getListTraducteurAssermente');

Route::get('getListTraducteurNonAssermente','ClientControllers\DemandeDevisController@getListTraducteurNonAssermente');
