<?php


namespace Addons\AddonsDemo\Http\Controllers\Frontend;


use Addons\AddonsDemo\Constant\Constant;
use Addons\AddonsDemo\Models\Blog;
use App\Http\Controllers\BaseController;

class FrontendDemoController extends BaseController
{

    public function index()
    {
        $blogs = Blog::query()->get();

        return v(Constant::APP_SIGN . '::index', compact('blogs'));
    }

}