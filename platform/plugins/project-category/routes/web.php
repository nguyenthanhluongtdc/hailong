<?php

Route::group(['namespace' => 'Platform\ProjectCategory\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'project-categories', 'as' => 'project-category.'], function () {
            Route::resource('', 'ProjectCategoryController')->parameters(['' => 'project-category']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ProjectCategoryController@deletes',
                'permission' => 'project-category.destroy',
            ]);
        });
    });

});
