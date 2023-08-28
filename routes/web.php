<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Controller\CategoryContriller
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Client routes
Route::prefix('category')->group(function(){
    
    //danh sách chuyên mục
    Route::get('/', [ CategoryController::class, 'index']);
});
