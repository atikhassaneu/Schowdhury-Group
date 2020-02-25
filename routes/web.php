<?php

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

Route::get('/home', function () {
    return redirect()->route('dashboard.index');
});
//Routing group for Authentication
Auth::routes();

//Routing group for admin
Route::group(['prefix'=>'admin','middleware' =>'auth' , 'namespace' => 'admin'],function (){
    Route::get('/dashboard','dashboardController@index')->name('dashboard.index');
    Route::resource('slider','sliderController');
    Route::resource('product','productController');
    Route::resource('contact','contactController');
    Route::resource('gallery','GalleryController');

});

//Routing group for frontend
Route::group(['middleware' => 'page_view_counter', 'namespace' => 'frontend'],function (){
    //Route::get('/','indexController@index');
    Route::get('/','indexController@index')->name('index');
    Route::get('/gallery','galleryController@index')->name('gallery');

    Route::get('/products','productController@index')->name('products');
    Route::get('/product_details/{id}','indexController@product_details')->name('product_details');

    Route::get('/services','serviceController@index')->name('services');
    Route::get('/sources','sourceController@index')->name('source');
    Route::get('/logistics','logisticsController@index')->name('logistics');


    Route::get('/company-profile','aboutUsController@compnany_profile')->name('company_profile');
    Route::get('/management-profile','aboutUsController@management_profile')->name('management_profile');
    Route::get('/reference','aboutUsController@reference')->name('reference');


    Route::get('/contact-us','aboutUsController@contact_form')->name('contact');
    Route::post('/contact-save','aboutUsController@contact_store')->name('contact.store');

});
