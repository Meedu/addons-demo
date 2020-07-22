<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Addons\AddonsDemo\Http\Controllers\Api;

use App\Http\Controllers\Api\V2\BaseController;

class ApiDemoController extends BaseController
{
    public function index()
    {
        return [
            'code' => 0,
            'message' => '演示插件',
            'data' => [
                'app' => 'meedu',
            ]
        ];
    }
}
