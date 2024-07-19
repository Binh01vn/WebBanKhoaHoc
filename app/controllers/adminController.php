<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController{
    public function homeAdmin(){
        $title = "Trang chủ ADMIN";
        $this->render('admin.homeAdmin', compact('title'));
    }
}