<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalsController;
use App\Models\Goals;

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

Route::get('goals', [GoalsController::class, 'index']);
Route::get('goals/{goal}',[GoalsController::class, 'show']);
Route::post('goals',[GoalsController::class, 'store']);
Route::put('goals/{goal}',[GoalsController::class, 'update']);
Route::delete('goals/{goal}',[GoalsController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
