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
    public function prediction()
    {
        $data['title'] = "Hasil Prediksi";
        // $result = $this->input->get('result');
        // $prob = $this->input->get('probability');
        // $image = $this->input->get('image');
        // switch ($result) {
        //     case 'Bacterial Leaf Blight':
        //         $data['information'] = $this->Information_model->get_information(3);
        //         break;
        //     case 'Blas':
        //         $data['information'] = $this->Information_model->get_information(2);
        //         break;
        //     case 'Brownspot':
        //         $data['information'] = $this->Information_model->get_information(4);
        //         break;
        // }
        // $data['probability'] = $prob;
        // $data['image'] = $image;
        return view('components/header', $data) .
            view('result') .
            view('components/footer');
    }
}
