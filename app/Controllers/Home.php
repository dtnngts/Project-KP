<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('v_admin');
    }

    public function daftar()
    {
        return view('v_daftar');
    }

    public function regis()
    {
        $data = [
			'nama' => $this->request->getVar('nama'),
			'ttl' => $this->request->getVar('ttl'),
			'pekerjaan' => $this->request->getVar('pekerjaan'),
			'alamat' => $this->request->getVar('alamat'),
			'telpon' => $this->request->getVar('telpon'),
			'jenis_kendaraan' => $this->request->getVar('jenis_kendaraan'),
			'instruktur' => $this->request->getVar('instruktur'),
			'paket' => $this->request->getVar('paket'),
			'jam_belajar' => $this->request->getVar('jam_belajar'),
			'status' => $this->request->getVar('status'),
		];

        $DaftarModel = model("DaftarModel");
		$DaftarModel->insert($data);

        return redirect()->to(base_url('/daftar'));
    }
}
