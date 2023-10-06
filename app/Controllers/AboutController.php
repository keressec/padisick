<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AboutController extends BaseController
{
    public function index(): string
    {
        return view('components/header') .
            view('about') .
            view('components/footer');
    }
}
