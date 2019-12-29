<?php



    Route::group(['prefix' => LaravelLocalization::setLocale()], function()
    {

        Route::prefix('dashboard')->name('dashboard.')->group(function(){
           Route::group(['middleware'=>'auth'], function () {
               Route::get('/index', 'DashboardController@index')->name('index');
               Route::get('/edit-profile/{id}', 'DashboardController@editProfile')->name('edit-profile');
               Route::put('/update-profile/{id}', 'DashboardController@updateProfile')->name('update-profile');



               Route::post('city/{id}', 'GetCityController@getCity');
               Route::get('delete-country/{id}','DeleteController@delete');

               Route::resource('users', 'UserController');
               Route::resource('clients', 'ClientController');
               Route::resource('countries', 'CountriesController');
               Route::resource('cities', 'CitiesController');
               Route::resource('hotels', 'HotelsController');
               Route::resource('room', 'RoomController');
               Route::resource('room_types', 'RoomTypesController');
               Route::resource('meals', 'MealsController');
               Route::resource('seasons', 'SeasonsController');



           });

        });//end the dashboard
    });
