<?php
declare (strict_types = 1);

namespace app\common\controller;

use think\Request;

class Admin
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        var_dump(app('http')->getName());
        return 'common::admin';
    }

}
