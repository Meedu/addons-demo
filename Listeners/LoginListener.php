<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

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
