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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');

Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::post('/details/{id}', 'DetailController@add')->name('detail-add');

Route::get('/berhasil', 'CartController@success')->name('berhasil');
Route::post('/checkout/callback', 'CheckoutController@callback')->name('midtrans-callback');
Route::get('/register/berhasil', 'Auth\RegisterController@success')->name('register-berhasil');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/keranjang', 'CartController@index')->name('keranjang');
    Route::delete('/keranjang/{id}', 'CartController@delete')->name('keranjang-delete');

    Route::post('/checkout', 'CheckoutController@process')->name('checkout');

    Route::get('/seller', 'DashboardController@index')
        ->name('seller');

    Route::get('/seller/products', 'DashboardProductController@index')
        ->name('seller-product');
    Route::get('/seller/products/create', 'DashboardProductController@create')
        ->name('seller-product-create');
    Route::post('/seller/products', 'DashboardProductController@store')
        ->name('seller-product-store');
    Route::get('/seller/products/{id}', 'DashboardProductController@details')
        ->name('seller-product-details');
    Route::post('/seller/products/{id}', 'DashboardProductController@update')
        ->name('seller-product-update');

    Route::post('/seller/products/gallery/upload', 'DashboardProductController@uploadGallery')
        ->name('seller-product-gallery-upload');
    Route::get('/seller/products/gallery/delete/{id}', 'DashboardProductController@deleteGallery')
        ->name('seller-product-gallery-delete');

    Route::get('/seller/transactions', 'DashboardTransactionController@index')
        ->name('seller-transaction');
    Route::get('/seller/transactions/{id}', 'DashboardTransactionController@details')
        ->name('seller-transaction-details');
    Route::post('/seller/transactions/{id}', 'DashboardTransactionController@update')
        ->name('seller-transaction-update');

    Route::get('/seller/settings', 'DashboardSettingController@store')
        ->name('seller-settings-store');
    Route::get('/seller/account', 'DashboardSettingController@account')
        ->name('seller-settings-account');
    Route::post('/seller/update/{redirect}', 'DashboardSettingController@update')
        ->name('seller-settings-redirect');
});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category', 'CategoryController');
        Route::resource('user', 'UserController');
        Route::resource('product', 'ProductController');
        Route::resource('product-gallery', 'ProductGalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes();
