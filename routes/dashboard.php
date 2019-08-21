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

/*==============================================   Dashboard Routes    ====================================================*/

Route::group(['middleware' => 'auth' ,'namespace' => 'Dashboard'], function () {


    /* -- Return Home Page -- */
    Route::get('/ahmdedNabilAdmin', 'DashboardController@index');

    /* -- Return Slider Page -- */
    Route::resource('/ahmdedNabilAdmin/slider', 'SliderController');

    /* -- Return Service Page -- */
    Route::resource('/ahmdedNabilAdmin/service', 'ServiceController');
    Route::get('/ahmdedNabilAdmin/service/{id}/create', 'ServiceController@createSubService');
    Route::post('/ahmdedNabilAdmin/sub-service/create', 'ServiceController@storeSub');

    /* -- Return Client Page -- */
    Route::resource('/ahmdedNabilAdmin/client', 'ClientController');

    /* -- Return Testimonial Page -- */
    Route::resource('/ahmdedNabilAdmin/testimonial', 'TestimonialController');

    /* -- Return Team Page -- */
    Route::resource('/ahmdedNabilAdmin/team', 'TeamController');

    /* -- Return Appointment Page -- */
    Route::resource('/ahmdedNabilAdmin/appointment', 'AppointmentController');

    /* -- Return Video Page -- */
    Route::resource('/ahmdedNabilAdmin/video', 'VideoController');


    /* -- Return Video Page -- */
    Route::resource('/ahmdedNabilAdmin/blog', 'BlogController');

    /* -- Return Album Page -- */
    Route::resource('/ahmdedNabilAdmin/album', 'AlbumController');

    /* -- Return Gallery Page -- */
    Route::resource('/ahmdedNabilAdmin/gallery', 'GalleryController');
    Route::get('/ahmdedNabilAdmin/album/{id}/upload-to-gallery', 'AlbumController@uploadPage');
    Route::post('/ahmdedNabilAdmin/album/{id}/upload-to-gallery', 'AlbumController@upload');

    /* -- Return Message Page -- */
    Route::resource('/ahmdedNabilAdmin/message', 'MessageController');

    /*--------  About   --------*/
    Route::get('/ahmdedNabilAdmin/about/edit', 'AboutController@edit');
    Route::patch('/ahmdedNabilAdmin/about/update', 'AboutController@update');

    /*--------  Contact   --------*/
    Route::get('/ahmdedNabilAdmin/contact/edit', 'ContactController@edit');
    Route::patch('/ahmdedNabilAdmin/contact/update', 'ContactController@update');


    /*--------  Setting   --------*/
    Route::get('/ahmdedNabilAdmin/setting/edit', 'SettingController@edit');
    Route::patch('/ahmdedNabilAdmin/setting/update', 'SettingController@update');



});




Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
