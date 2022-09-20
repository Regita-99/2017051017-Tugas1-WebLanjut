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
            . view('mahasiswa/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Create Mahasiswa'
        ];

        return view('templates/header', $data)
            . view('mahasiswa/create')
            . view('templates/footer');
    }
    public function store()
    {
        $mahasiswamodel = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $mahasiswamodel->save($data);

        return redirect()->to('/mahasiswa');
    }
}
