<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\CrudController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::get('cruds',[CrudController::class, 'index']);
Route::post('cruds',[CrudController::class, 'store']);
Route::get('cruds/{crud}',[CrudController::class, 'show']);
Route::put('cruds/{crud}',[CrudController::class, 'update']);
Route::delete('cruds/{crud}',[CrudController::class, 'destroy']);
      
Route::middleware('auth:api')->group( function () {
    Route::resource('products', ProductController::class);
});
