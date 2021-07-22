<?php

Route::group(['namespace' => 'Platform\FactoryAddress\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'factory-addresses', 'as' => 'factory-address.'], function () {
            Route::resource('', 'FactoryAddressController')->parameters(['' => 'factory-address']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'FactoryAddressController@deletes',
                'permission' => 'factory-address.destroy',
            ]);
        });
    });

});
