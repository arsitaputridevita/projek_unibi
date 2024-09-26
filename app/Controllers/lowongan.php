<?php

namespace App\Controllers;
use App\Models\lowonganModel;

class lowongan extends BaseController
{
    protected $lowonganModel;
    public function __construct()
    {

        $this->lowonganModel = new lowonganModel();

    }
    public function index()
    {
        // $lowongan = $this->lowonganModel->findAll();
        $data = [
            'title' => 'Daftar lowongan',
            'lowongan' => $this->lowonganModel->getlowongan()
        ];

        return view('lowongan/index', $data);

    }

    public function create() {
        // session();
        $data = [
            'title' => 'Form lowongan pekerjaan ',
            'lowongan' => $this->lowonganModel->getlowongan()
            
        ];

        return view('/lowongan/create', $data);
    }
    public function save()
    {
        // Validasi input
        if (
            !$this->validate([
                'nama' => [
                    'rules' => 'required|is_unique[lowongan.nama]',
                    'errors' => [
                        'required' => '{field} nama tes harus diis terlebih dahulu',
                        'is_unique' => '{field} nama ini sudah terdaftar',
                    ]
                ]
            ])
        ) {
            $validation = \Config\Services::validation();
            return redirect()->to('/lowongan/create')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->lowonganModel->save([
        
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/lowongan');
    }
    }
    


