<?php
declare (strict_types = 1);

namespace app\middleware;

class OpenApi
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        //
        // return json('走了中间件：app\middleware\OpenApi');
       
        $response = $next($request);

        return $response;
    }
}
