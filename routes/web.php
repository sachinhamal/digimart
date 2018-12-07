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

Route::get('/','FrontEndController@index');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');

    //route for location
   Route::get('location','LocationController@index')->name('location.digi'); 
   Route::get('location/create','LocationController@create')->name('location.create');
   Route::post('location/create','LocationController@store')->name('location.store');
   Route::get('location/edit/{id}','LocationController@edit')->name('location.edit');
   Route::post('location/edit/{id}','LocationController@update')->name('location.update');
   Route::get('location/show/{id}','LocationController@show')->name('location.show');
   Route::get('location/delete/{id}','LocationController@destroy')->name('location.delete');

   //route for screen locator
   Route::get('screen-locator','ScreenLocatorController@index')->name('screen-locator.digi');
   Route::get('screen-locator/create','ScreenLocatorController@create')->name('screen-locator.create');
   Route::post('screen-locator/create','ScreenLocatorController@store')->name('screen-locator.store');
   Route::get('screen-locator/edit/{id}','ScreenLocatorController@edit')->name('screen-locator.edit');
   Route::post('screen-locator/edit/{id}','ScreenLocatorController@update')->name('screen-locator.update');
   Route::get('screen-locator/show/{id}','ScreenLocatorController@show')->name('screen-locator.show');
   Route::get('screen-locator/delete/{id}','ScreenLocatorController@destroy')->name('screen-locator.delete');

   //about us 
   Route::get('about','AboutController@index')->name('about.digi');
   Route::get('about/edit/{id}','AboutController@edit')->name('about.edit');
   Route::post('about/edit/{id}','AboutController@update')->name('about.update');
   Route::get('about/show/{id}','AboutController@show')->name('about.show');
   //testimonials
   Route::get('testimonial','TestimonialController@index')->name('testimonial.digi');
   Route::get('testimonial/create','TestimonialController@create')->name('testimonial.create');
   Route::post('testimonial/create','TestimonialController@store')->name('testimonial.store');
   Route::get('testimonial/edit/{id}','TestimonialController@edit')->name('testimonial.edit');
   Route::post('testimonial/edit/{id}','TestimonialController@update')->name('testimonial.update');
   Route::get('testimonial/show/{id}','TestimonialController@show')->name('testimonial.show');
   Route::get('testimonial/delete/{id}','TestimonialController@destroy')->name('testimonial.delete');

   //slider
   Route::get('slider','SliderController@index')->name('slider.digi');
   Route::get('slider/create','SliderController@create')->name('slider.create');
   Route::post('slider/create','SliderController@store')->name('slider.store');
   Route::get('slider/edit/{id}','SliderController@edit')->name('slider.edit');
   Route::post('slider/edit/{id}','SliderController@update')->name('slider.update');
   Route::get('/slider/delete/{id}','SliderController@destroy')->name('slider.delete');
   Route::post('/slider/status/{id}','SliderController@status')->name('slider.status');

   //blog
   Route::get('blog','BlogController@index')->name('blogs.digi');
   Route::get('blog/create','BlogController@create')->name('blog.create');
   Route::post('blog/create','BlogController@store')->name('blog.store');
   Route::post('/blog/status/{id}','BlogController@status')->name('blog.status');
   Route::get('blog/edit/{id}','BlogController@edit')->name('blog.edit');
   Route::post('blog/edit/{id}','BlogController@update')->name('blog.update');
   Route::get('blog/show/{id}','BlogController@show')->name('blog.show');
   Route::get('/blog/delete/{id}','BlogController@destroy')->name('blog.delete');

   //services
   Route::get('services','ServiceController@index')->name('service.digi');
   Route::get('service/create','ServiceController@create')->name('service.create');
   Route::post('service/create','ServiceController@store')->name('service.store');
   Route::get('service/edit/{id}','ServiceController@edit')->name('service.edit');
   Route::post('service/edit/{id}','ServiceController@update')->name('service.update');
   Route::get('service/show/{id}','ServiceController@show')->name('service.show');
   Route::get('service/delete/{id}','ServiceController@destroy')->name('service.delete');
   Route::post('/service/status/{id}','ServiceController@status')->name('service.status');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//front end

Route::get('/about-us','FrontEndController@about_us');

Route::get('how-digi-works','FrontEndController@how_works');
Route::get('why-digi-mart-hub','FrontEndController@why_digi');
Route::get('screen-locator/{id}','FrontEndController@screen_locator_list');
Route::get('screen-locator/{l_id}/{id}','FrontEndController@screen_single');

Route::get('blogs/{id}','FrontEndController@blog_single');
Route::get('all-blogs','FrontEndController@blog_list');

Route::get('service/{id}','FrontEndController@service_single');

Route::get('/testimonial/{id}','FrontEndController@testimonial');
Route::get('contact-us','FrontEndController@contact');