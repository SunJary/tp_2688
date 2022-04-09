<?php

use think\facade\Route;

//全局规则
Route::pattern([
    'short'             =>  '[0-9a-zA-Z]+',
]);

Route::get(':short','Index/short');

