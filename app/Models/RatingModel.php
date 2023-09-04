<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{
    protected $table         = 'rating';
    protected $primaryKey    = 'id_rating';
    protected $allowedFields = ['no_registrasi', 'id_instruktur', 'rating', 'review', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getRating($noRegistrasi, $idInstruktur)
    {
        return $this->where('no_registrasi', $noRegistrasi)
            ->where('id_instruktur', $idInstruktur)
            ->first();
    }

    public function countRating($id_instruktur)
    {
        return $this->where('id_instruktur', $id_instruktur)->countAllResults();
    }

    public function sumRating($id_instruktur)
    {
        return $this->selectSum('rating', 'total_rating')
            ->where('id_instruktur', $id_instruktur)
            ->get()->getRowArray();
    }
}
