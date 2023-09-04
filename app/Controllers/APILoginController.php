<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use App\Models\AkunSiswaModel;
use App\Models\AkunInstrukturModel;
use App\Models\SiswaModel;
use App\Models\InstrukturModel;
use App\Models\HariModel;
use App\Models\MateriModel;
use App\Models\NilaiModel;
use App\Models\BeritaModel;
use App\Models\RatingModel;

class APILoginController extends ResourceController
{
    use ResponseTrait;

    // function __construct()
    // {
    //     $this->SiswaModel = new SiswaModel();
    //     // $this->BeritaModel = new BeritaModel();
    // }

    public function index()
    {
        // $AkunAppModel = new AkunAppModel();
        $SiswaModel = new SiswaModel();
        $InstrukturModel = new InstrukturModel();
        $AkunSiswaModel = new AkunSiswaModel();
        $AkunInstrukturModel = new AkunInstrukturModel();
        $RatingModel = new RatingModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $siswaAkun = $AkunSiswaModel->login($email, $password);
        $instrukturAkun = $AkunInstrukturModel->login($email, $password);

        if (!is_null($siswaAkun)) {
            $siswaData = $SiswaModel->getAkun($siswaAkun['id_akunSiswa']);

            if ($siswaData != null) {
                $instruktur = $InstrukturModel->find($siswaData['id_instruktur']);
                $rating = $RatingModel->getRating(
                    $siswaData['no_registrasi'],
                    $siswaData['id_instruktur']
                );
                $ratingValue = ($rating !== null) ? $rating['rating'] : '';
                $ratingReview = ($rating !== null) ? $rating['review'] : '';
                $data = array(
                    "no_registrasi" => $siswaData['no_registrasi'],
                    "nama" => $siswaData['nama'],
                    "ttl" => $siswaData['ttl'],
                    "email" => $siswaAkun['email'],
                    "telpon" => $siswaData['telpon'],
                    "pekerjaan" => $siswaData['pekerjaan'],
                    "alamat" => $siswaData['alamat'],
                    "foto_profil" => $siswaData['foto_profil'],
                    "jenis_kendaraan" => $siswaData['jenis_kendaraan'],
                    "kode_kendaraan" => $siswaData['kode_kendaraan'],
                    "id_instruktur" => $instruktur['id_instruktur'],
                    "nama_instruktur" => $instruktur['nama'],
                    "paket" => $siswaData['paket'],
                    "jadwal" => $siswaData['jadwal'],
                    "status" => $siswaData['status'],
                    "jenis_pembayaran" => $siswaData['jenis_pembayaran'],
                    "jumlah_pembayaran" => $siswaData['jumlah_pembayaran'],
                    "sisa_pembayaran" => $siswaData['sisa_pembayaran'],
                    "kehadiran" => $siswaData['kehadiran'],
                    "qr" => $siswaData['qr'],
                    "created_at" => $siswaData['created_at'],
                    "updated_at" => $siswaData['updated_at'],
                    "rating" => $ratingValue,
                    "review" => $ratingReview,
                    "role" => 'siswa',
                );

                $response = [
                    'code' => 200,
                    'message' => 'Login berhasil',
                    'data' => $data,
                ];

                return $this->respond($response, 200);
            }
        } else if (!is_null($instrukturAkun)) {
            $instrukturData = $InstrukturModel->getAkun($instrukturAkun['id_akunInstruktur']);

            if ($instrukturData != null) {

                $jumlahSiswa = $SiswaModel->countSiswa($instrukturData['id_instruktur']);
                $jumlahSiswaRating = $RatingModel->countRating($instrukturData['id_instruktur']);
                $totalRating = $RatingModel->sumRating($instrukturData['id_instruktur'])['total_rating'];

                if ($jumlahSiswaRating > 1) {
                    $rataRataRating = $totalRating / $jumlahSiswaRating;
                } else if ($jumlahSiswaRating == 1) {
                    $rataRataRating = $totalRating;
                } else {
                    $rataRataRating = 0;
                }

                $data = array(
                    "id_instruktur" => $instrukturData['id_instruktur'],
                    "nama" => $instrukturData['nama'],
                    "email" => $instrukturAkun['email'],
                    "telpon" => $instrukturData['telpon'],
                    "usia" => $instrukturData['usia'],
                    "foto_profil" => $instrukturData['foto_profil'],
                    "jumlah_siswa" => $jumlahSiswa,
                    // "siswa_list_manual" => $siswaListManual,
                    // "siswa_list_matic" => $siswaListMatic,
                    "rating" => $rataRataRating,
                    "created_at" => $instrukturData['created_at'],
                    "updated_at" => $instrukturData['updated_at'],
                    "role" => 'instruktur',
                );

                $response = [
                    'code' => 200,
                    'message' => 'Login berhasil',
                    'data' => $data,
                ];

                return $this->respond($response, 200);
            }
        } else {
            return $this->respond(['error' => 'Email atau Password salah.'], 401);
        }

        // if (is_null($akun)) {
        //     return $this->respond(['error' => 'Email atau Password salah.'], 401);
        // }

        // if ($akun['role'] == 'siswa') {
        //     $siswaData = $SiswaModel->getAkun($akun['id_akun']);

        //     if ($siswaData != null) {
        //         $instruktur = $InstrukturModel->find($siswaData['id_instruktur']);
        //         $rating = $RatingModel->getRating(
        //             $siswaData['no_registrasi'],
        //             $siswaData['id_instruktur']
        //         );
        //         $ratingValue = ($rating !== null) ? $rating['rating'] : null;
        //         $ratingReview = ($rating !== null) ? $rating['review'] : null;
        //         $data = array(
        //             "no_registrasi" => $siswaData['no_registrasi'],
        //             "nama" => $siswaData['nama'],
        //             "ttl" => $siswaData['ttl'],
        //             "email" => $a['email'],
        //             "telpon" => $siswaData['telpon'],
        //             "pekerjaan" => $siswaData['pekerjaan'],
        //             "alamat" => $siswaData['alamat'],
        //             "foto_profil" => $siswaData['foto_profil'],
        //             "jenis_kendaraan" => $siswaData['jenis_kendaraan'],
        //             "kode_kendaraan" => $siswaData['kode_kendaraan'],
        //             "id_instruktur" => $instruktur['id_instruktur'],
        //             "nama_instruktur" => $instruktur['nama'],
        //             "paket" => $siswaData['paket'],
        //             "jadwal" => $siswaData['jadwal'],
        //             "status" => $siswaData['status'],
        //             "jenis_pembayaran" => $siswaData['jenis_pembayaran'],
        //             "jumlah_pembayaran" => $siswaData['jumlah_pembayaran'],
        //             "sisa_pembayaran" => $siswaData['sisa_pembayaran'],
        //             "kehadiran" => $siswaData['kehadiran'],
        //             "qr" => $siswaData['qr'],
        //             "created_at" => $siswaData['created_at'],
        //             "updated_at" => $siswaData['updated_at'],
        //             "rating" => $ratingValue,
        //             "review" => $ratingReview,
        //             "role" => 'siswa',
        //         );

        //         $response = [
        //             'code' => 200,
        //             'message' => 'Login berhasil',
        //             'data' => $data,
        //         ];

        //         return $this->respond($response, 200);
        //     } else {
        //         return $this->respond(['error' => 'Data siswa tidak ditemukan.'], 401);
        //     }
        // }
        // else if ($akun['role'] == 'instruktur') {
        //     $response = [
        //         'code' => 200,
        //         'message' => 'Login berhasil',
        //     ];
        // } else {
        //     return $this->respond(['error' => 'Role pengguna tidak valid.'], 401);
        // }

        // $instruktur = $InstrukturModel->find($akun['id_instruktur']);

        // $rating = $RatingModel->getRating(
        //     $akun['no_registrasi'],
        //     $akun['id_instruktur']
        // );

        // $data = array(
        //     "no_registrasi" => $akun['no_registrasi'],
        //     "nama" => $akun['nama'],
        //     "ttl" => $akun['ttl'],
        //     "email" => $akun['email'],
        //     "telpon" => $akun['telpon'],
        //     "pekerjaan" => $akun['pekerjaan'],
        //     "alamat" => $akun['alamat'],
        //     "foto_profil" => $akun['foto_profil'],
        //     "jenis_kendaraan" => $akun['jenis_kendaraan'],
        //     "kode_kendaraan" => $akun['kode_kendaraan'],
        //     "id_instruktur" => $instruktur['id_instruktur'],
        //     "nama_instruktur" => $instruktur['nama'],
        //     "paket" => $akun['paket'],
        //     "jadwal" => $akun['jadwal'],
        //     "status" => $akun['status'],
        //     "jenis_pembayaran" => $akun['jenis_pembayaran'],
        //     "jumlah_pembayaran" => $akun['jumlah_pembayaran'],
        //     "sisa_pembayaran" => $akun['sisa_pembayaran'],
        //     "kehadiran" => $akun['kehadiran'],
        //     "qr" => $akun['qr'],
        //     "created_at" => $akun['created_at'],
        //     "updated_at" => $akun['updated_at'],
        //     "rating" => $rating['rating'],
        //     "review" => $rating['review'],
        // );

        // $response = [
        //     'code' => 200,
        //     'message' => 'Login berhasil',
        //     'data' => $data,
        // ];

        // return $this->respond($response, 200);

    }

