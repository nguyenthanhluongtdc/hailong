<?php

Route::group(['namespace' => 'Platform\Factory\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'factories', 'as' => 'factory.'], function () {
            Route::resource('', 'FactoryController')->parameters(['' => 'factory']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'FactoryController@deletes',
                'permission' => 'factory.destroy',
            ]);
        });
    });

});
