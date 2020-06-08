<?php
declare (strict_types = 1);

namespace app\middleware;
use think\facade\session;

class AdminCheck
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Responsee
     */
    public function handle($request, \Closure $next)
    {
        echo 3333;
        echo $request->action();
        echo $request->controller();
        if(!Session::has('login')){
            if($request->action() == 'index' && $request->controller() == 'index'){
                return redirect('/user/login');
            }
            return redirect('admin/user/login');
        }

        return $next($request);
    }
}
