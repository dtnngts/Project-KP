<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table         = 'siswa';
    protected $primaryKey    = 'no_registrasi';
    protected $allowedFields = [
        'nama', 'id_akun', 'ttl', 'telpon', 'pekerjaan', 'alamat', 'foto_profil', 'jenis_kendaraan',
        'kode_kendaraan', 'id_instruktur', 'paket', 'jadwal', 'status', 'jenis_pembayaran', 'jumlah_pembayaran', 'sisa_pembayaran',
        'kehadiran', 'qr', 'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;

    public function getAkun($id_akun)
    {
        return $this->where('id_akun', $id_akun)->first();
    }

    public function countSiswa($id_instruktur)
    {
        return $this->where('id_instruktur', $id_instruktur)->countAllResults();
    }

    // public function getInstruktur($id_instruktur)
    // {
    //     return $this->where('id_instruktur', $id_instruktur)->get()->getRowArray();
    // }

    public function getInstruktur($id_instruktur, $status)
    {
        return $this->db->table('siswa')
        ->select('*')
        ->where('id_instruktur', $id_instruktur) 
        ->where('status', $status)
        ->get()
        ->getResultArray();
    }
}
