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

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Addons\AddonsDemo\Constant\Constant;
use Addons\AddonsDemo\Commands\AppCommand;
use Addons\AddonsDemo\Listeners\LoginListener;

class MainServiceProvider extends ServiceProvider
{
    protected $listen = [
        'App\Events\UserLoginEvent' => [
            LoginListener::class,
        ],
    ];

    public function boot()
    {
        // 注册视图命名空间
        $this->loadViewsFrom(__DIR__ . '/resources/views', Constant::APP_SIGN);
        // 注册路由
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/backend.php');
        // 注册命令
        $this->commands([
            AppCommand::class,
        ]);

        // 事件注册
        foreach ($this->listen as $event => $listeners) {
            foreach ($listeners as $listener) {
                Event::listen($event, $listener);
            }
        }
    }

    public function register()
    {
    }
}
