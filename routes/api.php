<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TokenController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


    Route::middleware('auth:api')->prefix('v1')->group(function () {
        Route::get('apifetch', function (Request $req) {
            return $req->user();
        });
        
    });
    

Route::apiResource('/data', DataController::class);
Route::apiResource('/comment', CommentController::class);
Route::post('/oauth/token', [TokenController::class, 'index']);
