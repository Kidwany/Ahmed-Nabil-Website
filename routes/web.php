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

Route::get('/', function () {
    return view('welcome');
});



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

    /* -- Return Album Page -- */
    Route::resource('/ahmdedNabilAdmin/album', 'AlbumController');

    /* -- Return Gallery Page -- */
    Route::resource('/ahmdedNabilAdmin/gallery', 'GalleryController');
    Route::post('/ahmdedNabilAdmin/upload-to-gallery', 'GalleryController@uploadImagesToGallery');

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



Route::group(['middleware' => ['Maintenance', 'Lang']], function () {

    Route::get('lang/{lang}', 'LanguageController@changeLanguage');

    /*=======   Return Home     ========*/
    Route::get('/', 'WebsitePagesController@index');

    /*=======   Return about    ========*/
    Route::get('/about', 'WebsitePagesController@about');

    /*=======   Return gallery  ========*/
    Route::get('/gallery', 'WebsitePagesController@gallery');

    /*=======   Return Service    ========*/
    Route::get('/service', 'WebsitePagesController@service');

    /*=======   Return Service Details     ========*/
    Route::get('/serviceDetails/{id}', 'WebsitePagesController@serviceDetails');

    /*=======   Return Contact     ========*/
    Route::get('/contact', 'WebsitePagesController@contact');
    Route::post('message', 'WebsitePagesController@message');

});


Route::get('maintenance', function () {
    return 'maintenance';
});


Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
