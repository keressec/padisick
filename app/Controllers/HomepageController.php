<?php

namespace App\Controllers;

class HomepageController extends BaseController
{
    public function index(): string
    {
        return view('components/header') .
            view('homepage') .
            view('components/footer');
    }
}
