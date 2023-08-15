<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use App\Models\SiswaModel;
use App\Models\InstrukturModel;
use App\Models\BeritaModel;

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
        $SiswaModel = new SiswaModel();
        $InstrukturModel = new InstrukturModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $akun = $SiswaModel->get_data($email, $password);

        if (is_null($akun)) {
            return $this->respond(['error' => 'Email atau Password salah.'], 401);
        }

        $instruktur = $InstrukturModel->find($akun['id_instruktur']);

        $data = array(
            "no_registrasi" => $akun['no_registrasi'],
            "nama" => $akun['nama'],
            "ttl" => $akun['ttl'],
            "email" => $akun['email'],
            "telpon" => $akun['telpon'],
            "pekerjaan" => $akun['pekerjaan'],
            "alamat" => $akun['alamat'],
            "foto_profil" => $akun['foto_profil'],
            "jenis_kendaraan" => $akun['jenis_kendaraan'],
            "kode_kendaraan" => $akun['kode_kendaraan'],
            "instruktur" => $instruktur,
            "paket" => $akun['paket'],
            "jadwal" => $akun['jadwal'],
            "status" => $akun['status'],
            "jenis_pembayaran" => $akun['jenis_pembayaran'],
            "jumlah_pembayaran" => $akun['jumlah_pembayaran'],
            "sisa_pembayaran" => $akun['sisa_pembayaran'],
            "kehadiran" => $akun['kehadiran'],
            "qr" => $akun['qr'],
            "created_at" => $akun['created_at'],
            "updated_at" => $akun['updated_at'],
        );

        $response = [
            'code' => 200,
            'message' => 'Login Succesful',
            'data' => $data,
        ];
        
        return $this->respond($response, 200);
    }

    public function getInstruktur($id_Instruktur) {
        $InstrukturModel = new InstrukturModel();
        
        $instruktur = $InstrukturModel->find($id_Instruktur);

        if (is_null($instruktur)) {
            return $this->respond(['error' => 'Instruktur not found.'], 404);
        }

        $data = array(
            'id_instruktur' => $instruktur['id_instruktur'],
            'nama' => $instruktur['nama'],
            'usia' => $instruktur['usia'],
        );

        $response = [
            'code' => 200,
            'message' => 'Instruktur found',
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
        $data['message']= "success";

        return $this->respond($data, 200);
    }

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
            }
            else if ($data_old['foto_profil'] == null && $nama_foto == 'default') {
                $nama_foto = '';
            }
            else if ($nama_foto == 'default') {
                unlink('assets/images/profil/' . $data_old['foto_profil']);
                $nama_foto = '';
            }
            else if ($foto == $nama_foto) {
                $nama_foto =  $this->request->getVar('foto_profil');
                // $nama_foto = $data_old['foto_profil'];
            }
            else if ($nama_foto != $data_old['foto_profil']) {
                $nama_foto = $foto->getRandomName();
                unlink('assets/images/profil/' . $data_old['foto_profil']);
                $foto->move('assets/images/profil', $nama_foto);
            }
        } 
        // else {
        //     $nama_foto = $data_old['foto_profil'];
        // }

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
