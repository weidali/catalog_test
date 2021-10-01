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

Route::group(['middleware' => 'auth', 'namespace' => 'Dashboard', 'prefix' => 'dashboard'], function() {
    Route::group(['namespace' => 'Main'], function() {
        Route::get('/', 'IndexController')->name('dashboard.main');
    });
    Route::group(['namespace' => 'Customer', 'prefix' => 'customers'], function() {
        Route::get('/', 'IndexController')->name('dashboard.customer.index');
        Route::get('/create', 'CreateController')->name('dashboard.customer.create');
        Route::post('/create', 'StoreController')->name('dashboard.customer.store');
        Route::get('/{customer}', 'ShowController')->name('dashboard.customer.show');
        Route::get('/{customer}/edit', 'EditController')->name('dashboard.customer.edit');
        Route::patch('/{customer}', 'UpdateController')->name('dashboard.customer.update');
        Route::delete('/{customer}', 'DeleteController')->name('dashboard.customer.delete');
    });
    Route::group(['namespace' => 'Product', 'prefix' => 'products'], function() {
        Route::get('/', 'IndexController')->name('dashboard.product.index');
        Route::get('/create', 'CreateController')->name('dashboard.product.create');
        Route::post('/create', 'StoreController')->name('dashboard.product.store');
        Route::get('/{product}', 'ShowController')->name('dashboard.product.show');
        Route::get('/{product}/edit', 'EditController')->name('dashboard.product.edit');
        Route::patch('/{product}', 'UpdateController')->name('dashboard.product.update');
        Route::delete('/{product}', 'DeleteController')->name('dashboard.product.delete');
    });
    Route::group(['namespace' => 'Order', 'prefix' => 'orders'], function() {
        Route::get('/', 'IndexController')->name('dashboard.order.index');
        Route::get('/create', 'CreateController')->name('dashboard.order.create');
        Route::post('/create', 'StoreController')->name('dashboard.order.store');
        Route::get('/{order}', 'ShowController')->name('dashboard.order.show');
        Route::get('/{order}/edit', 'EditController')->name('dashboard.order.edit');
        Route::patch('/{order}', 'UpdateController')->name('dashboard.order.update');
        Route::delete('/{order}', 'DeleteController')->name('dashboard.order.delete');
    });
});

Auth::routes();

Route::get('/products', [DashboardController::class, 'index'])->name('products');
Route::get('/users', [DashboardController::class, 'index'])->name('users');

