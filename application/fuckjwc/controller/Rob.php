<?php
namespace app\fuckjwc\controller;

use think\Controller;

class Rob extends Controller
{
    public function index()
    {
        return "this is shudal's site's module: fuckjwc, rob";
    }

    public function canRob() {
        return apiReturn(1, 'OK');
    }

}
