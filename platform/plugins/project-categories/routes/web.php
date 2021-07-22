<?php

use Platform\ProjectCategories\Models\ProjectCategories;


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

Route::group(
    ['namespace' => 'Platform\ProjectCategories\Http\Controllers'],
    function () {
        Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
            Route::get(SlugHelper::getPrefix(ProjectCategories::class, 'projects') . '/{slug}', [
                'uses' => 'PublicController@getProjectsByCategory',
                'as' => 'public.project-categories.project',
            ]);
        });
    }
);
