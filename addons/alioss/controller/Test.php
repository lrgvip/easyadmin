<?php

namespace addons\alioss\controller;

// +----------------------------------------------------------------------
// | EasyAdmin
// +----------------------------------------------------------------------
// | PHP交流群: 763822524
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org 
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zhongshaofa/EasyAdmin
// +----------------------------------------------------------------------

use addons\alioss\model\SystemConfig;
use app\common\controller\AdminController;
use EasyAddons\Controller;

class Test extends Controller
{

    public function index()
    {
        return $this->fetch();
    }

    public function ceshi()
    {
        echo __METHOD__;
    }

}