    public function getUserInfo($no_registrasi)
    {
        $SiswaModel = new SiswaModel();
        $InstrukturModel = new InstrukturModel();
        $RatingModel = new RatingModel();
        $siswaData = $SiswaModel->getAkun($no_registrasi);
        $instruktur = $InstrukturModel->find($siswaData['id_instruktur']);
        $rating = $RatingModel->getRating(
            $siswaData['no_registrasi'],
            $siswaData['id_instruktur']
        );
        $ratingValue = ($rating !== null) ? $rating['rating'] : null;
        $ratingReview = ($rating !== null) ? $rating['review'] : null;

        $data = [
            "no_registrasi" => $siswaData['no_registrasi'],
            "nama" => $siswaData['nama'],
            "ttl" => $siswaData['ttl'],
            // "email" => $siswaAkun['email'],
            "telpon" => $siswaData['telpon'],
            "pekerjaan" => $siswaData['pekerjaan'],
            "alamat" => $siswaData['alamat'],
            "foto_profil" => $siswaData['foto_profil'],
            "jenis_kendaraan" => $siswaData['jenis_kendaraan'],
            "kode_kendaraan" => $siswaData['kode_kendaraan'],
            "id_instruktur" => $instruktur['id_instruktur'],
            "nama_instruktur" => $instruktur['nama'],
            "paket" => $siswaData['paket'],
            "jadwal" => $siswaData['jadwal'],
            "status" => $siswaData['status'],
            "jenis_pembayaran" => $siswaData['jenis_pembayaran'],
            "jumlah_pembayaran" => $siswaData['jumlah_pembayaran'],
            "sisa_pembayaran" => $siswaData['sisa_pembayaran'],
            "kehadiran" => $siswaData['kehadiran'],
            "qr" => $siswaData['qr'],
            "created_at" => $siswaData['created_at'],
            "updated_at" => $siswaData['updated_at'],
            "rating" => $ratingValue,
            "review" => $ratingReview,
            "role" => 'siswa',
        ];

        $response = [
            'code' => 200,
            'message' => 'Success',
            'data' => $data,
        ];

        return $this->respond($response, 200);
    }

