<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AboutController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Tentang';
        return view('components/header', $data) .
            view('about') .
            view('components/footer');
    }
}
