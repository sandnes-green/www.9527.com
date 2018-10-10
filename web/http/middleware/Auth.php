<?php
  namespace app\http\middleware;
  class Auth{
    public function handle($request, \Closure $next){
      echo "中间件已经启用";
      return $next($request);
    }
  }
