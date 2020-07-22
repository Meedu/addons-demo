<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Addons\AddonsDemo\Http\Controllers\Frontend\FrontendDemoController;

Route::group(['middleware' => ['web', 'global.share']], function () {
    Route::get('/addons/demo', FrontendDemoController::class . '@index')->name('addons_demo.index');
});
