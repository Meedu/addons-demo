<?php


namespace Addons\AddonsDemo;

use Addons\AddonsDemo\Commands\AppCommand;
use Addons\AddonsDemo\Constant\Constant;
use Addons\AddonsDemo\Listeners\LoginListener;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

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