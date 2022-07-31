<?php

namespace App\Controllers;
use App\Models\DaftarModel;

class AdminController extends BaseController
{

    public function __construct()
	{
		$this->DaftarModel = new DaftarModel();
	}

    public function admin()
	{
		// if (session()->get('username') == '') {
		// 	session()->setFlashdata('gagal', 'Anda belum login');
		// 	return redirect()->to(base_url('/'));
		// }
		
		$DaftarModel = model("DaftarModel");
		$data = [
			'title' => "Home",
			'siswa' => $DaftarModel->where('status', 'siswa')->findAll(),
			'alumni' => $DaftarModel->where('status', 'alumni')->findAll(),
			'nama' => session()->get('username')
		];
		return view('v_admin', $data);
	}

    public function siswa()
    {
        $keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$siswa = $this->DaftarModel->where('status', 'siswa')->search($keyword);
		} else {
			$siswa = $this->DaftarModel;
		}

        $data = [
			'siswa' => $siswa->where('status', 'siswa')->findAll(),
		];
        
        return view('data_kursus/v_siswa', $data);
    }
}
