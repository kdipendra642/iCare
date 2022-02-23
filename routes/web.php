<?php

use App\User;
use App\Models\Testimonials;
use App\Models\Vacancy;


Route::get('/dashboard', function () {
    $users = User::all();
    $testimony = Testimonials::all();
    $vacancy = Vacancy::all();

    return view('admin.common.dashboard', compact('users', 'testimony', 'vacancy'));
})->middleware('auth');


Route::get('/',                                            ['as' => 'customer.index',              'uses' =>   'Frontend\SiteController@index']);
Route::get('/services-all',                                ['as' => 'customer.services',              'uses' =>   'Frontend\SiteController@services']);
Route::get('/about-us',                                    ['as' => 'customer.about',              'uses' =>   'Frontend\SiteController@about']);
Route::get('/faqs',                                        ['as' => 'customer.faqs',              'uses' =>   'Frontend\SiteController@faqs']);
Route::get('/privacy-policy',                              ['as' => 'customer.privacy',              'uses' =>   'Frontend\SiteController@privacy']);
Route::get('/terms-and-condition',                         ['as' => 'customer.conditions',              'uses' =>   'Frontend\SiteController@conditions']);
Route::get('/contact-us',                                  ['as' => 'customer.contact',              'uses' =>   'Frontend\SiteController@contact']);
Route::get('/career',                                      ['as' => 'customer.career',              'uses' =>   'Frontend\SiteController@career']);
Route::get('/career/{slug}',                               ['as' => 'customer.career.view-vacancy',              'uses' =>   'Frontend\SiteController@viewCareer']);
Route::get('/career/apply/{id}',                               ['as' => 'customer.career.apply',              'uses' =>   'Frontend\SiteController@applyJob']);
Route::post('/contact-us/store',                           ['as' => 'customer.contact-us.store',              'uses' =>   'Admin\ContactController@store']);
Route::post('/career/apply-job/store',                     ['as' => 'customer.career.store',              'uses' =>   'Admin\VacancyController@store']);




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'namespace' => 'Admin\\', 'middleware' => ['auth']], function (){

    /*Routes for banner section */
    Route::get('/banner',                   ['as' => 'banner',          'uses' =>   'BannerController@index']);
    Route::get('/banner/create',            ['as' => 'banner.create',   'uses' =>   'BannerController@create']);
    Route::post('/banner/store',            ['as' => 'banner.store',    'uses' =>   'BannerController@store']);
    Route::get('/banner/edit/{id}',         ['as' => 'banner.edit',     'uses' =>   'BannerController@edit']);
    Route::post('/banner/update/{id}',      ['as' => 'banner.update',   'uses' =>   'BannerController@update']);
    Route::get('/banner/delete/{id}',       ['as' => 'banner.delete',   'uses' =>   'BannerController@destroy']);

     /*Routes for frequently asked questions section */
     Route::get('/faq',                   ['as' => 'faq',          'uses' =>   'FrequentlyAskedQueController@index']);
     Route::get('/faq/create',            ['as' => 'faq.create',   'uses' =>   'FrequentlyAskedQueController@create']);
     Route::post('/faq/store',            ['as' => 'faq.store',    'uses' =>   'FrequentlyAskedQueController@store']);
     Route::get('/faq/edit/{id}',         ['as' => 'faq.edit',     'uses' =>   'FrequentlyAskedQueController@edit']);
     Route::post('/faq/update/{id}',      ['as' => 'faq.update',   'uses' =>   'FrequentlyAskedQueController@update']);
     Route::get('/faq/delete/{id}',       ['as' => 'faq.delete',   'uses' =>   'FrequentlyAskedQueController@destroy']);
     
     /*Routes for testimonials section */
     Route::get('/testimonials',                   ['as' => 'testimonials',          'uses' =>   'TestimonailsController@index']);
     Route::get('/testimonials/create',            ['as' => 'testimonials.create',   'uses' =>   'TestimonailsController@create']);
     Route::post('/testimonials/store',            ['as' => 'testimonials.store',    'uses' =>   'TestimonailsController@store']);
     Route::get('/testimonials/edit/{id}',         ['as' => 'testimonials.edit',     'uses' =>   'TestimonailsController@edit']);
     Route::post('/testimonials/update/{id}',      ['as' => 'testimonials.update',   'uses' =>   'TestimonailsController@update']);
     Route::get('/testimonials/delete/{id}',       ['as' => 'testimonials.delete',   'uses' =>   'TestimonailsController@destroy']);

      /*Routes for services section */
      Route::get('/service',                   ['as' => 'service',          'uses' =>   'ServiceController@index']);
      Route::get('/service/create',            ['as' => 'service.create',   'uses' =>   'ServiceController@create']);
      Route::post('/service/store',            ['as' => 'service.store',    'uses' =>   'ServiceController@store']);
      Route::get('/service/edit/{id}',         ['as' => 'service.edit',     'uses' =>   'ServiceController@edit']);
      Route::post('/service/update/{id}',      ['as' => 'service.update',   'uses' =>   'ServiceController@update']);
      Route::get('/service/delete/{id}',       ['as' => 'service.delete',   'uses' =>   'ServiceController@destroy']);

      /*Routes for technology section */
      Route::get('/technology',                   ['as' => 'technology',          'uses' =>   'TechnologyController@index']);
      Route::get('/technology/create',            ['as' => 'technology.create',   'uses' =>   'TechnologyController@create']);
      Route::post('/technology/store',            ['as' => 'technology.store',    'uses' =>   'TechnologyController@store']);
      Route::get('/technology/edit/{id}',         ['as' => 'technology.edit',     'uses' =>   'TechnologyController@edit']);
      Route::post('/technology/update/{id}',      ['as' => 'technology.update',   'uses' =>   'TechnologyController@update']);
      Route::get('/technology/delete/{id}',       ['as' => 'technology.delete',   'uses' =>   'TechnologyController@destroy']);

      /*Routes for technology section */
      Route::get('/client',                   ['as' => 'client',          'uses' =>   'ClientController@index']);
      Route::get('/client/create',            ['as' => 'client.create',   'uses' =>   'ClientController@create']);
      Route::post('/client/store',            ['as' => 'client.store',    'uses' =>   'ClientController@store']);
      Route::get('/client/edit/{id}',         ['as' => 'client.edit',     'uses' =>   'ClientController@edit']);
      Route::post('/client/update/{id}',      ['as' => 'client.update',   'uses' =>   'ClientController@update']);
      Route::get('/client/delete/{id}',       ['as' => 'client.delete',   'uses' =>   'ClientController@destroy']);

      /*Routes for career section */
      Route::get('/career',                   ['as' => 'career',          'uses' =>   'CareerController@index']);
      Route::get('/career/create',            ['as' => 'career.create',   'uses' =>   'CareerController@create']);
      Route::post('/career/store',            ['as' => 'career.store',    'uses' =>   'CareerController@store']);
      Route::get('/career/edit/{id}',         ['as' => 'career.edit',     'uses' =>   'CareerController@edit']);
      Route::post('/career/update/{id}',      ['as' => 'career.update',   'uses' =>   'CareerController@update']);
      Route::get('/career/delete/{id}',       ['as' => 'career.delete',   'uses' =>   'CareerController@destroy']);

      /*Routes for contacts */
      Route::get('/contact',                   ['as' => 'contact',          'uses' =>   'ContactController@index']);
      Route::get('/contact/edit/{id}',         ['as' => 'contact.edit',     'uses' =>   'ContactController@edit']);
      Route::post('/contact/update/{id}',      ['as' => 'contact.update',   'uses' =>   'ContactController@update']);
      Route::get('/contact/delete/{id}',       ['as' => 'contact.delete',   'uses' =>   'ContactController@destroy']);

      /*Routes for vacancy messages */
      Route::get('/vacancy',                   ['as' => 'vacancy',          'uses' =>   'VacancyController@index']);
      Route::get('/vacancy/edit/{id}',         ['as' => 'vacancy.edit',     'uses' =>   'VacancyController@edit']);
      Route::post('/vacancy/update/{id}',      ['as' => 'vacancy.update',   'uses' =>   'VacancyController@update']);
      Route::get('/vacancy/delete/{id}',       ['as' => 'vacancy.delete',   'uses' =>   'VacancyController@destroy']);

      Route::get('/vacancy/download/{resume}',       ['as' => 'vacancy.download',   'uses' =>   'VacancyController@download']);

  

      /* These are the routes for settings */
    Route::get('/settings',                   ['as' => 'settings',          'uses' =>   'SiteSettingsController@index']);
    // Route::get('/settings/create',            ['as' => 'settings.create',          'uses' =>   'SiteSettingsController@create']);
    // Route::post('/settings/store',            ['as' => 'settings.store',    'uses' =>   'SiteSettingsController@store']);
    Route::post('/settings/update/{id}',      ['as' => 'settings.update',   'uses' =>   'SiteSettingsController@update']);


});

// These are the routes to register user
Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'namespace' => 'Auth\\', 'middleware' => ['auth']], function (){
    Route::get('/register',                    ['as' => 'register',  'uses' =>   'RegisterController@index']);
    Route::get('/register/create',             ['as' => 'register.create',  'uses' =>   'RegisterController@create']);
    Route::post('/register/store',             ['as' => 'register.store',  'uses' =>   'RegisterController@store']);
    Route::get('/register/show/{id}',          ['as' => 'register.show',  'uses' =>   'RegisterController@show']);
    Route::get('/register/edit/{id}',          ['as' => 'register.edit',  'uses' =>   'RegisterController@edit']);
    Route::post('/register/update/{id}',       ['as' => 'register.update',  'uses' =>   'RegisterController@update']);
    Route::get('/register/delete/{id}',        ['as' => 'register.delete',  'uses' =>   'RegisterController@destroy']);
});

Auth::routes();

Route::get('/register', 'Auth\RegisterController@index')->name('admin.register')->middleware('auth');

