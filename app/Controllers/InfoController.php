<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InfoController extends BaseController
{
    public function index()
    {

        $data['title'] = 'Info';
        return view('components/header', $data) .
            view('info') .
            view('components/footer');
    }
    public function articles()
    {

        $data['title'] = 'Blas';
        return view('components/header', $data) .
            view('detail_blas') .
            view('components/footer');
    }
}
