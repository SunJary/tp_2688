<?php

use think\facade\Route;

Route::rule('open/user/:action', 'app\api\controller\open\User@:action')->middleware(\app\middleware\OpenApi::class);

Route::rule('c_route/:action', 'app\api\controller\C@:action')->middleware(\app\middleware\OpenApi::class);

Route::rule('open/user2/:action', 'app\api\controller\open\User2@:action');
