<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\config\laravellocalization;



// define('PAGINATION_COUNT,5');
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



Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
    Route::middleware(['checkLogin'])->group(function(){
        // Route::group(['prefix' =>  LaravelLocalization::setLocale()
        // ,	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
        //  function(){
            Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
            Route::get('/post',[App\Http\Controllers\PostController::class, 'post']);
            Route::get('/create',[App\Http\Controllers\PostController::class, 'create'])->name('post.create');
            Route::post('/insert',[App\Http\Controllers\PostController::class, 'insert'])->name('post.insert');
            Route::get('/edit/{id}',[App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
            Route::PUT('/update/{id}',[App\Http\Controllers\PostController::class, 'update'])->name('post.update');
            Route::get('/delete/{id}',[App\Http\Controllers\PostController::class,'delet'])->name('post.delet');
            Route::get('/delete/all',[App\Http\Controllers\PostController::class,'deleteAll'])->name('post.delete.all');
            Route::get('/index',[App\Http\Controllers\PostController::class, 'index'])->name('post.index');
            Route::get('/search',[App\Http\Controllers\PostController::class, 'search'])->name('post.search');
            Route::get('user-search',[App\Http\Controllers\PostController::class,'search'])->name('userSearch');

        });


    });






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
