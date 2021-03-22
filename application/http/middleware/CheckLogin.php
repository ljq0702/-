<?php

namespace app\http\middleware;

class CheckLogin
{
    public function handle($request, \Closure $next)
    {
        if(!session('?user')){
            return redirect(url("index/login/index"))->with('error','请先登录');
        }
        return $next($request);
    }
}
