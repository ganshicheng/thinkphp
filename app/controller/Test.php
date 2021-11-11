<?php
namespace app\controller;

use app\BaseController;

class Test extends BaseController
{
    public function index() {
        return "testIndex";
    }

    public function hello($value = '') {
        return "helloTest" . $value;
    }

    public function base() {

        return "base, 方法名：".$this->request->action() . ", 当前实际路径：" . $this->app->getBasePath();
    }
}