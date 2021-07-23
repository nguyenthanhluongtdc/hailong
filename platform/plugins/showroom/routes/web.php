<?php

Route::group(['namespace' => 'Platform\Showroom\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'showrooms', 'as' => 'showroom.'], function () {
            Route::resource('', 'ShowroomController')->parameters(['' => 'showroom']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ShowroomController@deletes',
                'permission' => 'showroom.destroy',
            ]);
        });
    });

});
