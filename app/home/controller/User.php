<?php
declare (strict_types = 1);

namespace app\home\controller;

use think\Request;

class User
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return 'home.controller.user.index';
    }

    public function add(){
        return 'home.controller.user.add';
    }

    public function as(){
        return 'home.controller.user.add';
    }
}
