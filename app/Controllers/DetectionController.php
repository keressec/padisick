<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DetectionController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Deteksi';
        return view('components/header', $data) .
            view('detection') .
            view('components/footer');
    }
}
