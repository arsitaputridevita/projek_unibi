<?php

namespace App\Models;

use CodeIgniter\Model;

class lowonganModel extends Model
{
    protected $table = 'lowongan';

    protected $UseTimetamps = 'true';

    protected $allowedFields = ['nama_tes', 'is_online', 'is_wawancara', 'status'];

        public function getlowongan()
    {
        return $this->findAll();  // Mengambil semua data dari tabel lowongan
    }

    }
