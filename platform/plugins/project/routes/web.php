<?php
use Platform\Project\Models\Project;

Route::group(['namespace' => 'Platform\Project\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'projects', 'as' => 'project.'], function () {
            Route::resource('', 'ProjectController')->parameters(['' => 'project']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'ProjectController@deletes',
                'permission' => 'project.destroy',
            ]);
        });
    });

});

Route::group(
    ['namespace' => 'Platform\Project\Http\Controllers'],
    function () {
        Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {
            Route::get(SlugHelper::getPrefix(Project::class, 'projects') . '/{slug}', [
                'uses' => 'PublicController@getProject',
                'as' => 'public.project',
            ]);
        });
    }
);
