<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\userController;
use App\Models\Category;

use App\Http\Controllers\Frontend\FrontendController;

use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('lv-admin', function () {
    return view('welcome');
});


Route::get('/', [FrontendController::class, 'index']);
Route::get('tutorial/{category_slug}', [FrontendController::class, 'ViewCategoryPost']);
Route::get('/tutorial/{category_slug}/{post_slug}', [FrontendController::class, 'ViewPost']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function() {
    
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    // Category Controllers
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/add-category', [CategoryController::class, 'create']);
    Route::post('/store-category', [CategoryController::class, 'store']);
    Route::put('/update-category', [CategoryController::class, 'update']);
    Route::get('delete-category{category_id}', [CategoryController::class, 'delete']);
    
    // Posts Controllers
    Route::get('posts', [PostsController::class, 'index']);
    Route::get('/add-post', [PostsController::class, 'create']);
    Route::post('/save-post', [PostsController::class, 'save']);
    Route::get('/edit-post/{post_id}', [PostsController::class, 'edit']);
    Route::put('/update-post/{post_id}', [PostsController::class, 'update']);
    Route::get('/delete-post/{post_id}', [PostsController::class, 'delete']);


    // User Controller
    Route::get('users', [userController::class, 'index']);
    Route::get('/add-user', [userController::class, 'create']);
    Route::post('/save-user', [userController::class, 'save']);
    Route::get('/edit-user/{user_id}', [userController::class, 'edit']);
    Route::put('/update-user/{user_id}', [userController::class, 'update']);
    
});