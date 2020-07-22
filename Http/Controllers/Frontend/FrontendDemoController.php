<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Addons\AddonsDemo\Http\Controllers\Frontend;

use Addons\AddonsDemo\Models\Blog;
use Addons\AddonsDemo\Constant\Constant;
use App\Http\Controllers\BaseController;

class FrontendDemoController extends BaseController
{
    public function index()
    {
        $blogs = Blog::query()->get();

        return v(Constant::APP_SIGN . '::index', compact('blogs'));
    }
}
