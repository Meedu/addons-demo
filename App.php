<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Addons\AddonsDemo;

use Addons\AddonsDemo\Models\Blog;
use Illuminate\Foundation\Inspiring;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;
use Addons\AddonsDemo\Constant\Constant;

class App
{
    public static function install()
    {
        Artisan::call('migrate', ['--path' => base_path('/addons/' . Constant::APP_SIGN . '/databases/migrations'), '--realpath' => true, '--force' => true]);

        // 初始化数据
        $i = 10;
        while ($i-- > 0) {
            $c = Inspiring::quote();
            Blog::create([
                'title' => $c,
                'content' => $c,
            ]);
        }

        // 静态资源目录
        @unlink(base_path('public/addons/' . Constant::APP_SIGN));
        $file = app()->make(Filesystem::class);
        $file->link(base_path('addons/' . Constant::APP_SIGN . '/public'), base_path('public/addons/' . Constant::APP_SIGN));
    }

    public static function uninstall()
    {
        // 静态资源目录
        @unlink(base_path('public/addons/' . Constant::APP_SIGN));

        // 卸载不删除数据库表
//        Artisan::call('migrate:rollback', ['--path' => base_path('/addons/' . Constant::APP_SIGN . '/databases/migrations'), '--realpath' => true, '--force' => true]);
    }

    public static function upgrade()
    {
        Artisan::call('migrate', ['--path' => base_path('/addons/' . Constant::APP_SIGN . '/databases/migrations'), '--realpath' => true, '--force' => true]);
    }
}
