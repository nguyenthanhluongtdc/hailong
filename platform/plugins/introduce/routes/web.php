<?php

Route::group(['namespace' => 'Platform\Introduce\Http\Controllers', 'middleware' => ['web', 'core']], function () {

    Route::group(['prefix' => BaseHelper::getAdminPrefix(), 'middleware' => 'auth'], function () {

        Route::group(['prefix' => 'introduces', 'as' => 'introduce.'], function () {
            Route::resource('', 'IntroduceController')->parameters(['' => 'introduce']);
            Route::delete('items/destroy', [
                'as'         => 'deletes',
                'uses'       => 'IntroduceController@deletes',
                'permission' => 'introduce.destroy',
            ]);
        });
    });

    Route::get(get_slug_introduce_by_template('introduce'),'IntroduceController@getIntroduce');
    Route::get(get_slug_introduce_by_template('company-info'),'IntroduceController@getCompanyInfo');
    Route::get(get_slug_introduce_by_template('teachnological-line'),'IntroduceController@getTeachnologicalLine');
    Route::get(get_slug_introduce_by_template('introduce-profile'),'IntroduceController@getIntroduceProfile');

});
