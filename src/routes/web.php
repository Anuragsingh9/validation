<?php



Route::group(['namespace' => '\App\Http\Controllers',
'middleware' => 'web'], function () {
    //routes here

Route::get('shows','TestController@show');

Route::post('submitt','TestController@storee')->name('submitt');
});

Route::group(['namespace'=>'pebibits\validation\Http\Controllers',
'middleware' => 'web'],function(){

    Route::get('validate',function(){
        return "Validation";
    });
    Route::get('valid','FormController@index');
    // });
    // Route::group(['middleware' => 'web'], function () {
        // Auth::routes();
        Route::post('submit','FormController@store')->name('submit');

    // });
    
});

// Route::get('show','TestController@show');


