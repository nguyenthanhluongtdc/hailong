<?php

Route::group(['namespace' => 'Platform\ProjectCategories\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'project-categories', 'as' => 'project-categories.'], function () {
            Route::resource('', 'ProjectCategoriesController')->parameters(['' => 'project-categories']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ProjectCategoriesController@deletes',
                'permission' => 'project-categories.destroy',
            ]);
        });
    });

});
