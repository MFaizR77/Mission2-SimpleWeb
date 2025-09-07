<?php

namespace App\Controllers;

use App\Models\MahasiswaModels;
use CodeIgniter\Controller;

class Mahasiswa extends Controller{

    public function index(){
        $model = new MahasiswaModels();
        
      
        $data['mahasiswa'] = $model->getMahasiswa();

        return view('mahasiswa/indexs', $data);
    }

    public function detail($nim)
    {
        $model = new MahasiswaModels();
        $data['mahasiswa'] = $model->where('nim', $nim)->first();
        $data['title'] = 'Detail Mahasiswa';

        if (!$data['mahasiswa']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Mahasiswa dengan NIM $nim tidak ditemukan");
        }

        return view('mahasiswa/detail', $data);
    }


//    public function detail($nim)
//     {
//         if (empty($nim)) {
//             throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//         }

//         $model = new MahasiswaModels();
//         $data['title'] = 'Detail Mahasiswa';
//         $data['mahasiswa'] = $model->where('nim', $nim)->first();

//         if (!$data['mahasiswa']) {
//             throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
//         }

//         return view('mahasiswa/detail', $data);
//     }

} 