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
        if (!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required',
        ])) {
            return redirect()->to('/create');
        }
        $mahasiswamodel = new Mahasiswa();
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat')
        ];
        $mahasiswamodel->save($data);

        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $mahasiswamodel = new Mahasiswa();
        $mahasiswamodel->delete($id);
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswamodel = new Mahasiswa();
        $mahasiswa = $mahasiswamodel->find($id);

        $data = [
            'title' => 'Edit Mahasiswa'
        ];

        return view('templates/header', $data)
            . view('mahasiswa/edit', $mahasiswa)
            . view('templates/footer');
    }

    public function update($id)
    {
        if (!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required',
        ])) {
            return redirect()->to('/edit/' . $id);
        }
        $mahasiswamodel = new Mahasiswa();
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
        ];
        $mahasiswamodel->update($id, $data);

        return redirect()->to('/mahasiswa');
    }
}
