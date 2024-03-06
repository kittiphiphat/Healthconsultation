<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\AdmininfoController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog',[BlogController::class,'index'])->name('index');



Route::get('/about',[BlogController::class,'about'])->name('about');

Route::get('/create',[BlogController::class,'create'])->name('create');

// Route::get('/blog',[BlogController::class,'index'])->name('index');

Route::get('/change/{id}',[PostController::class,'change'])->name('change');
Route::get('/edit/{id}',[BlogController::class,'edit'])->name('edit');

Route::get('/delete/{id}',[BlogController::class,'delete'])->name('delete');

Route::post('/insert',[BlogController::class,'insert']);
Route::get('/show',[PostController::class,'show']);

Route::middleware('auth:sanctum')->get('/shows',[BlogController::class,'shows']);





Route::get('/delete/{id}',[BlogController::class,'delete'])->name('delete');

Route::post('/insert',[BlogController::class,'insert'])->name('insert');

Route::get('/home',[BlogController::class,'show'])->name('show');

Route::get('/dashboard',[BlogController::class,'dashboard'])->name('dashboard');


Route::post('/update/{id}',[BlogController::class,'update'])->name('update');

Route::middleware('auth:sanctum')->post('/logout/{user}', [UserController::class, 'destroy']);

Route::middleware('auth:sanctum')->delete('/logout/{user}', [UserController::class, 'destroy']);



Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'store']);
});






Route::controller(AdmininfoController::class)->group(function(){

    Route::get('/admin/delete/{id}',[PostController::class,'destroy'])->name('admin.delete');
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/blog', [AdmininfoController::class, 'index'])->name('blogadmin');
    Route::post('/admin/logout',[AdminController::class,'destroy'])->name('admin.logout');
    Route::get('/admin/edit/{id}', [PostController::class, 'edit'])->name('admin.edit');
    Route::get('/admin/delete/{id}',[PostController::class,'destroy'])->name('admin.delete');
    Route::post('/admin/update/{id}',[PostController::class,'update'])->name('admin.update');
    Route::get('/admin/home', [PostController::class, 'index'])->name('homeadmin');
    Route::get('/admin/dashboard',[PostController::class,'dashboard'])->name('admin.dashboard');
});
