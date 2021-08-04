<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => 'auth'], function(){
    Route::post('insert/fresh/details', [App\Http\Controllers\PagesController::class, 'insertDetails'])->name('insert.fresh.details');
    Route::post('update/blog', [App\Http\Controllers\PagesController::class, 'updateBlog'])->name('update.blog');
    Route::get('/editBlog{id}', [App\Http\Controllers\PagesController::class, 'getEditBlog'])->name('edit.blog');
    Route::get('delete/blog{id}', [App\Http\Controllers\PagesController::class, 'deleteBlog'])->name('delete.blog');
    Route::post('enter/new/blog', [App\Http\Controllers\PagesController::class, 'addNewBlog'])->name('new.blog');
    Route::get('admin/list/blog', [App\Http\Controllers\PagesController::class, 'getBlogSettings'])->name('list.blog');
    Route::get('/admin/settings', [App\Http\Controllers\PagesController::class, 'viewInsertDetails'])->name('new.settings');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('adminPannel',[App\Http\Controllers\PagesController::class, 'displayAdminPanel'])->name('admin');
    Route::get('/logout', [App\Http\Controllers\PagesController::class, 'logout'])->name('logout');
});
Auth::routes();
Route::get('/blog', [App\Http\Controllers\PagesController::class, 'displayBlog'])->name('blog');
Route::get('about','App\http\Controllers\PagesController@getAbout')->name('about');
Route::get('index','App\http\Controllers\PagesController@getIndex');
Route::get('contact','App\http\Controllers\PagesController@getContact');
Route::get('/', [App\Http\Controllers\PagesController::class, 'getIndex']);


