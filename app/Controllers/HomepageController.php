<?php

namespace App\Controllers;

class HomepageController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Beranda';
        return view('components/header', $data) .
            view('homepage') .
            view('components/footer');
    }
}
