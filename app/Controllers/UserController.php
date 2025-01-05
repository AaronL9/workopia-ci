<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function register($errors = null)
    {
        helper('form');
        return view('users/create', ['errors' => $errors]);
    }

    public function login()
    {
        helper('form');
        return view('users/login');
    }

    public function create() {
        $data = $this->request->getPost([
            'name',
            'email',
            'city',
            'password',
            'password_confirmation'
        ]);

        $validation = service('validation');

        if (!$validation->run($data, 'signup')) {
            $errors = $validation->getErrors();
            return $this->register($errors);
        }

        return "hello";
    }
}
