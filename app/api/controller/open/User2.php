<?php

namespace app\api\controller\open;

class User2
{
    protected $middleware = ['\app\middleware\OpenApi::class'];

    public function index() {
        echo 'api/open.user2/index';
    }
}