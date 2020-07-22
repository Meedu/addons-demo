<?php


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