    public function getListSiswa()
    {
        $SiswaModel = new SiswaModel();

        $id_instruktur = $this->request->getPost('id_instruktur');
        $siswaDataList = $SiswaModel->getInstruktur($id_instruktur);

        $siswaListManual = [];
        $siswaListMatic = [];
        foreach ($siswaDataList as $siswa) {
            $siswaItem = [
                "no_registrasi" => $siswa['no_registrasi'],
                "nama" => $siswa['nama'],
                "ttl" => $siswa['ttl'],
                "telpon" => $siswa['telpon'],
                "pekerjaan" => $siswa['pekerjaan'],
                "alamat" => $siswa['alamat'],
                "foto_profil" => $siswa['foto_profil'],
                "paket" => $siswa['paket'],
                "jenis_kendaraan" => $siswa['jenis_kendaraan'],
                "kode_kendaraan" => $siswa['kode_kendaraan'],
            ];

            if ($siswa['jenis_kendaraan'] == 'Manual') {
                $siswaListManual[] = $siswaItem;
            } elseif ($siswa['jenis_kendaraan'] == 'Matic') {
                $siswaListMatic[] = $siswaItem;
            }
        }

        $data = array(
            "siswa_list_manual" => $siswaListManual,
            "siswa_list_matic" => $siswaListMatic,
        );

        $response = [
            'code' => 200,
            'message' => 'Success',
            'data' => $data,
        ];

        return $this->respond($response, 200);
    }

