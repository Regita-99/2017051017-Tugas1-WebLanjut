<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswamodel = new Mahasiswa();
        $mahasiswa = $mahasiswamodel->findAll();

        $data = ['title' => 'Mahasiswa', 'mahasiswa' => $mahasiswa];

        return view('templates/header', $data)
            . view('pages/mahasiswa', $data)
            . view('templates/footer');
    }
}
