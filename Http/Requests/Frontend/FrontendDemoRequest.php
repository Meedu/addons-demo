<?php

/*
 * This file is part of the Qsnh/meedu.
 *
 * (c) XiaoTeng <616896861@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Addons\AddonsDemo\Http\Requests\Frontend;

use App\Http\Requests\Frontend\BaseRequest;

class FrontendDemoRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'title' => 'required|min:1|max:20',
            'content' => 'required|min:1|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '请输入标题',
            // ...
        ];
    }
}
