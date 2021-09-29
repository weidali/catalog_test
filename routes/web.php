<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard'], function() {
    Route::group(['namespace' => 'Main'], function() {
        Route::get('/', 'IndexController')->name('dashboard.main');
    });
    Route::group(['namespace' => 'Customer', 'prefix' => 'customers'], function() {
        Route::get('/', 'IndexController')->name('dashboard.customers.index');
        Route::get('/create', 'CreateController')->name('dashboard.customers.create');
        Route::post('/create', 'StoreController')->name('dashboard.customers.store');
        Route::get('/{customer}', 'ShowController')->name('dashboard.customers.show');
        Route::get('/{customer}/edit', 'EditController')->name('dashboard.customers.edit');
        Route::patch('/{customer}', 'UpdateController')->name('dashboard.customers.update');
        Route::delete('/{customer}', 'DeleteController')->name('dashboard.customers.delete');
    });
});

Auth::routes();

Route::get('/products', [DashboardController::class, 'index'])->name('products');
Route::get('/users', [DashboardController::class, 'index'])->name('users');

