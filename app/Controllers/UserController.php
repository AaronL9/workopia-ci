<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function register($errors = null)
    {
        helper('form');
        return view('users/create', ['errors' => $errors]);
    }

    public function login($errors = null)
    {
        helper('form');
        return view('users/login', ['errors' => $errors]);
    }

    public function authenticate()
    {
        $data = $this->request->getPost([
            'email',
            'password'
        ]);

        if (!$this->validateData($data, 'login')) {
            $errors = $this->validator->getErrors();
            return $this->login($errors);
        }

        $userModel = model(UserModel::class);

        $user = $userModel->where('email', $data['email'])->first();

        if ($user && password_verify($data['password'], $user->password)) {
            $session = session();
            $session->set([
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                ]
            ]);

            return redirect()->to('/');
        }

        return $this->login(['error' => 'Invalid credentials']);
    }

    public function create()
    {
        $data = $this->request->getPost([
            'name',
            'email',
            'city',
            'password',
            'password_confirmation'
        ]);

        if (!$this->validateData($data, 'signup')) {
            $errors = $this->validator->getErrors();
            return $this->register($errors);
        }

        $validatedData = $this->validator->getValidated();

        $validatedData['password'] = password_hash($validatedData['password'], PASSWORD_DEFAULT);
        unset($validatedData['password_confirmation']);

        $userModel = model(UserModel::class);

        $userModel->save($validatedData);

        $userId = $userModel->getInsertID();

        $user = [
            'id' => $userId,
            'name' => $validatedData['name'],
        ];

        $session = service('session');

        $session->set(['user' => $user]);

        return redirect('/');
    }
}
