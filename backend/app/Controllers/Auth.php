<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login(): string
    {
    $session = session();
    // Here i created rules for email and password
    $validation = \Config\Services::validation();
    // Variable comes from the html the id from the input
    // Format: variable, human readable name, rules seperated by |
    // So this following rule means variable email is Email which means it should not be null and has valid email format
    $validation->setRule('email', 'Email', 'required|valid_email');
    // The following rule means variable password, ma,ed Password and it should not be null
    $validation->setRule('password', 'Password', 'required');
    // Other Rules
    //min_length[]
    //max_length[]
    //permit_empty
    //matches[<variable name here>]
    $userModel = new \App\Models\UsersModel();
    $user = $userModel->where('email', $email)->first();
        if (! $user) {
        $session->setFlashdata('errors', ['email' => 'No account found for that email']);
        $session->setFlashdata('old', ['email' => $email]);
        return redirect()->back()->withInput();
    }
    $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);
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
        'display_name' => trim(($userArr['first_name'][0] ?? '') . ' ' . ($userArr['middle_name'][0] ?? '') . ' ' . ($userArr['last_name'] ?? '')),
    ]);
        $type = strtolower($userArr['type'] ?? 'client');
    if ($type === 'manager') {
        return redirect()->to('/admin/dashboard');
    }

    if ($type === 'client') {
        return redirect()->to('/');
    }
    }
    public function logout(): string
    {
        session()->destroy();
        $params = session_get_cookie_params();
setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
        return redirect()->to('/');

    }
    public function signup(): string
    {
        $request = service('request');
// This should be based on data from database table
// Make sure that required datas are specified while some should be expecting null so have catcher for it
$data = [
    'first_name' => $post['first_name'],
    'middle_name' => $post['middle_name'],
    'last_name' => $post['last_name'],
    'email' => $post['email'],
    'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
    'type' => 'client',
    'account_status' => 1,
    'email_activated' => 0,
];
    $inserted = $userModel->insert($data);

    }
}