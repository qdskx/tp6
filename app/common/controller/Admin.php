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
        \app\middleware\AdminCheck::class => [

        ]
    ];



    public function initialize()
    {

    }

}
