<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\Controller;

class Validasi extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('validasi_form');
    }

    public function simpan()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        $rules = [
            'nip'   => 'required|numeric',
            'nama'  => 'required|min_length[3]',
            'gender'=> 'required',
            'telp'  => 'required|numeric',
            'email' => 'required|valid_email'
        ];

        if (! $this->validate($rules)) {
            return view('validasi_form', [
                'validation' => $this->validator
            ]);
        }

        $model = new MahasiswaModel();
        $model->insert([
            'nip'   => $this->request->getPost('nip'),
            'nama'  => $this->request->getPost('nama'),
            'gender'=> $this->request->getPost('gender'),
            'telp'  => $this->request->getPost('telp'),
            'email' => $this->request->getPost('email')
        ]);

        return redirect()->to('/validasi')->with('success', 'Data berhasil disimpan!');
    }
}
