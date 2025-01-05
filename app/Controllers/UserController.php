<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function register()
    {
        helper('form');
        return view('users/create');
    }

    public function login()
    {
        helper('form');
        return view('users/login');
    }
}
