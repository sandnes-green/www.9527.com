<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
Route::pattern([
    'name' => '\w+',
    'id'   => '\d+',
]);
Route::alias('test','Home/Test');
Route::get('Index/hello', 'app/home/Index/hello')
    ->ext('html');
Route::rule('Index/index','app/home/Index/index')->middleware('Auth');
Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

return [

];
