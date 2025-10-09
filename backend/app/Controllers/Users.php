<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        return view('user/landing');
    }
    public function roadmap(): string
    {
        return view('user/road');
    }
    public function moodboard(): string
    {
        return view('user/mood');
    }
    public function button(): string
    {
        return view('components/button');
    }
}