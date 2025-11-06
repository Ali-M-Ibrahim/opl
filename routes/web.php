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

Route::get('/', function () {
    return redirect('login');
});


Auth::routes();


//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');;
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');;
Route::put('/haselected/{id}', [App\Http\Controllers\UserController::class, 'haselected'])->name("haselected");
Route::put('/updateelected/{id}', [App\Http\Controllers\UserController::class, 'removeelected'])->name("removeelected");
Route::put('/updateelectedactive/{id}', [App\Http\Controllers\UserController::class, 'activateelection'])->name("activateelection");
Route::resource('users', App\Http\Controllers\UsersController::class);



Route::get('/dashboard2', [App\Http\Controllers\AdminController::class, 'dashboard2'])->name('dashboard2');

Route::get('/mazhabInElection', [App\Http\Controllers\reportsController::class, 'mazhabInElection'])->name('mazhabInElection');
Route::get('/kadaaInElection', [App\Http\Controllers\reportsController::class, 'kadaaInElection'])->name('kadaaInElection');
Route::get('/FilterNames', [App\Http\Controllers\documentsController::class, 'FilterNames'])->name('FilterNames');
Route::get('/NoelectedNames', [App\Http\Controllers\documentsController::class, 'NoelectedNames'])->name('NoelectedNames');
Route::get('/bulkelection', [App\Http\Controllers\UserController::class, 'bulkelection'])->name('bulkelection');;
Route::get('/demo', [App\Http\Controllers\PopulateController::class, 'populate40demo'])->name('populate40demo');
Route::get('/batch1', [App\Http\Controllers\PopulateController::class, 'populate50demo'])->name('populate50demo');
Route::get('/batch2', [App\Http\Controllers\PopulateController::class, 'populate100demo'])->name('populate100demo');
Route::get('/adminbatch', [App\Http\Controllers\PopulateController::class, 'populateadmins'])->name('populateadmins');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');;

Route::get("exportResults",[App\Http\Controllers\ExportResultsController::class, 'Export'])->name('exportResults');
Route::resource('brokers', \App\Http\Controllers\BrokerController::class);
Route::get("notElected",[App\Http\Controllers\BrokerController::class, 'notElected'])->name('notElected');
