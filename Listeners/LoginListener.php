<?php


namespace Addons\AddonsDemo\Listeners;


use App\Events\UserLoginEvent;
use Illuminate\Support\Facades\Log;

class LoginListener
{

    public function handle(UserLoginEvent $event)
    {
        Log::info(__METHOD__ . '|用户登录：' . $event->userId);
    }

}