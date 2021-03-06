<?php

Route::group(['namespace' => 'Platform\MaintenanceMode\Http\Controllers', 'middleware' => 'web'], function () {

    Route::group(['prefix' => config('core.base.general.admin_dir'), 'middleware' => 'auth'], function () {
        Route::group(['prefix' => 'system/maintenance'], function () {
            Route::get('', [
                'as'         => 'system.maintenance.index',
                'uses'       => 'MaintenanceModeController@getIndex',
                'permission' => 'system.maintenance.index',
            ]);

            Route::post('run', [
                'as'         => 'system.maintenance.run',
                'uses'       => 'MaintenanceModeController@postRun',
                // 'middleware' => 'preventDemo',
                'permission' => 'system.maintenance.run',
            ]);
        });
    });

});