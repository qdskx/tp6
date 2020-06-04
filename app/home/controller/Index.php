<?php
declare (strict_types = 1);

namespace app\home\controller;
use one\One;
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


    public function testTwo(\app\common\controller\Test $as){
        $as->add('旋旋');
        return $as->getAdd();
    }

    public function two(One $one){
        var_dump('one');
        $one->index();
    }

    public function three(){
        var_dump('three');
        $name = 'one';
//        $three = new \one\ . $name;
//        $three->index();
    }

    public function four(one $one){
        $one->index();


    }

}
