<?php

use Illuminate\Support\Facades\Route;

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

//frontend
Route::get('/', [App\Http\Controllers\Frontend\homepageController::class, 'index'])->name('/');
//Route::get('/baca-berita/{slug}', [App\Http\Controllers\Frontend\ArticleController::class, 'detail'])->name('baca-berita');

// Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-dashboard');

    Route::get('admin/article', [App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('admin-article-admin');
    Route::get('admin/article/tambah', [App\Http\Controllers\Admin\ArticleController::class, 'add'])->name('admin-tambah-article-admin');
    Route::post('admin/article', [App\Http\Controllers\Admin\ArticleController::class, 'create'])->name('admin-article-admin-tambah');
    Route::get('admin/article/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'edit'])->name('admin-article-admin-edit');
    Route::put('admin/article/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'update'])->name('admin-update-article-admin');
    Route::delete('admin/article/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'delete'])->name('admin-article-delete');

    Route::get('admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin-category-admin');
    Route::get('admin/category/tambah', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin-tambah-category-admin');
    Route::post('admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin-category-admin-tambah');
    Route::get('admin/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin-category-admin-edit');
    Route::put('admin/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin-update-category-admin');
    Route::delete('admin/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('admin-category-delete');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
