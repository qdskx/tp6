<?php
declare (strict_types = 1);

namespace app\common\listener;

class UserLogin
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event)
    {

        var_dump(__NAMESPACE__);
        //这里是登录成功后的逻辑,比如写入日志
        var_dump($event);
    }    
}
