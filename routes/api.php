<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::apiResource('tasks', TaskController::class);

// Additional routes for update and delete 

Route::get('update/{id},{note_name}', [TaskController::class, 'update']);
Route::get('delete/{id}', [TaskController::class, 'destroy']);
Route::get('store/{note_name}', [TaskController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
