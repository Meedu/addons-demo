<?php


// 后台api中间件
// 'auth:administrator' = 登录校验
// 'backend.permission' = 权限校验

Route::group(['middleware' => ['api']], function () {
    // todo
});