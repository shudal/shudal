<?php
namespace app\fuckjwc\controller;

use think\Controller;

class Version extends Controller
{

    public function check() {
	$version = input('get.version');
	$version = (int) $version;
	if ($version < 1) {
        	return apiReturn(1, '检查到新版本，请于github/shudal相关项目里寻找新版本');
	} else {
		return apiReturn(-1, '');
	}
    }

}
