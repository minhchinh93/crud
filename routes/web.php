<?php
namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\productTypeController;
use App\Http\Controllers\usercontroller;
use App\Models\product_type;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/post/add', [NewController::class, 'create']);
Route::get('/admin/post/show', [NewController::class, 'show'])->name('post.show');
Route::get('/admin/post/update/{id}', [NewController::class, 'update']);
Route::get('/admin/post/delete/{id}', [NewController::class, 'delete']);
Route::get('/admin/user/add',[usercontroller::class,'insert']);
Route::get('/admin/product_type/add',[productTypeController::class,'insert']);

//them
Route::match(['get', 'post'],'/admin/product/add1/',[productcontroller::class,'getinsert'])->name('product.add1');
Route::post('/admin/product/add',[productcontroller::class,'insert'])->name('product.add');
//show
Route::get('/admin/product/show1',[productcontroller::class,'show'])->name('product.show');
//sửa
Route::get('/admin/product/update/{id?}',[productcontroller::class,'getupdate'])->name('product.update1');
Route::post('/admin/product/update/{id?}',[productcontroller::class,'update'])->name('product.update');
//xóa
Route::get('/admin/product/delete/{id}',[productcontroller::class,'delete'])->name('product.delete');