    public function showBerita()
    {
        $BeritaModel = new BeritaModel();

        $get = $BeritaModel->orderBy('id', 'desc')->findAll();
        $data = array();
        $data['data'] = $get;
        $data['code'] = 200;
        $data['message'] = "success";

        return $this->respond($data, 200);
    }

    public function getHari()
    {
        $HariModel = new HariModel();

        $get = $HariModel->findAll();
        $data = array();
        $data['data'] = $get;
        $data['code'] = 200;
        $data['message'] = "success";

        return $this->respond($data, 200);
    }

    public function getMateri()
    {
        $hari = $this->request->getVar('hari');
        $MateriModel = new MateriModel();
        $materi = $MateriModel->getMateri($hari);
        $data['data'] = $materi;
        $data['code'] = 200;
        $data['message'] = "success";

        return $this->respond($data, 200);
    }

    public function nilai()
    {
        $NilaiModel = new NilaiModel();

        $no_registrasi = $this->request->getVar('no_registrasi');
        $id_instruktur = $this->request->getVar('id_instruktur');
        $nilaiData = $this->request->getVar('nilai');

        $nilaiArray = json_decode($nilaiData, true);

        ksort($nilaiArray);

        $existingNilai = $NilaiModel
            ->where('no_registrasi', $no_registrasi)
            ->where('id_instruktur', $id_instruktur)
            ->first();

        if ($existingNilai) {
            $existingData = json_decode($existingNilai['nilai'], true);

            foreach ($nilaiArray as $id_materi => $nilai) {
                if (array_key_exists($id_materi, $existingData)) {
                    $existingData[$id_materi] = $nilai;
                } else {
                    $existingData[$id_materi] = $nilai;
                }
            }

            $combinedNilai = json_encode($existingData);

            $hasil = $NilaiModel
                ->where('no_registrasi', $no_registrasi)
                ->where('id_instruktur', $id_instruktur)
                ->set(['nilai' => $combinedNilai])
                ->update();
        } else {
            $combinedNilai = json_encode($nilaiArray);

            $hasil = $NilaiModel->insert([
                'no_registrasi' => $no_registrasi,
                'id_instruktur' => $id_instruktur,
                'nilai' => $combinedNilai,
            ]);
        }

        if ($hasil) {
            $data['code'] = 200;
            $data['message'] = "Penilaian berhasil terkirim";
            $data['data'] = $NilaiModel
                ->where('no_registrasi', $no_registrasi)
                ->where('id_instruktur', $id_instruktur)
                ->findAll();

            return $this->respond($data, 200);
        } else {
            $data['code'] = 500;
            $data['message'] = "Error";
            return $this->respond($data, 500);
        }
    }

    public function getNilai()
    {
        $NilaiModel = new NilaiModel();

        $no_registrasi = $this->request->getVar('no_registrasi');
        $id_instruktur = $this->request->getVar('id_instruktur');

        $nilai = $NilaiModel
            ->where('no_registrasi', $no_registrasi)
            ->where('id_instruktur', $id_instruktur)
            ->findAll();

        if ($nilai) {
            $data['code'] = 200;
            $data['message'] = "Data nilai berhasil diambil";
            $data['data'] = $nilai;

            return $this->respond($data, 200);
        } else {
            $data['code'] = 404;
            $data['message'] = "Data nilai tidak ditemukan";

            return $this->respond($data, 404);
        }
    }


