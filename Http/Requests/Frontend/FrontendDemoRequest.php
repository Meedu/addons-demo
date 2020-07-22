<?php


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