<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\Controller;

class MahasiswaController extends Controller
{
    private $model;
    
    

    // model = sebagai jembatan ke tabel mahasiswa/database mahasiswa
    public function __construct()
    {
        $this->model = new MahasiswaModel();
    }

    // Menampilkan semua data mahasiswa
    public function index()
    {
        $data['mahasiswas'] = $this->model->findAll();
        return view('mahasiswa/index', $data);
    }

    // Form input data baru
    public function create()
    {
        return view('mahasiswa/create');
    }

    // Simpan data
    public function store()
    {
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan')
        ];

        if ($this->model->insert($data)) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan.');
        } else {
            session()->setFlashdata('error', 'Gagal menambahkan data.');
        }

        return redirect()->to('/mahasiswa');
    }

    // Tampil detail data
    public function show($id)
    {
        $data['mahasiswa'] = $this->model->find(id: $id);
        return view('mahasiswa/show', $data);
    }

    // Form edit
    public function edit($id)
    {
        $data['mahasiswa'] = $this->model->find($id);
        return view('mahasiswa/edit', $data);
    }

    // Update data
    public function update($id)
    {
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan')
        ];

        if ($this->model->update($id, $data)) {
            session()->setFlashdata('success', 'Data berhasil diperbarui.');
        } else {
            session()->setFlashdata('error', 'Gagal memperbarui data.');
        }

        return redirect()->to('/mahasiswa');
    }

    // Hapus data
    public function delete($id)
    {
        if ($this->model->delete($id)) {
            session()->setFlashdata('success', 'Data berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Gagal menghapus data.');
        }

        return redirect()->to('/mahasiswa');
    }

    // Cari data
    public function search()
    {
        $keyword = $this->request->getGet('q');
        if ($keyword) {
            $data['mahasiswas'] = $this->model->like('nama', $keyword)
            ->orLike('nim', $keyword)
            ->orLike('jurusan', $keyword)->findAll();
        } else {
            $data['mahasiswas'] = $this->model->findAll();
        }
        return view('mahasiswa/index', $data);
    }
}