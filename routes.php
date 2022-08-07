<?php

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::auth();
    Route::group(['prefix' => app('urlBack')], function () {
        Route::group(array('module' => 'Blog', 'middleware' => ['web', 'permission:permission-access-blog'], 'namespace' => 'App\Modules\Blog\Controllers'), function () {
            Route::get('blog',
                [
                    'as' => app('urlBack') . '.pages.blog.index',
                    'uses' => 'Blog@index',
                    'middleware' => ['permission:permission-access-blog']
                ]);
        });
    });
});
