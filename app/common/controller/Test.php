<?php
//依赖注入的测试
declare (strict_types = 1);

namespace app\common\controller;

use think\Request;

class Test
{
    private $name;
    public function add($name){
        $this->name = $name;
    }

    public function getAdd(){
        return '我的名字是' . $this->name;
    }
}
