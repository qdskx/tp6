<?php
declare (strict_types = 1);

namespace app\common\controller;

use think\Request;
use app\BaseController;
use app\middleware\AdminCheck;
use think\facade\session;

class Admin extends BaseController
{
    protected $middleware = [
        AdminCheck::class => [
//            'except' => [
//                'admin/user/login'
//            ]
        ]
    ];



    protected function initialize()
    {
//        if(!session::has('login')){
//            echo '未登录';
//            return redirect('admin/user/login');
//        }
    }

}
