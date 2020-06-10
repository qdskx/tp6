<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\Request;
use app\common\controller\Admin;

class User extends Admin
{
    protected $middleware = [
        \app\middleware\AdminCheck::class => [
            'except' => ['login']
        ]
    ];


    public function index(){
        view('test');
        return '用户列表';
    }

    public function login(){
        return '登录页面';
    }
}
