<?php

namespace App\Controllers;

use App\controllers\BaseController;

class UserController extends BaseController
{
    public function homeUser()
    {
        $title = "Trang chủ";
        $this->render('user.home', compact('title'));
    }
    public function web_development()
    {
        $title = "Phát triển website";
        $this->render('user.web-development', compact('title'));
    }
    public function pricing()
    {
        $title = "Giá khóa học";
        $this->render('user.pricing', compact('title'));
    }
    public function user_research()
    {
        $title = "Nghiên cứu khóa học";
        $this->render('user.user-research', compact('title'));
    }
}

?>