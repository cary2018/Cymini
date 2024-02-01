<?php
namespace app\index\controller;

use app\index\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return View();
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }

}


