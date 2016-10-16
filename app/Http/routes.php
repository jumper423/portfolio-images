<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'ImageController@index');
});