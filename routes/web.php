<?php

use App\Models\Project;
use App\Models\Tutorial;
use Illuminate\Support\Facades\Auth;
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




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::post('/details/{id}', 'DetailController@index')->name('detail');

Route::get('/details/comments/{id}', 'DetailCommentController@index')->name('detail-comments');
Route::post('/details/comments/{id}', 'DetailCommentController@index')->name('detail-comments');

Route::get('/details/tutorials/{id}', 'DetailTutorialController@index')->name('detail-tutorial');
Route::post('/details/tutorials/{id}', 'DetailTutorialController@index')->name('detail-tutorial');

// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

// ->middleware(['auth','admin'])

Route::prefix('admin')->middleware(['auth', 'admin'])->namespace('Admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('admin-dashboard');
    Route::resource('client', ClientController::class);
    Route::resource('client.project', ProjectController::class)->shallow();
    Route::resource('tutorial', TutorialController::class);
    Route::resource('user', UserController::class);
    Route::get('/user/editpassword/{id}', 'UserController@editpassword')->name('user-edit-password');
    Route::put('/user/editpassword/{id}', 'UserController@updatepassword')->name('user-edit-password');
});

Auth::routes();
