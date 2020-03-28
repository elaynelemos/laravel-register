<?php

use Illuminate\Http\Request;
use App\Model\User;

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

Route::prefix('v1')->group(function() {
    Route::get('list', function () {
        return User::list(10);
    });

    Route::post('register', "API\User@save");
});

Route::prefix('v2')->group(function() {
    //
});