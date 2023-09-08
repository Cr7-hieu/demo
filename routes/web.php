<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\TestController;
//use App\Http\Controllers\Dashboard;
//use App\Http\Controllers\Product;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Response;

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
//Route::prefix('category')->group(function(){

    //danh sách chuyên mục
    //Route::get('/', [TestController::class, 'index'])->name('category.list');

    //lấy chi tiết 1 chuyên mục
    //Route::get('/edit/{id}', [TestController::class, 'getCategory'])->name('category.edit');

    //sử lí uppdate
    //Route::post('/edit/{id}', [TestController::class, 'uppdate']);

    //hiển thị form add dư liệu
    //Route::get('/add', [TestController::class, 'add'])->name('category.add');

    //xử lí thêm chuyên mục
    //Route::post('/add', [TestController::class, 'handleAddCategory']);

    //xoá
    //Route::delete('/delete/{id}',[TestController::class, 'delete'])->name('category.delete');
//});

//admin route
//Route::middleware('auth.admin')-> prefix('admin')->group(function(){
    //Route::resource('product', [Controller::class, 'index'])->name('admin.index');
    //Route::get('/',[Dashboard::class, 'index']);
//});


Route::get('/',[HomeController::class,'index'] );
Route::get('/them-san-pham', [HomeController::class,'getAdd']);
Route::post(' /them-san-pham', [HomeController::class,'postAdd']);
//Route::get('demo',function(){
    // $response = new response;
    // dd($response);
    // $response = response();
    // dd(response());
    // $response = new response('hello',200);
    //$content = 'hello';
    //$response = (new response($content))->header('content-type','text/plain');

    //$response = (new response())->cookie('uni','php');
    //$response = response()->view('clients.demo',['title'=>'http'])
    //->header('content-type','text/plain');
    //return $response;
    //return view('clients.demo');
//});
//Route::post('demo', function(Request $request){
    //if(!empty($request->user_name)){
        //return redirect(route('demo'))->with('');
        //return back()->withInput;

    //}
//});
//  Route::get('download', [HomeController::class,'download'])->name('image');
