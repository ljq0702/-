<?php

namespace app\http\middleware;


class Check
{
    public function handle($request, \Closure $next)
    {
        if(!session('?admin.user')){
            return redirect(url('admin/login/index'))->with('error','未登录');
        }

        return $next($request);
    }
}
