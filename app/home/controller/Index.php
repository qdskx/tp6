<?php
declare (strict_types = 1);

namespace app\home\controller;

use think\Request;

class Index
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index(Request $request)
    {

        $obj = new \think\Request;

        var_dump($request === $obj);

        var_dump(__METHOD__);

    }


    public function testTwo(\app\common\controller\Test $test){
        $test->add('xuanxuan');
        return $test->getAdd();
    }

}
