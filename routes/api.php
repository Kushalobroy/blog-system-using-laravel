<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('addblog',[BlogController::class,'addblog'])->name('addblog');
Route::get('delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
Route::get('BlogUpdate/{id}',[BlogController::class,'blogUpdate'])->name('blog.update');
Route::post('updateblog/{id}',[BlogController::class,'updateblog'])->name('updateblog');
Route::get('/',[HomeController::class,'blogs'])->name('blogs');