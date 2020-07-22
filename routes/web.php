<?php

use Addons\AddonsDemo\Http\Controllers\Frontend\FrontendDemoController;

Route::group(['middleware' => ['web', 'global.share']], function () {
    Route::get('/addons/demo', FrontendDemoController::class . '@index')->name('addons_demo.index');
});