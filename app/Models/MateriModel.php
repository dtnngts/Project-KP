<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table         = 'materi';
    protected $primaryKey    = 'id_materi';
    protected $allowedFields = ['nama_materi', 'id_kategori'];

    public function getMateri($hari)
    {
        return $this->select('materi.*, kategori.nama_kategori, hari_kursus.hari as hari')
        ->join('kategori', 'kategori.id_kategori = materi.id_kategori')
        ->join('hari_kursus', 'hari_kursus.id_hari = kategori.id_hari')
        ->where('hari_kursus.hari', $hari)
            ->get()
            ->getResultArray();
    }

    public function getKategori($id_kategori)
    {
        return $this->where('id_kategori', $id_kategori)->getResultArray();
    }
}
