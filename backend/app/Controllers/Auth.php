<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');
        $post = $request->getPost();
            if (! $validation->run($post)) {
                $session->setFlashdata('errors', $validation->getErrors());
                $session->setFlashdata('old', $post);
                return redirect()->back()->withInput();
            }
        $email = $request->getPost('email');
        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('email', $email)->first();
        if (! $user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }
        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array)$user);
        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }
        $session->set('user', [
            'id' => $userArr['id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'first_name' => $userArr['first_name'] ?? null,
            'last_name' => $userArr['last_name'] ?? null,
            'type' => $userArr['type'] ?? 'client',
        ]);
        $type = $userArr['type'] ?? 'client';
        if ($type === 'client') {
            return redirect()->to('/');
        } else if ($type === 'admin') {
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->to('/');
        }
    }




    public function signup()
    {
        $session = session();
        $request = service('request');
        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');
        $post = $request->getPost();
            if (! $validation->run($post)) {
                $session->setFlashdata('errors', $validation->getErrors());
                $session->setFlashdata('old', $post);
                return redirect()->back()->withInput();
            }
        $email = $request->getPost('email');
        $userModel = new \App\Models\UserModel();
        // Check if email already exists
        if ($userModel->where('email', $email)->first()) {
            $session->setFlashdata('errors', ['email' => 'An account with that email already exists']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Check if last_name already exists for type 'client'
        if ($userModel->where('last_name', $post['last_name'])->where('type', 'client')->first()) {
            $session->setFlashdata('errors', ['last_name' => 'An account with that last name already exists']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Check if first_name already exists for type 'client'
        if ($userModel->where('first_name', $post['first_name'])->where('type', 'client')->first()) {
            $session->setFlashdata('errors', ['first_name' => 'An account with that first name already exists']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Check if middle_name already exists for type 'client'
        if ($userModel->where('middle_name', $post['middle_name'])->where('type', 'client')->first()) {
            $session->setFlashdata('errors', ['middle_name' => 'An account with that middle name already exists']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $data = [
            'email'       => $post['email'],
            'last_name'   => $post['last_name'],
            'first_name'  => $post['first_name'],
            'middle_name' => $post['middle_name'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
        ];
        $insert = $userModel->insert($data);
        if ($insert) {
            return redirect()->to('/')->with('success', 'Account created successfully. Please log in.');
        } else {
            return redirect()->back()->with('error', 'Failed to create account. Please try again.');
        }
    }
    public function logout()
{
    $session = session();
    $session->destroy();   // Remove all session data
    return redirect()->to('/')->with('success', 'You have logged out successfully.');
}
}