    public function ubahProfil()
    {
        $SiswaModel = new SiswaModel();
        $foto = $this->request->getFile('foto_profil');
        $nama_foto = $foto->getName();
        $data_old = $SiswaModel->where("no_registrasi", $this->request->getVar('no_registrasi'))->first();


        if ($foto != null) {
            if ($data_old['foto_profil'] == null && $nama_foto != 'default') {
                $nama_foto = $foto->getRandomName();
                $foto->move('assets/images/profil', $nama_foto);
            } else if ($data_old['foto_profil'] == null && $nama_foto == 'default') {
                $nama_foto = '';
            } else if ($nama_foto == 'default') {
                unlink('assets/images/profil/' . $data_old['foto_profil']);
                $nama_foto = '';
            } else if ($foto == $nama_foto) {
                $nama_foto =  $this->request->getVar('foto_profil');
                // $nama_foto = $data_old['foto_profil'];
            } else if ($nama_foto != $data_old['foto_profil']) {
                $nama_foto = $foto->getRandomName();
                unlink('assets/images/profil/' . $data_old['foto_profil']);
                $foto->move('assets/images/profil', $nama_foto);
            }
        }

        $hasil = $SiswaModel->update($this->request->getVar('no_registrasi'), [
            'nama' => $this->request->getVar('nama'),
            'ttl' => $this->request->getVar('ttl'),
            'email' => $this->request->getVar('email'),
            'telpon' => $this->request->getVar('telpon'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'alamat' => $this->request->getVar('alamat'),
            'foto_profil' => $nama_foto,
        ]);

        if ($hasil) {
            $data['code'] = 200;
            $data['message'] = "Data berhasil diubah";
            $data['data'] = $SiswaModel->where("no_registrasi", $this->request->getVar('no_registrasi'))->first();
            return $this->respond($data, 200);
        } else {
            $data['code'] = 500;
            $data['message'] = "Error";
            return $this->respond($data, 500);
        }
    }

    public function rating()
    {
        $RatingModel = new RatingModel();

        $no_registrasi = $this->request->getVar('no_registrasi');
        $id_instruktur = $this->request->getVar('id_instruktur');
        $rating = $this->request->getVar('rating');
        $review = $this->request->getVar('review');

        $existingRating = $RatingModel->where('no_registrasi', $no_registrasi)
            ->where('id_instruktur', $id_instruktur)
            ->first();

        if ($existingRating) {
            $updateData = [
                'rating' => $rating,
                'review' => $review,
            ];
            $updated = $RatingModel->update($existingRating['id_rating'], $updateData);

            if ($updated) {
                $data['code'] = 200;
                $data['message'] = "Penilaian berhasil diperbarui";
                $data['data'] = $RatingModel->where('no_registrasi', $no_registrasi)->where('id_instruktur', $id_instruktur)->first();
                return $this->respond($data, 200);
            } else {
                $data['code'] = 500;
                $data['message'] = "Gagal memperbarui penilaian";
                return $this->respond($data, 500);
            }
        } else {
            $hasil = $RatingModel->insert([
                'no_registrasi' => $no_registrasi,
                'id_instruktur' => $id_instruktur,
                'rating' => $rating,
                'review' => $review,
            ]);

            if ($hasil) {
                $data['code'] = 200;
                $data['message'] = "Penilaian berhasil terkirim";
                $data['data'] = $RatingModel->where('no_registrasi', $no_registrasi)->where('id_instruktur', $id_instruktur)->first();
                return $this->respond($data, 200);
            } else {
                $data['code'] = 500;
                $data['message'] = "Error";
                return $this->respond($data, 500);
            }
        }
    }

    // public function getRating() {
    //     $RatingModel = new RatingModel();
    //     $SiswaModel = new SiswaModel();
    //     $InstrukturModel = new InstrukturModel();

    //     $noRegistrasi = $this->request->getVar('no_registrasi');
    //     $idInstruktur = $this->request->getVar('id_instruktur');

    //     // $ratings = $RatingModel
    //     //     ->where('no_registrasi', $noRegistrasi)
    //     //     ->where('id_instruktur', $idInstruktur)
    //     //     ->findAll();

    //     $Siswa = $SiswaModel->find($RatingModel['no_registrasi']);
    //     $Instruktur = $InstrukturModel->find($RatingModel['id_instruktur']);

    //     $data= array(
    //         "id_rating" => $RatingModel['no_registrasi'],
    //         "no_registrasi" => $Siswa['no_registrasi'],
    //         "nama" => $Siswa['nama'],
    //         "kode_kendaraan" => $Siswa['kode_kendaraan'],
    //         "instruktur" => $Instruktur['nama'],
    //         "rating" => $RatingModel['rating'],
    //         "review" => $RatingModel['review'],
    //     );

    //     $response = [
    //         'code' => 200,
    //         'message' => 'Data Rating ditemukan',
    //         'data' => $data,
    //     ];

    //     return $this->respond($response, 200);
    // }

    // public function getInstruktur($id_Instruktur) {
    //     $InstrukturModel = new InstrukturModel();

    //     $instruktur = $InstrukturModel->find($id_Instruktur);

    //     if (is_null($instruktur)) {
    //         return $this->respond(['error' => 'Instruktur not found.'], 404);
    //     }

    //     $data = array(
    //         'id_instruktur' => $instruktur['id_instruktur'],
    //         'nama' => $instruktur['nama'],
    //         'usia' => $instruktur['usia'],
    //     );

    //     $response = [
    //         'code' => 200,
    //         'message' => 'Instruktur found',
    //         'data' => $data,
    //     ];

    //     return $this->respond($response, 200);
    // }



    // public function ubahProfil () {
    //     $SiswaModel = new SiswaModel();
    //     $foto = $this->request->getFile('foto_profil');
    //     $nama_foto = $foto->getName();
    //     $data_old = $SiswaModel->where("no_registrasi", $this->request->getVar('no_registrasi'))->first();

    //     // if ($foto == null) {
    //     //     $nama_foto = $data_old['foto_profil'];
    //     // }

    //     // $hasil = false;

    //     if ($foto != null) {
    //         $SiswaModel = new SiswaModel();
    //         $hasil = $SiswaModel->update ($this->request->getVar('no_registrasi') ,[
    //             'nama' => $this->request->getVar('nama'),
    //             'ttl' => $this->request->getVar('ttl'),
    //             'email' => $this->request->getVar('email'),
    //             'telpon' => $this->request->getVar('telpon'),
    //             'pekerjaan' => $this->request->getVar('pekerjaan'),
    //             'alamat' => $this->request->getVar('alamat'),
    //             'foto_profil' => $nama_foto,
    //         ]);
    //     } 
    //     else {
    //         $SiswaModel = new SiswaModel();
    //         $hasil = $SiswaModel->update($this->request->getVar('no_registrasi'), [
    //             'nama' => $this->request->getVar('nama'),
    //             'ttl' => $this->request->getVar('ttl'),
    //             'email' => $this->request->getVar('email'),
    //             'telpon' => $this->request->getVar('telpon'),
    //             'pekerjaan' => $this->request->getVar('pekerjaan'),
    //             'alamat' => $this->request->getVar('alamat'),
    //             'foto_profil' => '',
    //         ]);
    //     }

    //     if ($hasil) {
    //         if ($foto != null && $data_old['foto_profil'] == null) {
    //             $foto->move('assets/images/profil', $nama_foto);
    //         }
    //         else if ($foto != null && $foto == $nama_foto) {
    //             $nama_foto =  $this->request->getVar('foto_profil');
    //             // $foto->move('assets/images/profil', $nama_foto);
    //         }
    //         else if ($foto != null && $foto != $nama_foto) {
    //             unlink('assets/images/profil/' . $data_old['foto_profil']);
    //             $foto->move('assets/images/profil', $nama_foto);
    //         } else if ($foto == '') {
    //             unlink('assets/images/profil/' . $data_old['foto_profil']);
    //             // $foto->move('assets/images/profil', $nama_foto);
    //         }
    //         $data['code'] = 200;
    //         $data['message'] = "Data berhasil diubah";
    //         $data['data'] = $SiswaModel->where("no_registrasi", $this->request->getVar('no_registrasi'))->first();
    //         return $this->respond($data, 200);
    //     } 
    //     else {
    //         $data['code'] = 200;
    //         $data['message'] = "error";
    //         return $this->respond($data, 200);
    //     }
    // }

    // public function ubahProfil()
    // {
    //     $SiswaModel = new SiswaModel();
    //     $foto = $this->request->getFile('foto_profil');
    //     $nama_foto = $foto->getName();
    //     $data_old = $SiswaModel->where("no_registrasi", $this->request->getVar('no_registrasi'))->first();

    //     $hasil = $SiswaModel->update($this->request->getVar('no_registrasi'), [
    //         'nama' => $this->request->getVar('nama'),
    //         'ttl' => $this->request->getVar('ttl'),
    //         'email' => $this->request->getVar('email'),
    //         'telpon' => $this->request->getVar('telpon'),
    //         'pekerjaan' => $this->request->getVar('pekerjaan'),
    //         'alamat' => $this->request->getVar('alamat'),
    //         'foto_profil' => $nama_foto,
    //     ]);
    //     // $foto->move('assets/images/profil', $nama_foto);

    //     if ($hasil) {
    //         if ($foto != $nama_foto) {
    //             unlink('assets/images/profil/' . $data_old['foto_profil']);
    //             // $foto->move('assets/images/profil', $nama_foto);
    //         }
    //         $foto->move('assets/images/profil', $nama_foto);
    //         $data['code'] = 200;
    //         $data['message'] = "Data berhasil diubah";
    //         return $this->respond($data, 200);
    //     } else {
    //         $data['code'] = 200;
    //         $data['message'] = "Error";
    //         return $this->respond($data, 200);
    //     }
    // }


    // public function create()
    // {
    //     // $data = [
    //     //     'username'=>$this->request->getVar('username'),
    //     //     'password'=>$this->request->getVar('password'),
    //     // ];
    //     $data = $this->request->getPost();
    //     // $this->AkunModel->save($data);
    //     if (!$this->AkunModel->save($data)) {
    //         return $this->fail($this->AkunModel->errors());
    //     }
    //     $response = [
    //         'status' => 200,
    //         'error' => null,
    //         'message' => [
    //             'success' => 'Berhasil masuk'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }

    // public function show($id = null)
    // {
    //     $data = $this->AkunModel->where('id', $id)->findAll();
    //     if ($data) {
    //         return $this->respond($data, 200);
    //     } else {
    //         return $this->failNotFound("Data tidak ditemukan untuk id $id");
    //     }
    // }

    // public function update($id = null)
    // {
    //     $data = $this->request->getRawInput();
    //     $data['id'] = $id;
    //     $isExist = $this->AkunModel->where('id', $id)->findAll();
    //     if (!$isExist) {
    //         return $this->failNotFound("Data tidak ditemukan untuk id $id");
    //     }

    //     if (!$this->AkunModel->save($data)) {
    //         return $this->fail($this->AkunModel->errors());
    //     }

    //     $response = [
    //         'status' => 200,
    //         'error' => null,
    //         'message' => [
    //             'success' => 'Data pegawai dengan id $id berhasil diupdate'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }

    // public function delete($id = null)
    // {
    //     $data = $this->AkunModel->where('id', $id)->findAll();
    //     if ($data) {
    //         $this->AkunModel->delete($id);
    //         $response = [
    //             'status' => 200,
    //             'error' => null,
    //             'message' => [
    //                 'success' => 'Data pegawai berhasil dihapus'
    //             ]
    //         ];
    //         return $this->respondDeleted($response);
    //     } else {
    //         return $this->failNotFound('Data tidak ditemukan');
    //     }
    // }

    // public function showBerita($id = null)
    // {
    //     $this->BeritaModel = new BeritaModel();
    //     $data = $this->BeritaModel->where('id', $id)->findAll();
    //     if ($data) {
    //         return $this->respond($data, 200);
    //     } else {
    //         return $this->failNotFound("Pengumuman tidak ditemukan");
    //     }
    // }

    // public function createBerita()
    // {
    //     $this->BeritaModel = new BeritaModel();
    //     // $data = [
    //     //     'username'=>$this->request->getVar('username'),
    //     //     'password'=>$this->request->getVar('password'),
    //     // ];
    //     $data = $this->request->getPost();
    //     // $this->AkunModel->save($data);
    //     if (!$this->BeritaModel->save($data)) {
    //         return $this->fail($this->BeritaModel->errors());
    //     }
    //     $response = [
    //         'status' => 200,
    //         'error' => null,
    //         'message' => [
    //             'success' => 'Berita berhasih ditambahkan'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }
}
