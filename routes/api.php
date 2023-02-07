<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// METHOD [GET]:

    // Methods for assets:
        Route::get('/assets','\App\Http\Controllers\ControllerAPI@get_list_assets')->name('assets');
        Route::get('/asset/{id}','\App\Http\Controllers\ControllerAPI@get_asset_by_id')->name('asset');

    //Methods for category assets:
        Route::get('/category_asset','\App\Http\Controllers\ControllerAPI@get_category_asset')->name('category_asset');


//METHOD [POST]:
    // Methods for assets:
        Route::post('/create-asset','\App\Http\Controllers\ControllerAPI@create_new_asset')->name('create-asset');


//METHOD [PUT]
    // Methods for assets:    
        Route::put('/update-asset/{id}','\App\Http\Controllers\ControllerAPI@update_asset')->name('update-asset');
        Route::put('/update-asset-status/{id}','\App\Http\Controllers\ControllerAPI@update_asset_status')->name('update-asset-status');

//METHOD [DELETE]
    // Methods for assets:
        Route::delete('/delete-asset/{id}','\App\Http\Controllers\ControllerAPI@delete_asset')->name('delete_asset');
